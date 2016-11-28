<?php get_header(); ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

   <section class="post-summary-table">
      <?php if ( has_post_thumbnail() ) : ?>
         <a class="post-summary-thumbnail" href="<?php the_permalink();?>">
            <?php the_post_thumbnail( "thumbnail" )?>
         </a>
      <?php endif; ?>
      <section class="post-summary-body">
         <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
         <p class="post-summary-date"><?php the_date(); ?></p>
         <?php the_excerpt (); ?>
      </section>
   </section>

   <?php if ($wp_query->current_post != ( $wp_query->post_count - 1 ) ) : ?>
      <hr class="section-divide" />
   <?php endif; ?>

<?php endwhile; endif; ?>

<? get_footer(); ?>
