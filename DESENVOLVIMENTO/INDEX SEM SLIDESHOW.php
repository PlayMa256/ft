<?php 
#CONFIG
$link_noticia = "#";
$texto_noticia = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae purus risus. Duis velit lectus, condimentum ac elit sit amet, venenatis semper tellus. Sed nec purus vel nisl imperdiet congue. Mauris id vestibulum velit.";
$PATH_IMG = "http://localhost/TFUNICAMP/imagens/";
 ?>

<html>
	<head>
		<title>Home</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link type="text/css" href="css/skitter.styles.css" media="all" rel="stylesheet" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="resources/slideshow/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="resources/slideshow/js/jquery.animate-colors-min.js"></script>
		<script type="text/javascript" src="resources/slideshow/js/jquery.skitter.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function() {
		    $('#slideshow').skitter({
				theme: 'clean',
				dots: true, 
				numbers_align: 'center'
			});

		});
		</script>
	</head>
	<body>
		<div id="box">
	        <div id="header">
	        	<div id = "mask"></div>

				<div id="slideshow">
					<ul>
						<li><img src="imagens/1.png" alt="Curso 1" class="banner" /></li>
						<li><img src="imagens/2.png" alt="Curso 2" class="banner" /></li>
						<li><img src="imagens/3.png"  alt="Curso 3" class="banner" /></li>
						<li><img src="imagens/4.png" alt="Curso 4" class="banner" /></li>
					</ul>
				</div>
				
				<div class="pager"></div>
	            <div id="logo">
	                <a href="#"><img src="imagens/logo.png" id="toplogo" /></a>
	            </div><!--logo-->
	        </div><!--header-->


			<!-- Guias -->
			<div id="menu">
				<ul>
					<a class=""><li>HOME</li></a>
					<a class=""><li>PROGRAMAÇÃO</li></a>
					<a class=""><li>PALESTRANTES</li></a>
				</ul>
			</div>
			<a href="#"><span class="Botao">INSCRIÇÕES</span></a>

			<div id="content"><!-- Conteudo -->
				<div id="conteudo">
					<ul>
						<li>
							<div class=""><!-- Sobre -->
								<span class="sectionTitle">O EVENTO</span>
								<div id="sobre">
									A Faculdade de Tecnologia da Unicamp promove a 4ª edição de Tecnologia em Foco, que consiste em Palestras, mini-cursos, seminários, workshops, exposições e atividades culturais e de cidadania oferecidas por especialistas em diferentes temas de interesse da comunidade.
									<span class="enfase">O evento tem por objetivo a difusão de conhecimento técnico; o aperfeiçoamento professional; oferecer novas perspectivas de megócios; divulgar novas oportunidades para o mercado de trabalho.</span>
								</div>
							</div>
						</li>
						<li>
							<div id="noticia" class=""><!-- Noticias -->
								<span class="sectionTitle">NOTÍCIAS</span>
								<div>
									<?php echo $texto_noticia ?>
								</div>
								<a href="<?php echo $link_noticia ?>"><span>continuar lendo</span><a>
								<a href="/noticias.php"><span>mais noticias</span><a>
							</div>
						</li>
						<li>
							<div id="fotos" class=""><!-- Fotos -->
								<span class="sectionTitle">FOTOS</span>
								<ul>
									<?php 
									for ($i=0; $i < $qtd_fotos; $i++) { 
									 	?>
										<li>
											<a href="<?php echo $link_foto[i] ?>">
												<img src="<?php echo $PATH_IMG . $path_foto[i] ?>" class="" />
											</a>
											<span class=""><?php echo $desc_foto ?></span>
										</li>
									 <?php
									 } ?>
								</ul>
							</div><!--fotos-->
						</li>
					</ul>
				</div><!--conteudo-->
				<div id="patrocinio">

				</div><!--patrocinio-->
			</div>

			<div id="footer">
				<img src="" id="footerlogo" />
				<div id="guia guiarodape">
					<a class="">HOME</a>
					<a class="">PROGRAMA&Ccedil;&Atilde;O</a>
					<a class="">PALESTRANTES</a>
				</div>

				<!-- Social -->
				<div id="social">
					<span class="social">CONTATO</span>
					<img src="<?php echo $PATH_IMG . "contato.jpg" ?>" class="social" />

					<span class="social">CURTA</span>
					<img src="<?php echo $PATH_IMG . "curta.jpg" ?>" class="social" />

					<span class="social">SIGA</span>
					<img src="<?php echo $PATH_IMG . "siga.jpg" ?>" class="social" />
				</div><!-- social -->
			</div><!-- footer -->
		</div><!-- box -->
	</body>
</html>