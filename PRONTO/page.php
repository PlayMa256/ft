<?php
define('WP_USE_THEMES', false);
include("wp-blog-header.php");
?>
<?php get_header();?>


  <div id="content">
  
    <div id="page">
    <?php
global $post;
//$myposts = query_posts( array( 'posts_per_page' => 2, 'showposts' => 10, 'paged' => get_query_var('paged') ) );
$myposts = query_posts( array( 'showposts' => 5, 'paged' => get_query_var('paged') ) );;
foreach($myposts as $post) :  setup_postdata($post);
?>

      <div id="noticia">        
        <span class="titulo"><?php the_title();?></span>

        <?php the_content();?>


        <a href="<?php the_permalink(); ?>" class="PageleiaMais">Continue Lendo</a>

      </div><!--noticias-->
<?php endforeach; ?>

        <div class="paginator"><?php wpbeginner_numeric_posts_nav(); ?></div><!--paginator-->             
    </div><!--page-->

</div><!--content-->
<div class="clear"></div>
<?php get_footer();?>
