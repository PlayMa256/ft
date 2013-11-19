<?php get_header();?>




<div id="post">

		<?php if (have_posts()): while (have_posts()) : the_post();?>

			<span class="titulo"><?php the_title();?></span>



		
			<?php the_content();?>





			<?php endwhile; else:?>
			<?php endif;?>




</div>





<?php get_footer();?>