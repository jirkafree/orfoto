<?php get_header(); ?>
	
	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
		<div id="content">
			<div class="post clearfix">
				<h2><?php _e('404 Error&#58; Not Found'); ?></h2>
				<div class="entry">
					<h3><?php _e('Oops!'); ?></h3>
					<p>Sorry, but the page you are trying to reach is unavailable or does not exist.</p>
				<h3><?php _e('You may interested with this'); ?></h3>
					<?php include (TEMPLATEPATH . '/includes/random-posts.php'); ?>
				</div>				
			</div> <!-- end div .post -->
		</div> <!-- end div #content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>
