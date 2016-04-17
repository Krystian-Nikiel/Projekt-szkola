<div class="box-akt">
  <div class="akt-main-box">
    <?php if( ! empty( get_the_post_thumbnail() ) ) : ?>

    <?php the_post_thumbnail(); ?>

    <?php endif; ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="panel-title"><?php the_title(); ?></div>
    <?php the_content(); ?>

    <?php endwhile; endif; ?>

  </div>
</div>
