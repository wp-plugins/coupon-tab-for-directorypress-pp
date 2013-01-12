<?php
//print_r($_GET);
$cfw = $_GET['cfw'];
$cfh = $_GET['cfh'];
$cfd = $_GET['cfd'];
$cfw2 = $cfw - 15;
$cfh2 = $cfh - 15;
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

	echo '<html><head><title>GTAVille.com - Print Coupon Code</title></head>';
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
?>
<div id="couponBorder1">
	<div id="couponBorder2">
    	<?php echo $ppCouponDisplay; ?>
        <?php //echo $coupondetail; ?>
    </div>
</div>
</body>
</html>

<?php
?>