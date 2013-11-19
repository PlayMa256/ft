<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
<?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'Meutema' ), max( $paged, $page ) );

	?>

		</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="Author" content="Matheus Gonçalves da Silva" />
		<meta name="Author" content="André Matuliones dos Santos" />
        <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="http://malsup.github.io/jquery.cycle2.js"></script>
<!--statcounter-->
<div id="statcounter_image" style="display:inline;"><a
title="web analytics" href="http://statcounter.com/"
class="statcounter"><img
src="http://c.statcounter.com/9289160/0/4cfa1484/1/"
alt="web analytics" style="border:none;" /></a></div>
<!--Fim statcounter-->

	<script type="text/javascript">
		$(function(){
			$(document).ready(function(){
				$('#slideshow').cycle({
					fx: 'fade',
					speed: 2000
				});
			});

	});
	</script>
	</head>
	<body>
		<div id="box">
				<div id="slideshow" data-cycle-pager="#pager" data-cycle-pager-template="<a href=#> {{slideNum}} </a>">
						<img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/imagemProvisoria.jpg" alt="Campus" class="banner" />
						<img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/lab_ambiental.png" alt="Ambiental" class="banner" />
						<img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/lab_info.png" alt="Informatica" class="banner" />
						<img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/lab_solos.png" alt="Solos" class="banner" />
						<img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/lab_telecom.png" alt="Solos" class="banner" />
				</div>
			<div class="clear"></div>
	        <div id="header">
	            <div id="logo">
		                <a href="<?php echo get_option('home');?>"><img src="<?php bloginfo('template_url');?>/imagens/logo.png" id="" /></a>
		            </div><!--logo-->
		        <div id="menu">
					<ul>
						<li><a href="<?php echo get_option('home');?>">HOME</a></li>
						<li><a href="programacao.php">PROGRAMAÇÃO</a></li>
						<li><a href="palestrantes.php">PALESTRANTES</a></li>
					</ul>
				</div>
				<div id="pager">
				</div>
					<div id="botao">
							<a href=" http://sistemas.ft.unicamp.br/tecnologiafoco/" target="_blank" class="inscricao">INSCRI&Ccedil;&Otilde;ES</a>
					</div><!--Inscrever-se-->
	        </div><!--header-->
			<!-- Guias -->
