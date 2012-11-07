<?php
/*
Template Name: Seminar Page
*/
?>

<?php get_header(); ?>
<section id="page-content">
	<div class="seminar-list">
	<?php
    $mypost = array( 'post_type' => 'seminar', 'meta_key'=>'_semdate', 'orderby' => 'meta_value', 'order' => 'ASC' );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="seminars">
            <h2><?php echo get_the_title(); ?> </h2>
            <h3>Brought to you by <?php echo get_post_meta( get_the_ID(), '_sempres', true); ?> </h3>
            <p class="semData"><strong>Date</strong>: <?php echo get_post_meta( get_the_ID(), '_semdate', true); ?></p>
            <p class="semData"><strong>Time</strong>: <?php echo get_post_meta( get_the_ID(), '_semtime', true); ?></p>
			<p class="semData"><strong>Location</strong>: <?php echo get_post_meta( get_the_ID(), '_semloc', true); ?></p>
			<br />
			<a class="semToggle" href="#" onclick="return false;">Show/Hide Details</a>
            <p class="semDetails" style="display:none;"><?php echo get_the_content(); ?></p>
		</div>
    <?php endwhile; ?>
	</div>
</section>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
