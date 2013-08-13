<html>
	<head>
		<title>Programa&ccedil;&atilde;o</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="programacao.css" rel="stylesheet" type="text/css" />
	</head>
	<body>

		<div id="box">
	        <div id="header">
	            <div id="logo">
	                <a href="#"><img src="imagens/logo.png" id="toplogo" /></a>
	            </div><!--logo-->
				<!-- Guias -->
				<div id="menu">
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">PROGRAMA&Ccedil;&Atilde;O</a></li>
						<li><a href="#">PALESTRANTES</a></li>
					</ul>
				</div>
	        </div><!--header-->

			<a href="#"><span class="Botao">INSCRI&Ccedil;&Otilde;ES</span></a>

			<div id="content"><!-- content -->
				<div id="agenda">
					<div class="agenda_dia">
						<span class="evento_data"><b>DIA 14</b> DE OUTUBRO</span>

						<div class="evento">
							<div class="evento_hora">14:00</div>
							<div class="evento_dados">
								<img src="imagens/icon.png" class="icone_curso" alt="TI" />
								<a href="#">
									<div class="evento_descricao">
										<!--Palestra-->Internet das Coisas | 
										<!--Palestrante-->Palestrante: T&acirc;nia Tronco (CPqD)
									</div>
								</a>

								<img src="imagens/icon.png" class="icone_curso" alt="TI" />
								<a href="#">
									<div class="evento_descricao">
										<!--Palestra-->xxxxxxxxxxxxxxxx | 
										<!--Palestrante-->Palestrante: Mkdffl Kkdfdkjf
									</div>
								</a>
								
								<img src="imagens/icon.png" class="icone_curso" alt="TI" />
								<a href="#">
									<div class="evento_descricao">
										<!--Palestra-->xxxxxxxxxxxxxxxx | 
										<!--Palestrante-->Palestrante: Mkdffl Kkdfdkjf
									</div>
								</a>
							</div><!-- evento_dados -->
						</div><!-- evento -->
							

						<div class="evento evento_destaque">
							<div class="evento_hora"><span>19:00</span></div>
							<div class="evento_dados">
								<img src="" class="icone_curso" alt="" />
								<a href="#">
									<div class="evento_descricao">
										CERIM&Ocirc;NIA DE ABERTURA
									</div>
								</a>
							</div><!--evento_dados-->
						</div><!-- evento -->
					</div><!--agenda do dia-->


					<div class="agenda_dia">
						<span class="evento_data"><b>DIA 15</b> DE OUTUBRO</span>

						<div class="evento">
							<div class="evento_hora">08:00</div>
							<div class="evento_dados">
								<img src="imagens/icon.png" class="icone_curso" alt="TI" />
								<a href="#">
									<div class="evento_descricao">
										Mini-curso Arduíno
									</div>
								</a>
							</div><!-- evento_dados -->
						</div><!-- evento -->

						<div class="evento">
							<div class="evento_hora">16:00</div>
							<div class="evento_dados">
								<img src="imagens/icon.png" class="icone_curso" alt="TI" />
								<a href="#">
									<div class="evento_descricao">
										<!--Palestra-->Internet das Coisas | 
										<!--Palestrante-->Palestrante: T&acirc;nia Tronco (CPqD)
									</div>
								</a>
							</div><!-- evento_dados -->
						</div><!-- evento -->

					</div><!--agenda do dia-->
			</div><!-- agenda -->

			<div id="filtro">
				<span>FILTRAR POR:</span>
				<a href="#palestra"><div class="filtro_categoria">PALESTRA</div></a>
				<a href="#minicurso"><div class="filtro_categoria">MINI-CURSO</div></a>
				<a href="#workshop"><div class="filtro_categoria">WORKSHOP</div></a>

				<span>LOCAL</span>
				<div id="map"></div>

				</div>
				<div id="flechas">
					<img src="imagens/flecha.png" style="-webkit-transform: rotate(180deg);" /><br />
					<img src="imagens/flecha.png" />
				</div>
			</div><!--content-->

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