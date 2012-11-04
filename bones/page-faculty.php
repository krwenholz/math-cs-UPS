<?php
/*
Template Name: Faculty Page
*/
?>

<?php get_header(); ?>
<section id="page-content">
	<div class="prof-filter">
		<a href="#" name="all" class="profButton" onclick="return false;">All</a>
		<a href="#" name="cs" class="profButton" onclick="return false;">Computer Science</a>
		<a href="#" name="math" class="profButton" onclick="return false;">Math</a>
		<a href="#" name="cs-math" class="profButton" onclick="return false;">Computer Science &amp; Math</a>
	</div>
	<div class="prof-list">
	<?php
    $mypost = array( 'post_type' => 'faculty', 'meta_key'=>'_lname', 'orderby' => 'meta_value', 'order' => 'ASC' );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<span class="prof" data-type="<?php echo get_post_meta( get_the_ID(), '_category', true ); ?>" data-id="prof-<?php the_ID(); ?>">
			<h2><?php echo get_post_meta( get_the_ID(), '_fname', true ); ?> <?php echo get_post_meta( get_the_ID(), '_lname', true ); ?></h2>
			<a href="mailto:<?php echo get_post_meta( get_the_ID(), '_email', true ); ?>">Email</a>
			<a href="<?php echo get_post_meta( get_the_ID(), '_url', true ); ?>">Website</a>
		</span>
    <?php endwhile; ?>
	</div>
</section>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>