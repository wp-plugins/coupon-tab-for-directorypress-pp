<?php
$cfw  = $_GET['cfw'];
$cfh  = $_GET['cfh'];
$cfd  = $_GET['cfd'];
$cfw2 = $cfw - 15;
$cfh2 = $cfh - 15;
$surl = $_GET['surl'];
$couponcode 		= strtoupper($_GET['cc']);
$couponcompany		= $_GET['cb'];
$couponstart 		= $_GET['cs'];
$couponexpiry 		= $_GET['ce'];
$coupondiscount 	= $_GET['cd'];
$coupondiscounttype = $_GET['cdt'];
$coupondetail 		= $_GET['cdet'];

//$ppCouponDisplay .= '<h5>Coupon Offer:</h5>';
$ppCouponDisplay  = '<h5>Coupon Offer:</h5>';
$ppCouponDisplay .= '<H4>Coupon Code: ' . $couponcode . '</h4>';
$ppCouponDisplay .= '<H4>Coupon Business: ' . $couponcompany . '</h4>';
$ppCouponDisplay .= '<H5>Coupon Start Date: ' . $couponstart . '</h5>';
$ppCouponDisplay .= '<H5>Coupon Expiry Date: ' . $couponexpiry . '</h5>';
$ppCouponDisplay .= '<H5>Coupon Discount: ' . $coupondiscount . '</h5>';
$ppCouponDisplay .= '<H5>Coupon Discount Type: ' . $coupondiscounttype . '</h5>';
$ppCouponDisplay .= '<H5>Coupon Details: ' . $coupondetail . '</h5>';
$ppCouponDisplay .= '<BR><H6>' . $surl . '</h6>';

	echo '<html><head><title>';
	echo 'Print Coupon Code</title></head>';
	echo '<!-- <body onLoad="javascript:window.print() ;" > --><body>	';

$styletag  = '<style type="text/css">' . "\n";
$styletag .=  '#couponBorder1 {
		background-color: #CCC;
		margin: 30px;
		padding: 3px;
		clear: both;
		float: left;
		height: ' . $cfh . 'px;
		width: ' . $cfw . 'px;
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
		height: ' . $cfh2 . 'px;
		width: ' . $cfw2 . 'px;
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
echo $styletag;

$htmldisp  = '<div id="couponBorder1">';
$htmldisp .= '<div id="couponBorder2">';
$htmldisp .= $ppCouponDisplay;
$htmldisp .= '</div></div></body></html>';
echo $htmldisp;
?>