<?php
/*
Template Name: Hybrid Portfolio
Version 0.1
*/
?>

<?php get_header('portfolio'); ?><!-- Getting custom header -->

<div id="content">
	<div id="inner-content" class="wrap clearfix">
	<div id="main" class="row clearfix" role="main">
		<div class="large-12 columns">
			<h1 class="page-title"><?php the_title(); ?></h1>

		
			<div class="min-panel panel heading-panel">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					<section class="entry-content"><!-- THE_CONTENT -->
					<?php the_content(); ?>
					</section>
				</article>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>

<!-- Gallery Start --><!-- Gallery Start --><!-- Gallery Start -->

				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
			<li><a href="#"><img src="/bones/wp-content/themes/bones/images/thumbs/1.jpg" data-large="/bones/wp-content/themes/bones/images/1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded" /></a></li>

			<li><a href="#"><img src="/bones/wp-content/themes/bones/images/thumbs/2.jpg" data-large="/bones/wp-content/themes/bones/images/2.jpg" alt="image02" data-description="A plaintful story from a sistering vale" /></a></li>

			<li><a href="#"><img src="/bones/wp-content/themes/bones/images/thumbs/3.jpg" data-large="/bones/wp-content/themes/bones/images/3.jpg" alt="image03" data-description="A plaintful story from a sistering vale" /></a></li>

			<li><a href="#"><img src="/bones/wp-content/themes/bones/images/thumbs/4.jpg" data-large="/bones/wp-content/themes/bones/images/4.jpg" alt="image04" data-description="My spirits to attend this double voice accorded" /></a></li>

			<li><a href="#"><img src="/bones/wp-content/themes/bones/images/thumbs/5.jpg" data-large="/bones/wp-content/themes/bones/images/5.jpg" alt="image05" data-description="And down I laid to list the sad-tuned tale" /></a></li>

			<li><a href="#"><img src="/bones/wp-content/themes/bones/images/thumbs/6.jpg" data-large="/bones/wp-content/themes/bones/images/6.jpg" alt="image06" data-description="Ere long espied a fickle maid full pale" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->

<!-- Gallery End --><!-- Gallery End --><!-- Gallery End -->

		</div>
	</div> <!-- End of Main Row -->
	</div>


</div> <!-- end #main -->
<?php get_footer('portfolio'); ?>