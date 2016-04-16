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
    <div class="right-box">
      <div class="box-sg3">
        <div class="tytul"><?php the_field('kontakt'); ?></div>
        <div class="box-sg2-1">
          <?php the_field('informacje_kontakt'); ?>
          <a href="#">
          <button class="button button2">Napisz do nas</button>
          </a>

        </div>
        <div class="box-sg2-2">
            <?php the_field('archiwum'); ?>
          <?php if ( ! dynamic_sidebar( 'proba' ) ) : ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
