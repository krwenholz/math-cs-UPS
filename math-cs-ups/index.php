<?php get_header(); ?>
<section id="splash">
	<div id="slider">
		<div id="news-pos">
            <div id="news">
                <div class="news-item">
				<p class="title">Welcome to the Mathematics and Computer Science department at the
					<a style="color:#99CCFF;" href="http://pugetsound.edu">University of Puget Sound</a>. Our
					department offers courses in statistics, calculus, computer
					programming and many other topics.  Majors and minors are offered
					for both Mathematics and Computer Science, along with an
                    interdisciplinary degree in Computer Science and Business.
                </p>
                </div>
			</div>
		</div>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/harned_back.jpg" width="525" height="300"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/lab.jpg" width="525" height="300"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/harned_front.jpg" width="525" height="300"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/study.jpg" width="525" height="300"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/opp.jpg" width="525" height="300"></li>
		</ul>
	</div>
	<nav role="navigation">
		<?php bones_main_nav(); ?>
	</nav>
</section>
<?php get_footer(); ?>
