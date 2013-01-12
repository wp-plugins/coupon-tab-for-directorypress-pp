<?php
/*
Plugin Name: Coupon Tab for PremiumPress
Plugin URI: http://stayonweb.com
Description: This plugin will add a new tab on your listing pages that will show coupons submited by listing owners. Visit <a href="admin.php?page=setup">General Setup</a> page for options. Derived from pp-video-tab by Richard Bonk.
Version: 0.1.0
Author: Farhan Sabir
Author URI: http://farhansabir.com
*/
 
function coupon_tab_admin() {

	echo 	'<fieldset>
			<div class="titleh"><h3>Coupon Tab Settings</h3></div>
			<p>Please make sure that you have set the names of the custom fields for <strong>coupon (listed below)</strong> otherwise the coupon will not show.</p>';
	echo 	'<p>Field Name and Key Name combination is given below:<BR><BR>';
	echo 	'Coupon Code/sow_coupon_code<BR>
			Coupon Start/sow_coupon_start<BR>
			Coupon Expiry/sow_coupon_expiry<BR>
			Coupon Discount/sow_coupon_discount<BR>
			Coupon Discount Type/sow_coupon_discount_type<BR>
			Coupon Details/sow_coupon_details';	
	echo 	'<div class="ppt-form-line">	
			<p>Please set the WIDTH and HEIGHT of the coupon frame below:</p>
			<span class="ppt-labeltext">Width:</span>	 
			<input name="adminArray[coupon_tab_frame_width]" type="text" class="ppt-forminput" value="'
			.get_option('coupon_tab_frame_width').'" style="width: 200px;">
			<span class="ppt-labeltext">Height:</span>	 
			<input name="adminArray[coupon_tab_frame_height]" type="text" class="ppt-forminput" value="'
			.get_option('coupon_tab_frame_height').'" style="width: 200px;">
			<div class="clearfix"></div></div>
			</fieldset>'; 
}
add_action('premiumpress_admin_setup_right_column','coupon_tab_admin');
 
function add_coupon_tab() {
	global $post;
	echo 'tt1';
	//require plugin_dir_path(__FILE__) . 'pp-coupon-functions.php';
	echo 'tt2';
	if(is_single()) {
		if(strlen(get_post_meta($post->ID, "sow_coupon_code", true)) > 1 ){
			echo CouponStyle();

			/* Fields added:
			Coupon Code/sow_coupon_code
			Coupon Start/sow_coupon_start
			Coupon Expiry/sow_coupon_expiry
			Coupon Discount/sow_coupon_discount
			Coupon Discount Type/sow_coupon_discount_type
			Coupon Details/sow_coupon_details	*/

			$couponbdistance = 15;
			$couponfw = get_option('coupon_tab_frame_width');
			$couponfh = get_option('coupon_tab_frame_height');
			$couponfw2 = (int)$couponfw - (int)$couponbdistance;
			$couponfh2 = (int)$couponfh - (int)$couponbdistance;

			$couponcode = get_post_meta($post->ID, "sow_coupon_code", true);
			$couponstart = get_post_meta($post->ID, "sow_coupon_start", true);
			$couponexpiry = get_post_meta($post->ID, "sow_coupon_expiry", true);
			$coupondiscount = get_post_meta($post->ID, "sow_coupon_discount", true);
			$coupondiscounttype = get_post_meta($post->ID, "sow_coupon_discount_type", true);
			$coupondetails = get_post_meta($post->ID, "sow_coupon_details", true);

			$ppCouponDisplay = '<h2>Coupon Details:</h2>';
			$ppCouponDisplay .= '<H1>Coupon Code: ' . $couponcode . '</h1>';
			$ppCouponDisplay .= '<H4>Coupon Start Date: ' . $couponstart . '</h4>';
			$ppCouponDisplay .= '<H4>Coupon Expiry Date: ' . $couponexpiry . '</h4>';
			$ppCouponDisplay .= '<H4>Coupon Discount: ' . $coupondiscount . '</h4>';
			$ppCouponDisplay .= '<H4>Coupon Discount Type: ' . $coupondiscounttype . '</h4>';
			$ppCouponDisplay .= '<H5>Coupon Details: ' . $coupondetails . '</h5>';

			$ppCouponPop = "cfw=$couponfw&cfh=$couponfh&cfd=$couponbdistance&cc=$couponcode&cs=$couponstart&ce=$couponexpiry";
			$ppCouponPop .= "&cd=$coupondiscount&cdt=$coupondiscounttype&cdet=";
			$ppCouponPop .= urlencode($coupondetails);
			$ppurl = plugins_url();
			$ppurl .=  '/pp-coupon-tab/pp-coupon-popup.php?' . $ppCouponPop;
			//$ppurl = urlencode($ppurl);
			//echo $ppurl;

			echo '<script>jQuery(\'.page_tabs\').append(\'<li><a href="#coupon">Coupon</a></li>\');</script>';
			echo '<script>jQuery(\'.page_container\').append(\'<div id="coupon" class="page_content nopadding"><div id="couponBorder1" ><div id="couponBorder2" >';
			echo $ppCouponDisplay ;
			echo '<BR><BR><a href="' . $ppurl . '"  onclick="return popitup("' . $ppurl . '") >Print Coupon</a>';
			echo '</div></div></div><!-- end coupon tab -->\');</script>';
		}
	}
}
add_action( 'wp_footer', 'add_coupon_tab' );	

function CouponStyle()
{
	//global $wpdb;
	//include '/wp-includes/functions.php';
	global $post;
	$couponbdistance = 15;
	$couponfw = get_option('coupon_tab_frame_width');
	$couponfh = get_option('coupon_tab_frame_height');
	$couponfw2 = (int)$couponfw - (int)$couponbdistance;
	$couponfh2 = (int)$couponfh - (int)$couponbdistance;
	//echo "1-$couponfw, 2-$couponfh, 3-$couponfw2, 4-$couponfh2";
	echo '<!-- FARHAN:' . $couponfh . ' -->';
	$styletag  = '<style type="text/css">' . "\n";
	$styletag .=  '#couponBorder1 {
		background-color: #CCC;
		margin: 30px;
		padding: 3px;
		clear: both;
		float: left;
		height: ' . $couponfh . 'px;
		width: ' . $couponfw . 'px;
		border-color:#00F;
		border-top-width: 2px;
		border-right-width: 2px;
		border-bottom-width: 2px;
		border-left-width: 2px;
		border-top-style: dashed;
		border-right-style: dashed;
		border-bottom-style: dashed;
		border-left-style: dashed;
		position: relative;
	}' . "\n";
	$styletag .= '#couponBorder2 {
		text-align:center;
		background-color: #EEE;
		margin: 3px;
		padding: 3px;
		clear: both;
		float: left;
		height: ' . $couponfh2 . 'px;
		width: ' . $couponfw2 . 'px;
		border-color:#00F;
		border-top-width: 2px;
		border-right-width: 2px;
		border-bottom-width: 2px;
		border-left-width: 2px;
		border-top-style: dashed;
		border-right-style: dashed;
		border-bottom-style: dashed;
		border-left-style: dashed;
		position: relative;
	}' . "\n";
	$styletag .= '</style>' . "\n";
	return $styletag;
	
}

?>