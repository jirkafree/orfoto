<?php

/* Adding Shortcodes to Sidebar Widgets ********************************************/

add_filter('widget_text', 'do_shortcode');


/* Shortcodes - button ********************************************/

function button_black_shortcode( $atts, $content = null ) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a href="'.$link.'" class="button black">' . do_shortcode($content) . '</a>';
}
add_shortcode('button_black', 'button_black_shortcode');

function button_blue_shortcode( $atts, $content = null ) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a href="'.$link.'" class="button blue">' . do_shortcode($content) . '</a>';
}
add_shortcode('button_blue', 'button_blue_shortcode');

function button_pink_shortcode( $atts, $content = null ) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a href="'.$link.'" class="button pink">' . do_shortcode($content) . '</a>';
}
add_shortcode('button_pink', 'button_pink_shortcode');

function button_green_shortcode( $atts, $content = null ) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a href="'.$link.'" class="button green">' . do_shortcode($content) . '</a>';
}
add_shortcode('button_green', 'button_green_shortcode');

function button_orange_shortcode( $atts, $content = null ) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a href="'.$link.'" class="button orange">' . do_shortcode($content) . '</a>';
}
add_shortcode('button_orange', 'button_orange_shortcode');

function button_purple_shortcode( $atts, $content = null ) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a href="'.$link.'" class="button purple">' . do_shortcode($content) . '</a>';
}
add_shortcode('button_purple', 'button_purple_shortcode');


/* Shortcodes - one_half ********************************************/

function one_half_shortcode( $atts, $content = null ) {
   return '<div class="one_half">' . $content . '</div>';
}
function one_half_last_shortcode( $atts, $content = null ) {
   return '<div class="one_half last">' . $content . '</div>';
}
add_shortcode('one_half', 'one_half_shortcode');
add_shortcode('one_half_last', 'one_half_last_shortcode');


/* Shortcodes - one_third ********************************************/

function one_third_shortcode( $atts, $content = null ) {
   return '<div class="one_third">' . $content . '</div>';
}
function one_third_last_shortcode( $atts, $content = null ) {
   return '<div class="one_third last">' . $content . '</div>';
}
add_shortcode('one_third', 'one_third_shortcode');
add_shortcode('one_third_last', 'one_third_last_shortcode');


/* Shortcodes - one_fourth ********************************************/

function one_fourth_shortcode( $atts, $content = null ) {
   return '<div class="one_fourth">' . $content . '</div>';
}
function one_fourth_last_shortcode( $atts, $content = null ) {
   return '<div class="one_fourth last">' . $content . '</div>';
}
add_shortcode('one_fourth', 'one_fourth_shortcode');
add_shortcode('one_fourth_last', 'one_fourth_last_shortcode');


/* Shortcodes - two_third ********************************************/

function two_third_shortcode( $atts, $content = null ) {
   return '<div class="two_third">' . $content . '</div>';
}
function two_third_last_shortcode( $atts, $content = null ) {
   return '<div class="two_third last">' . $content . '</div>';
}
add_shortcode('two_third', 'two_third_shortcode');
add_shortcode('two_third_last', 'two_third_last_shortcode');


/* Shortcodes - three_fourth ********************************************/

function three_fourth_shortcode( $atts, $content = null ) {
   return '<div class="three_fourth">' . $content . '</div>';
}
function three_fourth_last_shortcode( $atts, $content = null ) {
   return '<div class="three_fourth last">' . $content . '</div>';
}
add_shortcode('three_fourth', 'three_fourth_shortcode');
add_shortcode('three_fourth_last', 'three_fourth_last_shortcode');


/* Shortcodes - dropcap ********************************************/

function dropcap_shortcode( $atts, $content = null ) {
   return '<span class="dropcap">' . $content . '</span>';
}
add_shortcode('dropcap', 'dropcap_shortcode');


/* Shortcodes - box styles ********************************************/

function box_yellow_shortcode( $atts, $content = null ) {
   return '<div class="box_yellow">' . $content . '</div>';
}
function box_green_shortcode( $atts, $content = null ) {
   return '<div class="box_green">' . $content . '</div>';
}
function box_blue_shortcode( $atts, $content = null ) {
   return '<div class="box_blue">' . $content . '</div>';
}

add_shortcode('box_yellow', 'box_yellow_shortcode');
add_shortcode('box_green', 'box_green_shortcode');
add_shortcode('box_blue', 'box_blue_shortcode');


/* Shortcodes - highlight ********************************************/

function highlight_shortcode( $atts, $content = null ) {
   return '<span class="highlight">' . $content . '</span>';
}
add_shortcode('highlight', 'highlight_shortcode');


/* Shortcodes - divider ********************************************/

function divider_shortcode( $atts, $content = null ) {
   return '<div class="divider">' . $content . '</div>';
}
add_shortcode('divider', 'divider_shortcode');

function divider_no_border_shortcode( $atts, $content = null ) {
   return '<div class="divider no_border">' . $content . '</div>';
}
add_shortcode('divider_no_border', 'divider_no_border_shortcode');


/* Shortcodes - multi column ********************************************/

function multi_col_shortcode( $atts, $content = null ) {
   return '<div class="multi_col">' . $content . '</div>';
}
add_shortcode('multi_col', 'multi_col_shortcode');


/* Shortcodes - Pullquote ********************************************/

function pullquote_left( $atts, $content = null ) {
   return '<blockquote class="pullquoteleft left">' . $content . '</blockquote>';
}
add_shortcode('pullquote_left', 'pullquote_left');

function pullquote_right( $atts, $content = null ) {
   return '<blockquote class="pullquote right">' . $content . '</blockquote>';
}
add_shortcode('pullquote_right', 'pullquote_right');


/* Shortcodes - checklist ********************************************/

function checklist($atts, $content = null) {
	return '
<div class="checklist">'.$content.'</div>
';
}
add_shortcode('checklist', 'checklist');

?>