<?php
/*
Template Name: Seminar Page
*/
?>

<?php get_header(); ?>
<section id="page-content">
	<div class="seminar-list">
	<h2 style="text-align:center;">Upcoming Seminars</h2>
	<p style="text-align:center; font-style:italic;">(<a href="<?php echo get_post_type_archive_link('seminar'); ?>">view past seminars</a>)</p>
	<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	date_default_timezone_set("America/Los_Angeles");
	$today = date('Y-m-d');
	$metaQuery = array(array('key' => '_semdate', 'value' => $today, 'compare' => '>='));
	$args = array( 'post_type' => 'seminar', 'posts_per_page' => 5, 'paged'=> $paged, 'meta_query'=> $metaQuery, 'meta_key'=>'_semdate', 'orderby' => 'meta_value', 'order' => 'ASC' );
    $loop = new WP_Query($args);
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
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
	</div>
	<div id="pagination">
		<div class="rightLink"><?php next_posts_link('Later Seminars &rarr;', $loop->max_num_pages) ?></div>
		<div class="leftLink"><?php previous_posts_link('&larr; Earlier Seminars', $loop->max_num_pages) ?></div>
	</div>
</section>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
