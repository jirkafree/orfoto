<?php get_header(); ?>
		
	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
		<div id="content">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="post clearfix">					
								
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php include (TEMPLATEPATH . '/includes/postmeta.php'); ?>			
										
					<div class="entry">
						<?php the_content(); ?> 
						<?php edit_post_link('Upravit', ' &raquo; ', ''); ?>
						<?php link_pages('<p><strong>Stránky:</strong> ', '</p>', 'number'); ?>
						<!-- <?php trackback_rdf(); ?> -->
					</div> <!-- end div .entry -->

					<?php wp_reset_query(); ?>
					
					<div class="comments">
						<?php comments_template(); ?>
					</div> <!-- end div .comments -->
						
				</div> <!-- end div .post -->

			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Nenalezeno'); ?></h3>
				</div>
			<?php endif; ?>
			      										
		</div> <!-- end div #content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>
