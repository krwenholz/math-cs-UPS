<?php get_header(); ?>
<section id="page-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>
</section>
<?php get_footer(); ?>