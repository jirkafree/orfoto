<?php

/* Shortcodes ********************************************/

include_once("includes/function-shortcodes.php");

/* Enable support for post-thumbnails ********************************************/
		
	// If we want to ensure that we only call this function if
	// the user is working with WP 2.9 or higher,
	// let's instead make sure that the function exists first
	
	if ( function_exists( 'add_theme_support' ) ){
	add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
	set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails, 200 pixels wide by 200 pixels tall, hard crop mode
	add_image_size( 'slider-image', 640, 360, true ); // Post thumbnails for gallery, hard crop mode
	}


/* WordPress 3.0 Menu Editor ********************************************/

	// add menu support and fallback menu if menu doesn't exist
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
		    register_nav_menu('wpj-top-menu', __('Top Menu'));
   		    register_nav_menu('wpj-navigation', __('Navigation'));
		}
	}
	function wpj_default_menu() {
		echo '<ul>';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. get_option('home') . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}


/* Excerpt ********************************************/

	/* Make the "read more" link to the post */
	function new_excerpt_more($more) {
	       global $post;
		return '<span class="read_more"><a href="'. get_permalink($post->ID) . '">' . 'Číst dále' . '</a></span>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	/* Set the excerpt length */
	function new_excerpt_length($length) {
		return 25;
	}
	add_filter('excerpt_length', 'new_excerpt_length');


/* Widgets ********************************************/

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
	    'before_widget' => '<div class="box clearfloat"><div class="boxinside clearfloat">',
	    'after_widget' => '</div></div>',
	    'before_title' => '<h4 class="widgettitle">',
	    'after_title' => '</h4>',
	));

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Bottom Menu Left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Bottom Menu Center',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));	

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Bottom Menu Right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));	
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Block',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Easy Nivo Slider',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Pozvánka',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Social',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Novinky',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));
/* Theme Options ********************************************/

$themename = "Conspiracy";
$shortname = "eted";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category"); 

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 

array( "name" => "General",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Logo URL",
	"desc" => "Enter the link to your logo image.",
	"id" => $shortname."_logo",
	"type" => "text",
	"std" => ""),
	
array( "name" => "Shortcut Icon",
	"desc" => "Enter the link to your shortcut icon.",
	"id" => $shortname."_shortcut_icon",
	"type" => "text",
	"std" => ""),

array( "name" => "Custom CSS",
	"desc" => "Want to add any custom CSS code? Put in here, and the rest is taken care of. This overrides any other stylesheets. eg: body { color: blue; }",
	"id" => $shortname."_custom_css",
	"type" => "textarea",
	"std" => ""),		

array( "name" => "Activate Banner Ad in Header?",
	"desc" => "Check the box to activate banner ad in header area. Banner ad size is 468 x 60px.",
	"id" => $shortname."_activate_banner_top",
	"type" => "checkbox",
	"std" => "true"),

array( "name" => "Banner Ad URL",
	"desc" => "Enter your banner ad code here.",
	"id" => $shortname."_banner_top",
	"type" => "textarea",
	"std" => ""),

array( "type" => "close"),

array( "name" => "Featured Content Slider",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Activate Featured Content Slider",
	"desc" => "Check the box to featured content slider in homepage.",
	"id" => $shortname."_activate_featured_gallery",
	"type" => "checkbox",
	"std" => "true"),

array( "name" => "Category for Featured Content Slider in home page",
	"desc" => "Choose a category from which featured posts are drawn.",
	"id" => $shortname."_feat_cat",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),

array( "name" => "Amount of Featured Content Slider posts",
	"desc" => "Choose the amount of posts of featured content slider.",
	"id" => $shortname."_feat_num",
	"type" => "text",
	"std" => "5"),

array( "type" => "close"),
	
array( "name" => "Bottom Menu",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Activate 3 Column Bottom Menu",
	"desc" => "Check the box to activate 3 column bottom menu. This is a widgetised area. To fill it with 'stuff', use the Appearance - widgets.",
	"id" => $shortname."_activate_bottom_menu",
	"type" => "checkbox",
	"std" => "true"),

array( "type" => "close"),
array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Footer text",
	"desc" => "Enter text used in the footer. It can be HTML",
	"id" => $shortname."_footer_text",
	"type" => "textarea",
	"std" => ""),
	
array( "name" => "Google Analytics Code",
	"desc" => "Paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
	"id" => $shortname."_ga_code",
	"type" => "textarea",
	"std" => ""),	
	
array( "type" => "close")
);


function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=functions.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=functions.php&reset=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");

}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
 
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>

<h3>Customizing Your Top Navigation Menus</h3>
<p>This theme supports the <a href="nav-menus.php">Custom Menus</a> feature. This feature allows you to customize your navigation menus. For detail instruction, please read <a href="http://en.support.wordpress.com/menus/">http://en.support.wordpress.com/menus/</a>.</p>

<h3>How to display Featured Images for each post</h3>
<p>Featured Images allow you to display unique custom images for specific posts. Open the editor of the post where you want to display a unique custom image, and locate the Featured Image module in the bottom right corner under Page Attributes. Click Set featured image. </p>

<h3>How to display big images for Featured Slider in Homepage</h3>
<p>This theme support posts to include in the Featured Content Slider. Go to menu below, choose a category from which featured posts are drawn.</p>
<p>Use Features Images to display big images for slider in homepage. Each image will be cropped to sizes 640 x 360 px. You should host those images in your domain. Open the editor of the post where you want to display a unique custom image, and locate the Featured Image module in the bottom right corner under Page Attributes. Click Set featured image.</p>
 
<h3>General Tips</h3>
<p>Install Regenerate Thumbnails Plugin. You need this plugin to regenerate thumbnails in WordPress. The WordPress post thumbnail support cannot generate thumbnails on the fly.</p>
<p>This theme is supporting threaded comments. To activate the threaded comments, go to <a href="options-discussion.php">Settings-Discussion</a>, and activate the  "Enable threaded (nested) comments".</p>


<h3>To easily use the <?php echo $themename;?> theme, use the menu below.</h3>
 
<?php break;
 
case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.gif" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">

 
<?php break;
 
}
}
?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<div style="font-size:9px; margin-bottom:10px;">Icons: <a href="http://www.woothemes.com/2009/09/woofunction/">WooFunction</a></div>
 </div> 
 

<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>