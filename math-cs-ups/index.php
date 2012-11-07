<?php get_header(); ?>
<section id="splash">
	<div id="slider">
		<div id="news-pos">
			<div id="news">
					<div class="news-item">
						<p class="title">Professors Akers & Sawin prepare for departure</p>
							<p class="time">April 3rd, 2012</p>
					</div>
					<div class="news-item">
						<p class="title">Computer Science debuts capstone contract major</p>
							<p class="time">April 4th, 2012</p>
					</div>
					<div class="news-item">
						<p class="title">Mathematics hires two new professors</p>
							<p class="time">April 5th, 2012</p>
					</div>
				</div>
		</div>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/old_school.png" width="525" height="300"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/court.png" width="525" height="300"></li>
			<li><img src="http://placekitten.com/525/300" width="525" height="300"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/wires.png" width="525" height="300"></li>
			<li><img src="http://placepuppy.it/525/300" width="525" height="300"></li>
			<li><img src="http://placehold.it/525x300" width="525" height="300"></li>
		</ul>
	</div>
	<nav role="navigation">
		<?php bones_main_nav(); ?>
	</nav>
</section>
<?php get_footer(); ?>
