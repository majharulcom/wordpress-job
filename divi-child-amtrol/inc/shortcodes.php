<?php

//Tab Shortcodes
//usages [toggle_warp][/toggle_warp]
function toggle_warp_shortcode( $atts, $content = null )
{
	$toggle_warp = '<div id="toggle-view" class="career_tabs_custom">' . do_shortcode( $content ) . '</div>';
	
	return $toggle_warp;
}

add_shortcode('toggle_warp', 'toggle_warp_shortcode');


// usages: [toggle title="" location="" category="" tutton_text="" button_link=""]content[/toggle]
function amtrol_toggle_shortcode( $atts, $content = null  ) {
	extract( shortcode_atts( array(
		'title' => '',
		'location' => '',
		'category' => '',
		'tutton_text' => '',
		'button_link' => '',
		'active' => '',
	), $atts ) );
	$toggle_content = '<div class="acc_con">
		<div class="toggle_title_sec">
		<h2 style="color: #d5002c;">'.$title.'</h2>
		<h3><strong>Location:</strong> '.$location.' <strong>Category:</strong> '.$category.' </h3>
		</div>
		<span class="link"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
		<div class="panel '.$active.'">
		<p>' . do_shortcode( $content ) . '</p>
		<a class="big_link" href="'.$button_link.'"><span style="color: #d5002c;">'.$tutton_text.'<i class="fa fa-caret-right big_right_arrow"></i></span></a>
		</div>
	</div>';
	return $toggle_content;	
};
add_shortcode('toggle', 'amtrol_toggle_shortcode');