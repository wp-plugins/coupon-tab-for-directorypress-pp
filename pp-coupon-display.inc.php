<?php
	$ppCouponDisplay  = '<HR>';
	$ppCouponDisplay .= '<h1>Coupon Details:</h1>';
	$ppCouponDisplay .= '<H3>Coupon Code: ' . $couponcode . '</h3>';
	$ppCouponDisplay .= '<H4>Coupon Start Date: ' . $couponstart . '</h4>';
	$ppCouponDisplay .= '<H4>Coupon Expiry Date: ' . $couponexpiry . '</h4>';
	$ppCouponDisplay .= '<H4>Coupon Discount: ' . $coupondiscount . '</h4>';
	$ppCouponDisplay .= '<H4>Coupon Discount Type: ' . $coupondiscounttype . '</h4>';
	$ppCouponDisplay .= '</div></div>' . "\n" . '<!-- end coupon tab -->' . "\n";
			//echo '<H4>Coupon Code: ' . $couponcode . '</h4>';
			//echo '<iframe width="'.get_option('coupon_tab_frame_width').'" height="'.get_option('coupon_tab_frame_height').'" src="'.$couponlink.'" frameborder="0" allowfullscreen></iframe>';

?>