<html>
<head>
<title>GTAVille.com - Print Coupon Code</title>
</head>
<body onLoad="javascript:window.print() ;" >
<style type="text/css" media="print">
#couponBorder1 {
	background-color: #CCC;
	margin: 3px;
	padding: 3px;
	clear: both;
	float: left;
	height: 300px;
	width: 400px;
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
}
#couponBorder2 {
	text-align:center;
	background-color: #EEE;
	margin: 3px;
	padding: 3px;
	clear: both;
	float: left;
	height: 285px;
	width: 385px;
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
	white-space:pre-wrap;
}
</style>

<?php
$couponcode = strtoupper($_GET['cc']);
$couponstart = $_GET['cs'];
$couponexpiry = $_GET['ce'];
$coupondiscount = $_GET['cd'];
$coupondiscounttype = $_GET['cdt'];
$coupondetail = $_GET['cdet'];

			$ppCouponDisplay = '<h5>Coupon Offer:</h5>';
			$ppCouponDisplay .= '<H4>Coupon Code: ' . $couponcode . '</h4>';
			$ppCouponDisplay .= '<H5>Coupon Start Date: ' . $couponstart . '</h5>';
			$ppCouponDisplay .= '<H5>Coupon Expiry Date: ' . $couponexpiry . '</h5>';
			$ppCouponDisplay .= '<H5>Coupon Discount: ' . $coupondiscount . '</h5>';
			$ppCouponDisplay .= '<H5>Coupon Discount Type: ' . $coupondiscounttype . '</h5>';
			$ppCouponDisplay .= '<H5>Coupon Details: ' . $coupondetail . '</h5>';
?>
<div id="couponBorder1">
	<div id="couponBorder2">
    	<?php echo $ppCouponDisplay; ?>
        <?php //echo $coupondetail; ?>
    </div>
</div>
</body>
</html>