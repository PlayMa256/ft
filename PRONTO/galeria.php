<?php
define('WP_USE_THEMES', false);
include("wp-blog-header.php");
?>
<?php get_header();?>

    <?php
      //A quantidade de valor a ser exibida
      $quantidade = 12;
      //a pagina atual
      $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
      //Calcula a pagina de qual valor será exibido
      $inicio     = ($quantidade * $pagina) - $quantidade;
    ?>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/resources/lightbox/js/lightbox-2.6.min.js"></script>
	<link href="<?php bloginfo('template_url');?>/resources/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" />

  <div id="content">
  	<div id="galeria">
	  	<ul>
		  	<?php 
				$sql = mysql_query("SELECT * FROM wp_ngg_pictures LIMIT $inicio, $quantidade") or die(mysql_error());
				if(mysql_num_rows($sql) == 0){
						echo '<h1>Não há fotos na galeria</h1>';
				}
				while($res = mysql_fetch_array($sql)){
					$filename = $res['filename'];
					echo '<li><a href="wp-content/gallery/ola/'.$filename.'" data-lightbox="ola" title="'.$res['description'].'"><img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/gallery/ola/thumbs/thumbs_'.$filename.'" /></a></li>';


				}


		  	?>
		</ul>
	</div><!--galeria-->
  <div class="paginacao">
	<?php
      /**
       * SEGUNDA PARTE DA PAGINAÇÃO
       */
      //SQL para saber o total
      $sqlTotal   = "SELECT pid FROM wp_ngg_pictures";
      //Executa o SQL
      $qrTotal    = mysql_query($sqlTotal) or die(mysql_error());
      //Total de Registro na tabela
      $numTotal   = mysql_num_rows($qrTotal);
      //O calculo do Total de página ser exibido
      $totalPagina= ceil($numTotal/$quantidade);
       /**
        * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
        */
       $exibir = 3;
       /**
        * Aqui montará o link que voltará uma pagina
        * Caso o valor seja zero, por padrão ficará o valor 1
        */
       $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
       /**
        * Aqui montará o link que ir para proxima pagina
        * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
        * caso contrario, ele pegar o valor da página + 1
        */
       $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
       /**
        * Agora monta o Link paar Primeira Página
        * Depois O link para voltar uma página
        */
       echo '<a href="?pagina=1" class="paginacaoA">Primeira Página</a> ';

       
       /**
        * O loop para exibir os valores à esquerda
        */
       for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
            if($i > 0)
             echo '<a href="?pagina='.$i.'" class=""> '.$i.' </a>';
      }
       /**
        * Depois o link da página atual
        */
       echo '<a href="?pagina='.$pagina.'" class="">'.$pagina.'</a>';
       /**
        * O loop para exibir os valores à direta
        */
       
       for($i = $pagina+1; $i < $pagina+$exibir; $i++){
            if($i <= $totalPagina)
             echo '<a href="?pagina='.$i.'" class=""> '.$i.' </a>';
      }
      /**
        * Agora monta o Link para Próxima Página
        * Depois O link para Última Página
        */
      echo "  <a href=\"?pagina=$totalPagina\" class=\"paginacaoA\">Última Página</a>";
?>
</div>
  	</div><!--content-->
<div class="clear"></div>
<?php get_footer();?>
