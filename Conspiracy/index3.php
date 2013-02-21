<?php get_header(); ?>	

	<?php if (get_option('eted_activate_featured_gallery' ) =='true' ) {include(TEMPLATEPATH . '/includes/slider.php'); } ?>

	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
    
		<div id="content">
                <div id="jf-nivoslider" >
                
				
             <?php echo do_shortcode('[nivo category_name="Novinky" number=10 effect="boxRain" speed=300 pause=3500]'); ?>
                </div>
            <div class="contentmain clearboth">
                <?php query_posts('category_name=novinky'); ?>
        <?php if ( have_posts() ) : ?>
            <?php while(have_posts())  : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="posthome clearfix">					
					
					<?php if(has_post_thumbnail()) : ?>

					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'slider-image' ); ?>
						</a>
					</div>

					<div class="post-content">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php include (TEMPLATEPATH . '/includes/postmeta.php'); ?>			
						<div class="entry"><?php the_excerpt(); ?></div>
					</div>

					<?php else : ?>

						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php include (TEMPLATEPATH . '/includes/postmeta.php'); ?>			
						<div class="entry"><?php the_excerpt(); ?></div>

					<?php endif; ?>


				</div> <!-- end div #post -->
			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
				</div>
			<?php endif; ?>
			</div> <!-- end div .contentmain -->
			
			<?php include (TEMPLATEPATH . '/includes/pagenav.php'); ?>
		</div> <!-- end div #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
