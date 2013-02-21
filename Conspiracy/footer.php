
</div> <!-- end div #page-inner -->
</div> <!-- end div #page -->
<!-- END PAGE -->


	<?php if (get_option('eted_activate_bottom_menu' ) =='true' ) {include(TEMPLATEPATH . '/includes/bottom-menu.php'); } ?> 
	

	<!-- BEGIN FOOTER -->
	<div id="footer">
	<div id="footer-inner" class="clearfix">
		
		<div id="footer-left">
		<!--	<p><a href="http://www.ceske-sablony.cz" title="České wordpress šablony">Wordpress české šablony</a> | <a href="http://www.az-poptavka.cz/" title="AZ poptávka" alt="AZ poptávka"><strong>AZ poptávka</strong></a></p>-->			
		</div> <!-- end div #footer-left -->

		<div id="footer-right">
			<p>© <?php echo date('Y');?> <a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>" ><?php bloginfo('name');?></a><br />
			<?php echo stripslashes(get_option('eted_footer_text')); ?></p>
		</div> <!-- end div #footer-right -->

	</div> <!-- end div #footer-inner -->
	</div> <!-- end div #footer -->
	<!-- END FOOTER -->
		
</div> <!-- end wrapper -->

<?php wp_footer(); ?>
<?php if ( get_option('eted_ga_code') <> "" ) { echo stripslashes(get_option('eted_ga_code')); } ?>

</body>
</html>