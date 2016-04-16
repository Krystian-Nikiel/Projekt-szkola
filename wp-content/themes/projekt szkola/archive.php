<?php
/* Template Name: archive */
get_header();
?>
<?php // Variables $month, $prevmonth, $year and $prevyear are used to section the archive display ?>
<?php 	$month = '';
		$prevmonth = '';
		$year = '';
		$prevyear = ''; ?>

<?php // Cycle through all the posts to display the archive ?>
<?php query_posts('showposts=-1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php // Find the month/year of the current post ?>
	<?php $year = mysql2date('Y', $post->post_date); ?>
	<?php $month = mysql2date('F', $post->post_date); ?>

	<?php // Compare the current month with the $prevmonth ?>
	<?php if ($month != $prevmonth) { ?>
		<?php // If it is different, display the new month and reset $prevmonth ?>
		<h4><?php echo $month . ' ' . $year; ?></h4>
		<?php $prevmonth = $month; ?>

	<?php // In case the previous post was a year ago in the same month ?>
	<?php } elseif ($year != $prevyear) { ?>
		<h4><?php echo $month . ' ' . $year; ?></h4>
		<?php $prevmonth = $month; ?>
		<?php $prevyear = $year; ?>
	<?php } ?>

	<?php // Display the post in this month ?>
	<div class="box-sg-sg2">
	  <div class="box-sg animated fadeIn">
	<a href="<?php the_permalink(); ?>"><?php echo mysql2date('d.m.y', $post->post_date); ?> - <?php the_title(); ?>
		<div class="akt">
				<?php
			      $test=get_post_thumbnail_id($post->ID);
			      $test=wp_get_attachment_url($test);
			   ?>
			<?php  echo "<img src='$test' />";?>
			<div class="akt1">
				<em><?php the_title(); ?></em>
				<?php the_content('Kontynuuj czytanie'); ?>
				<p class="autor"><?php the_author(); ?></p>
				<p class="data"><?php the_date(); ?> </p>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>
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
