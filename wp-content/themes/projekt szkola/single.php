<?php get_header();?>

<div class="box-sg-sg2">
  <div class="box-akt">
    <div class="akt-main-box">
<div class="tytul-akt"><?php the_title(); ?></div>
    <div class="akt-mega-box">
      <p class="data"><?php the_date(); ?> </p>
      <?php the_author(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </div>
    </div>
  </div>
  </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
