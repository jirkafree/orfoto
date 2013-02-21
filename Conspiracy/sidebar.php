<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social') ) : ?><?php endif; ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Pozvánka') ) : ?>
		<?php
				$the_query = new WP_Query('showposts=1&category_name=novinky');
					while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<!--<div class="pozvanka">-->
							<a class="pozvanka" title="<?php the_title(); ?>" href="<?php the_permalink() ?>" >
							<?php the_post_thumbnail(array(300,300), array ('class' => 'img_pozvanka')); ?>
							 <h2 class="pozvanka" ><?php the_title(); ?></h2>
							 </a>
							 
							 <div class="clear"></div>
						<!--</div>-->				
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
	<?php endif; ?>
	<!-- end div #post -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Block') ) : ?><?php endif; ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Novinky') ) : ?>
		<div class="box clearfloat">
			<div class="boxinside clearfloat jf_test">
				<h2>Novinky</h2>
					<?php
					$the_query = new WP_Query('showposts=10&orderby=post_date&order=desc');
					while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="latest-post">
							<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" >
							<?php the_post_thumbnail(array(80,80), array('class' => 'alignleft')); ?>
							 <?php the_title(); ?></a>
							 <div class="clear"></div>
						</div>				
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
			</div>
		</div>
	<?php endif; ?>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>		
	<!--
		<div class="box clearfloat">
			<div class="boxinside clearfloat">
			<h4>Video</h4>
			<iframe src="http://player.vimeo.com/video/6006857?byline=0&amp;portrait=0" width="260" height="143" frameborder="0"></iframe>
			</div>
		</div>
		<div class="box clearfloat">
			<div class="boxinside clearfloat">
				<h4>Advertisements</h4>
					<div id="ads">				
						<ul>
							<li class="wide"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banners/tf_wide.gif" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banners/tf.png" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banners/ad.png" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banners/cc.png" alt="" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/banners/gr.png" alt="" /></a></li>
						</ul>
					</div>
			</div>
		</div>
	-->	
</div> <!-- end div #sidebar -->
<div class='linka'>
			<?php $paged = (get_query_var('paged'))? get_query_var('paged') : 1; ?>
			<?php $query2 = new WP_Query( array ('posts_per_page' => 4, 'offset' => 7, 'paged' => $paged )); ?>
			<?php if ( is_home() && $query2->have_posts() ) : ?>
				<?php while($query2->have_posts())  : $query2->the_post(); ?>
					<div id="post-<?php the_ID(); ?>" class="postlinka clearfix">					
					<?php if(has_post_thumbnail()) : ?>
						<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'slider-image' ); ?>
						</a>
					</div>

					<div class="post-content">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
									
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
				
			<?php endif; ?>
			
			<?php //include (TEMPLATEPATH . '/includes/pagenav.php'); ?>
</div><!-- end div .linka -->