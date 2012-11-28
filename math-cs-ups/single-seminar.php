<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
<section id="page-content">
	<div class="seminar-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
		$sem_date = get_post_meta( get_the_ID(), '_semdate', true);
		$sem_time = get_post_meta( get_the_ID(), '_semtime', true);
		$sem_loc = get_post_meta( get_the_ID(), '_semloc', true);
		$sem_deets = get_the_content();
		?>
		<div class="seminars">
			<h2><?php echo get_the_title(); ?></h2>
			<h3>Brought to you by <?php echo get_post_meta( get_the_ID(), '_sempres', true); ?> </h3>
			<?php if($sem_date): ?>
			<p class="semData"><strong>Date</strong>: <?php echo $sem_date; ?></p>
			<?php endif; ?>
			<?php if($sem_time): ?>
			<p class="semData"><strong>Time</strong>: <?php echo $sem_time; ?></p>
			<?php endif; ?>
			<?php if($sem_loc): ?>
			<p class="semData"><strong>Location</strong>: <?php echo $sem_loc; ?></p>
			<?php endif; ?>
			<?php if($sem_deets): ?>
			<br />
			<a class="semToggle" href="#" onclick="return false;">Show/Hide Details</a>
			<p class="semDetails" style="display:none;"><?php echo $sem_deets; ?></p>
			<?php endif; ?>
		</div>
    <?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>