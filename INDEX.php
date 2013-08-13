<html>
	<head>
		<title>Home</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="http://malsup.github.io/jquery.cycle.all.js"></script>
		<!--NAO MECHERR....VAI SABER O QUE VAI DAR SE VC MECHER......-->
		<script type="text/javascript">
		$(function(){
			$(document).ready(function(){
				$('#slideshow ul').cycle({
					fx: 'fade',
					pager: '#pager',
					speed: 2000
				});
			});
	});

		</script>
		<!--NAO MECHERR....VAI SABER O QUE VAI DAR SE VC MECHER......-->
		
	</head>
	<body>
		<div id="box">

				<div id="slideshow">
					<ul>
						<li><img src="imagens/1.png" alt="Curso 1" class="banner" /></li>
						<li><img src="imagens/2.png" alt="Curso 2" class="banner" /></li>
						<li><img src="imagens/3.png"  alt="Curso 3" class="banner" /></li>
						<li><img src="imagens/4.png" alt="Curso 4" class="banner" /></li>
					</ul>
				</div>
					

			<div class="clear"></div>
	        <div id="header">
            <div id="logo">
	                <a href="#"><img src="imagens/logo.png" id="" /></a>
	            </div><!--logo-->

	        <div id="menu">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">PROGRAMAÇÃO</a></li>
					<li><a href="#">PALESTRANTES</a></li>
				</ul>
			</div>

			<div id="pager"></div>
	        </div><!--header-->
			<!-- Guias -->




			<div id="content"><!-- Conteudo -->
				<div class="clear"></div>
				<div id="conteudo">
		<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</li>
					</ul>
				</div><!--conteudo-->
				<div class="clear"></div>
				<div id="patrocinio">
					<h1>Patrocinadores</h1>
				</div><!--patrocinio-->
			</div><!--content-->

			<div id="footer">
				<div id="logoMenu">
					<a href="#" border="0"><img src="imagens/logo.png" width="500px"/></a>
				</div><!--logoMenu-->
				<div id="footerMenu">
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">PROGRAMAÇÃO</a></li>
						<li><a href="#">PALESTRANTES</a></li>
					</ul>
				</div><!--FooterMenu-->
			</div><!-- footer -->
		</div><!-- box -->
	</body>
</html>