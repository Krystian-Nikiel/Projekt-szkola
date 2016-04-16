
<?php
/* Template Name: Strona Glowna */
get_header();
?>
<div class="box-sg-sg2">
  <div class="box-sg animated fadeIn">
    <div class="tytul"><?php the_field('aktualnosci'); ?></div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- TYTUŁ STRONY -->
      <?php the_content(); ?><!-- TREŚĆ STRONY -->
      <?php
      /*
      Tutaj wypiszemy wszystkie wpisy
      Użyjemy do tego obiektu klasy WP_Query
      */
      $args = array(
        'posts_per_page'   => 5,
        'post_type'        => 'post'
      );
      $posts_query = new WP_Query( $args );
      if ( $posts_query->have_posts() ) {
        while ( $posts_query->have_posts() ) {
          $posts_query->the_post();
          $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          echo "<a href='" . get_permalink() . "'>";
          ?>
          <div class="akt">
            <a href="<?php the_permalink();?>">
              <?php
              echo "<img src=" . $url . " />";
              ?>
            </a>
            <div class="akt1">
              <em><?php the_title(); ?></em>
              <?php the_content('Kontynuuj czytanie'); ?>
              <p class="autor"><?php the_author(); ?></p>
              <p class="data"><?php the_date(); ?> </p>
            </div>
          </div>
          <?php
        }
      }
      /*
      Dzięki temu wrócimy do danych strony
      a nie tych postów w powyższej pętli
      */
      wp_reset_postdata();
      ?>
    <?php endwhile; endif; ?></div>
<?php echo get_next_posts_link('Go to next page'); ?>
    <div class="box-sg2 animated fadeIn">
      <div class="tytul"><?php the_field('kontakt'); ?></div>
      <div class="box-sg2-1">
        <?php the_field('informacje_kontakt'); ?>
        <a href="#">
        <button class="button button2">Napisz do nas</button>
        </a>
      </div>
      <div class="box-sg2-2 animated fadeIn">
        <?php if ( ! dynamic_sidebar( 'proba' ) ) : ?>
        <?php endif; ?>
      </div>
  <?php get_footer(); ?>
