<?php
/* Template Name: Aktualnosci */
get_header();
?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- TYTUŁ STRONY -->
		<?php the_content(); ?><!-- TREŚĆ STRONY -->
		<?php
		/*
		Tutaj wypiszemy wszystkie wpisy
		Użyjemy do tego obiektu klasy WP_Query
		*/
		$args = array(
			'posts_per_page'   => -1,
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
					<a href="<?php the_permalink();?>" </a>
						<?php
						echo "<img src=" . $url . " />";
						?>
					</a>
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
	<?php endwhile; endif; ?>



<?php get_footer(); ?>
