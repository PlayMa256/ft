<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
define ("WP_USETHEMES",false);
include ("wp-blog-header-php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Programa&ccedil;&atilde;o</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="programacao.css" rel="stylesheet" type="text/css" />
        
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="./wp-content/themes/Meutema/resources/modalbox/scriptaculous/lib/prototype.js"></script>
		<script type="text/javascript" src="./wp-content/themes/Meutema/resources/modalbox/scriptaculous/src/scriptaculous.js"></script>
		<script type="text/javascript" src="./wp-content/themes/Meutema/resources/modalbox/modalbox.js"></script>
		<script type="text/javascript">
			var $j = jQuery.noConflict();
			x = 0;


			function diminuirFonte(){
				if (parseInt($j("#MB_header").height()) > "100"){
					$j("#MB_caption").css("font-size",parseInt($j("#MB_header").css("font-size"))-1 + "px");
					diminuirFonte();
				}
			}
			$j(document).ready(function(){
				x = 0;
				xTot = 0;

				$j(window).scroll(function(){
					x = x == 0? 1 : x;
					while($j(document).scrollTop() >= ($j("#agenda .agenda_dia:nth-child(" + x + ")").offset().top)){
						x++;
					}
					x--;
				});

				$j("#agenda").fadeOut('fast',function(){
					$j("#agenda").load("agenda.php",function(){
						$j("#agenda").fadeIn();
						xTot = $j("#agenda .agenda_dia").length;
					});
				});

				<?php if (isset($_GET["evento"])){
					$idEvento=$_GET["evento"];

					$titulo = mysqli_query($con,"SELECT Titulo FROM tb_evento WHERE EventoId = $idEvento");
					$row = mysqli_fetch_assoc($titulo);
				?>
				Modalbox.show('./wp-content/themes/Meutema/resources/template.php?id=<?php echo $idEvento ?>',{title:'<?php echo $row["Titulo"] ?>'});
				aux();
				<?php	
				} ?>

				$j("#filtro a").click(function() {
					x = 0;
					xTot = $j("#agenda .agenda_dia").length;
					agendaPath = "agenda.php?tipo=" + $j(this).attr("value");
					$j("#agenda").fadeOut('fast',function(){
						$j("#agenda").load(agendaPath, function(){
							$j("#agenda").fadeIn('fast');
						});
					});
				});

				$j("#anterior").click(function() {
					if(x > 1){
						$j("html, body").animate({
							scrollTop: $j("#agenda .agenda_dia:nth-child(" + (--x) + ")").offset().top
						});	
					} else x = 1;
				});

				$j("#proximo").click(function() {
					if ((x < xTot) || (xTot == 1)){
						$j("html, body").animate({
							scrollTop: $j("#agenda .agenda_dia:nth-child(" + (++x) + ")").offset().top
						});
					} else x = xTot;
				});

				$j(document).keypress(function(e){
					var code = (e.keyCode ? e.keyCode : e.which);
					if (code == 107){
						$j("#anterior").trigger("click");
					}
					else if (code == 106){
						$j("#proximo").trigger("click");
					}
				})
			});
		</script>
		<link rel="stylesheet" href="./wp-content/themes/Meutema/resources/modalbox/modalbox.css" type="text/css" media="screen" />
	</head>
	<body>
		<div id="infocurso"></div>
		<div id="box">
	        <div id="header">
	            <div id="logo">
	                <a href="#"><img src="./wp-content/themes/Meutema/imagens/logo.png" alt="Tecnologia em Foco" id="toplogo" /></a>
	            </div><!--logo-->
				<!-- Guias -->
				<div id="menu" class="menu">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="programacao.php">PROGRAMA&Ccedil;&Atilde;O</a></li>
						<li><a href="palestrantes.php">PALESTRANTES</a></li>
					</ul>
				</div>
	        </div><!--header-->


			<div id="content">
				<div id="botao" class="botao"><a href=" http://sistemas.ft.unicamp.br/tecnologiafoco/" target="_blank">INSCRI&Ccedil;&Otilde;ES</a></div>
				<div id="agenda">
				</div><!-- agenda -->

				<div id="flechas">
					<img id="anterior" src="./wp-content/themes/Meutema/imagens/flecha.png" alt="Dia anterior" style="-webkit-transform: rotate(180deg); -moz-transform: rotate(180deg);" /><br />
					<img id="proximo" src="./wp-content/themes/Meutema/imagens/flecha.png" alt="Pr&oacute;ximo dia" />
				</div><!--flechas-->

				<div id="filtro">
					<span>FILTRAR POR:</span>
					<a href="#" value="palestra"><div class="filtro_categoria">PALESTRA</div></a>
					<a href="#" value="minicurso"><div class="filtro_categoria">MINI-CURSO</div></a>
					<a href="#" value="workshop"><div class="filtro_categoria">WORKSHOP</div></a>
					<a href="#" value="geral"><div class="filtro_categoria">GERAIS</div></a>
					<a href="#" value="all"><div class="filtro_categoria">TODOS</div></a>

					<span>LOCAL</span>
					<div id="map">
						<iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Faculdade+de+Tecnologia+-+UNICAMP+-+R.+Paschoal+Marmo,+1888+-+Nova+It%C3%A1lia,+Limeira+-+S%C3%A3o+Paulo,+13484-332,+Universidade+Estadual+de+Campinas,+Brasil&amp;aq=0&amp;oq=Faculdade+de+Tecn&amp;sll=-22.843823,-47.261794&amp;sspn=0.171802,0.338173&amp;t=m&amp;ie=UTF8&amp;hq=Faculdade+de+Tecnologia+-+UNICAMP+-+R.+Paschoal+Marmo,+1888+-+Nova+It%C3%A1lia,+Limeira+-+S%C3%A3o+Paulo,+13484-332,+Universidade+Estadual+de&amp;hnear=Campinas+-+S%C3%A3o+Paulo,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-22.56262,-47.423215&amp;spn=0.009908,0.010686&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Faculdade+de+Tecnologia+-+UNICAMP+-+R.+Paschoal+Marmo,+1888+-+Nova+It%C3%A1lia,+Limeira+-+S%C3%A3o+Paulo,+13484-332,+Universidade+Estadual+de+Campinas,+Brasil&amp;aq=0&amp;oq=Faculdade+de+Tecn&amp;sll=-22.843823,-47.261794&amp;sspn=0.171802,0.338173&amp;t=m&amp;ie=UTF8&amp;hq=Faculdade+de+Tecnologia+-+UNICAMP+-+R.+Paschoal+Marmo,+1888+-+Nova+It%C3%A1lia,+Limeira+-+S%C3%A3o+Paulo,+13484-332,+Universidade+Estadual+de&amp;hnear=Campinas+-+S%C3%A3o+Paulo,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-22.56262,-47.423215&amp;spn=0.009908,0.010686&amp;z=15" target="_blank" style="color:#848484;text-align:left">Exibir mapa ampliado</a></small><br />
						<span style="color:#959595; font-size:12pt;">Rua Pascoal Marmo, 1888<br />Jd. Nova Itália, Limeira - SP</span>
					</div>
				</div><!--filtro-->

			</div><!--content-->

			<div id="cursos">
				<table class="icone_curso">
					<tr>
						<td><img src="./wp-content/themes/Meutema/imagens/icon_Ambiental.png" alt="Ambiental" /></td>
						<td>Engenharia Ambiental<br />Tec. Controle Ambiental</td>
						<td><img src="./wp-content/themes/Meutema/imagens/icon_Construcao.png" alt="Constru&ccedil;&atilde;o" /></td>
						<td>Tec. Constru&ccedil;&atilde;o de Edifícios</td>
						<td><img src="./wp-content/themes/Meutema/imagens/icon_Info.png" alt="Inform&aacute;tica" /></td>
						<td>Inform&aacute;tica</td>
						<td><img src="./wp-content/themes/Meutema/imagens/icon_Telecom.png" alt="Telecomunica&ccedil;&otilde;es" /></td>
						<td>Engenharia de Telecomunica&ccedil;&otilde;es</td>
					</tr>
				</table>
			</div>


			<div id="footer">
				<img src="./wp-content/themes/Meutema/imagens/logoFooter.png" alt="Tecnologia em Foco" id="footerlogo" style="float:left;margin-left:165px;" />

		        <div id="menufooter" class="menu">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="programacao.php">PROGRAMA&Ccedil;&Atilde;O</a></li>
						<li><a href="palestrantes.php">PALESTRANTES</a></li>
					</ul>
				</div>

				<!-- Social -->
				<div id="social">
					<table>
						<tr>
							<td><span class="social">CONTATO</span></td>
							<td><span class="social">CURTA</span></td>
							<td><span class="social">SIGA</span></td>
						</tr>
						<tr>
							<td><a href="mailto:tf@ft.unicamp.br" target="_blank"><img src="./wp-content/themes/Meutema/imagens/contato_email.png" alt="Email" class="social" /></a></td>
							<td><a href="https://www.facebook.com/pages/Semana-Tecnologia-em-Foco-/1375164696041625" target="_blank"><img src="./wp-content/themes/Meutema/imagens/contato_facebook.png" alt="Facebook" class="social" /></a></td>
							<td><a href="https://twitter.com/TecEmFocoFT" target="_blank"><img src="./wp-content/themes/Meutema/imagens/contato_twitter.png" alt="Twitter" class="social" /></a></td>
						</tr>
					</table>
				</div><!-- social -->
			</div><!-- footer -->
		</div><!-- box -->
	</body>
</html>