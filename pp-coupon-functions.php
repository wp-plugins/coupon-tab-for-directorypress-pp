<?php
function CouponStyle()
{
	global $wpdb;
	global $post;
	$couponfw = $wpdb->get_option('coupon_tab_frame_width');
	$couponfh = get_option('coupon_tab_frame_height');
	$couponfw2 = (int)$couponfw - 15;
	$couponfh2 = (int)$couponfh - 15;
	echo "1-$couponfw, 2-$couponfh, 3-$couponfw2, 4-$couponfh2";
	$styletag  = '<style type="text/css">' . "\n";
	$styletag .=  '#couponBorder1 {
		background-color: #CCC;
		margin: 30px;
		padding: 3px;
		clear: both;
		float: left;
		height: ' . $couponwidth . 'px;
		width: ' . $couponheight . 'px;
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
		height: ' . $couponheight2 . 'px;
		width: ' . $couponwidth2 . 'px;
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