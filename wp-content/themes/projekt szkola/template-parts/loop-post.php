
<div class="akt animated fadeIn">

  <?php if( ! empty( get_the_post_thumbnail() ) ) : ?>

    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>

  <?php endif; ?>

  <div class="akt1">
    <em><?php the_title(); ?></em>
    <p class="author"><?php the_author(); ?>
      <?php the_date(); ?></p>
      <?php the_excerpt(); ?>
    </div>
</div>
