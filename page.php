<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    	<h1 class="text-light"><?php the_title(); ?></h1>

    	<p class="text-light"><?php the_content(); ?></p>	

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
