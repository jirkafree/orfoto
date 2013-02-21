<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div>
		<input type="text" value="Hledej" name="s" id="s" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Hledej';}" />
		<input type="submit" id="searchsubmit" value="Hledej" />
	</div>
</form>
