<?php get_header(); ?>
	<section id="page-content">
		<div class="seminar-list">
			<h2 style="text-align:center;">Past Seminars</h2>
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			date_default_timezone_set("America/Los_Angeles");
			$today = date('Y-m-d');
			$metaQuery = array(array('key' => '_semdate', 'value' => $today, 'compare' => '<'));
			$args = array( 'post_type' => 'seminar', 'posts_per_page'=>5, 'paged'=> $paged, 'meta_query'=> $metaQuery, 'meta_key'=>'_semdate', 'orderby' => 'meta_value', 'order' => 'DESC' );
			$loop = new WP_Query($args);
			$loop->set( 'posts_per_page', 5 );
			?>
			<?php if (have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
				<div id="pagination">
					<div class="rightLink"><?php next_posts_link('Earlier Seminars &rarr;', $loop->max_num_pages) ?></div>
					<div class="leftLink"><?php previous_posts_link('&larr; Later Seminars', $loop->max_num_pages) ?></div>
				</div>
			<?php else : ?>
		
				<article id="post-not-found" class="hentry clearfix">
					<header class="article-header">
						<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					</section>
					<footer class="article-footer">
						<p><?php _e("This is the error message in the custom posty type archive template.", "bonestheme"); ?></p>
					</footer>
				</article>
			<?php endif; ?>
		</div>
	</section>
<?php get_footer(); ?>