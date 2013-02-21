<?php get_header(); ?>
	
			
	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
		<div id="content">				
			
			<div id="subtitle">
			<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					<?php /* If this is a category archive */ if (is_category()) { ?>
						<?php single_cat_title('Právě procházíte: '); ?>
					<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
						Archive for the <?php single_tag_title(); ?> Tag
					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						Archive for <?php the_time('F jS, Y'); ?>										
				 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						Archive for <?php the_time('F, Y'); ?>									
					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						Archive for <?php the_time('Y'); ?>										
				  	<?php /* If this is a search */ } elseif (is_search()) { ?>
						Search Results							
				  	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						Author Archive										
					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						Blog Archives	
			<?php } ?>					
			</div>


				<?php while (have_posts()) : the_post(); ?>		
					<div id="post-<?php the_ID(); ?>" class="post clearfix">					

						<?php if(has_post_thumbnail()) : ?>
	
						<div class="thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(200,200)); ?>
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
				
				<?php include (TEMPLATEPATH . '/includes/pagenav.php'); ?>

			<?php else : ?>
				<div class="post">
					<div class="entry">
						<p>Sorry, but the page you are trying to reach is unavailable or does not exist.</p>							
					</div> <!-- end div .entry -->
				</div>
			<?php endif; ?>
			
					
		</div> <!-- end div #content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>
