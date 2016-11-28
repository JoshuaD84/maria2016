<?php get_header(); ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
   <h1 class="single-post-header"><?php the_title(); ?></h1>
   <p class="single-post-date"><?php the_date(); ?></p>
   <?php the_content (); ?>

<?php endwhile; endif; ?>

<? get_footer(); ?>
