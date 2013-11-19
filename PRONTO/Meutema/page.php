<?php
define('WP_USE_THEMES', false);
include("wp-blog-header.php");
?>
<?php get_header();?>
  <div id="content">
    <div id="page">
<?php
	global $post, $paged;
	if ( get_query_var( 'paged' ) )
	    // On a paged page.
	    $paged = get_query_var( 'paged' );

	else if ( get_query_var( 'page' ) )
	    // On a "static" page.
	    $paged = get_query_var( 'page' );

	// Default.
	else
	    $paged = 1;

	$myposts = get_posts(array(
	    'posts_per_page' => 10,
	    'paged' => $paged,
	) );
?>
      <div id="noticia">        
        <span class="titulo"><?php the_title();?></span>
        <?php the_content();?>
		<span class="PageLeiaMais">
        	<a href="<?php the_permalink(); ?>">Continue Lendo</a>
        </span>
      </div><!--noticias-->
<?php endforeach; ?>
		<div class="paginator"><?php wp_pagenavi();?></div><!--paginator-->             
    </div><!--page-->
</div><!--content-->
<div class="clear"></div>
<?php get_footer();?>
