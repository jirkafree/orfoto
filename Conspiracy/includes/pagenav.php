<div id="pagenavi" class="clearfix">
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
	<?php next_posts_link('<span class="alignleft">&nbsp; &laquo; Starší články</span>') ?>
	<?php previous_posts_link('<span class="alignright">Není publikováno &raquo; &nbsp;</span>') ?>
	<?php } ?>
</div> <!-- end div #pagenavi -->
