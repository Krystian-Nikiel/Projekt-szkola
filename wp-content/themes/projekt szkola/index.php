
<?php get_header(); ?>

<div class="left-box animated fadeIn">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('template-parts/loop', 'post'); ?>

  <?php endwhile; endif;
  global $wp_query;
  echo paginate_links([
    'current' => max( 1, get_query_var('page') ),
    'total' => $wp_query->max_num_pages
  ]);
  ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
