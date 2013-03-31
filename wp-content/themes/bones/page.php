<?php
/*
Template Name: Foundation 4 Hybrid
Version 0.1
*/
?>
<?php get_header(); ?><!-- Getting custom header -->
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
		</div>
	</div> <!-- End of Main Row -->
	</div>
	


<div id="inner-content" class="wrap clearfix">
	<div id="blog" class="row clearfix" role="blogs">
		<div class="large-12 columns">
<!-- Start the loop -->
			<?php query_posts('cat=3'); while (have_posts()) : the_post();?>
			<div class="min-panel panel post-panel">
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				<h2><?php the_title(); ?></h2>
				<span class="post-meta"><?php the_time('jS F Y') ?></span>
					<section class="entry-content blog-entry"><!-- THE_CONTENT -->		
					<hr width="60%">
					<?php the_content(); ?>
					<hr width="60%">
					</section>
				</article>			
			</div>
			<?php endwhile; ?>
<!-- End the loop -->		
		</div>

	</div>
</div>





</div> <!-- end #main -->
<?php get_footer('foundation'); ?>