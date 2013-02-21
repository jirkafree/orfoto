<?php get_header(); ?>
		
	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
		<div id="content">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" class="post clearfix">					
													
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php include (TEMPLATEPATH . '/includes/postmeta.php'); ?>			
					
					<div class="entry" class="clearfix">
																		
						<?php the_content(); ?> 
												
						<?php wp_reset_query(); ?>
						<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
						<!-- <?php trackback_rdf(); ?> -->
					</div> <!-- end div .entry -->

					<div class="divider no_border"></div>
					
					<div id="nav-below" class="clearfix">
						<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
					</div><!-- #nav-below -->
					
					<div class="comments">
						<?php comments_template(); ?>
					</div> <!-- end div .comments -->
						
				</div> <!-- end div .post -->

			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
				</div>
			<?php endif; ?>
			      										
		</div> <!-- end div #content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>
