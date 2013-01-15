=== Coupon Tab for DirectoryPress (pp-coupon-tab) ===
Contributors: farhansabir
Version: 0.2
Donate link: http://stayonweb.com/wp/plugins/
Tags: 0.2
Requires at least: Directory Press 7
Tested up to: WordPress 3.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

pp-coupon-tab is a WordPress plugin to add a new TAB to directory
listing page. From Directory Press admin, you need to add a few
custom fields described under the admin area. Once a listing has 
a coupon with all the described fields, you will see a new tab
on listing page.

== Description ==

Coupon Tab (pp-coupon-tab) creates a new tab on the directory
listing page of Directory Press. This tab is titled "Coupon"
and displays the coupons listed by the registered users.

This plugin requires DirectoryPress and has been tested till
version 7.1.3 with a slight modification. Please check 
installtion notes for details.

== Installation ==

You can either search for "pp-coupon-tab" from within 
wordpress Admin -> Plugins -> Add New; OR you can:

1. Download the plugin
2. Upload to your wordpress installtion
(or ftp to the `/wp-content/plugins/` directory)
3. Activate the plugin
4. Go to DirectoryPress General Setup. Coupon Tab Options should be visible now.
5. Adjust the height and width of the coupon display area.
6. Go to DirectoryPress->Submissions and add the fields according to No.4 above.
7. Create a test post with all the fields.
8. View it on your website.

Please note that in DirectoryPress update version 7.1.3, 
the tab display has been turned off. To correct this, we have 
included a file named "_single.php". This file needs to be 
copied to:
/wp-content/themes/directorypress/template_directorypress/
This will enable the coupon tab and probably the video tab
as well, provided you have installed it.

Coupon Tab for DirectoryPress uses the following custom fields
in the combination of field Title and Field Name.

* Coupon Code/sow_coupon_code
* Coupon Business/sow_coupon_company
* Coupon Start/sow_coupon_start
* Coupon Expiry/sow_coupon_expiry
* Coupon Discount/sow_coupon_discount
* Coupon Discount Type/sow_coupon_discount_type
* Coupon Details/sow_coupon_details

The sow_coupon_discount_type field can be a drop-down list 
with the value of "Percent, $$$ OFF", which makes it more meaningful.

== Frequently Asked Questions ==

= Does the plugin make any changes to the database? =

No. This plugin does not make any changes to the database.

= Does this plugin require custom fields? =

Yes. n the current version, total of 7 custom fields are required.

= Tabs do not show on DirectoryPress =

If you are using Directory Press version 7.1.3 or later, the tabs
have been disabled by them. You can copy the included "_single.php"
file to the following location:

/wp-content/themes/directorypress/template_directorypress/

Please back up the original file.

== Screenshots ==

1. This screen shot show DirectoryPress -> General Setup page; showing the options for the setup of Coupon Tab.
2. Coupon Tab options for DirectoryPress
3. DirectoryPress -> Submissions -> Custom Fields
4. Directory Listing -> Edit Post showing custom fields
5. WordPress Directory Listing (frontend) showing tabs
6. WordPress Directory Listing page showing Coupon Tab

== Changelog ==

= 0.1 =
* Some text changes

= 0.2 =
20130115-0300
* Reduced the number of files
* Changed wp-plugin version to that of plugin
* Add Coupon Business page
* Some code cleanup and changes

== Upgrade Notice ==

= 0.2 =
This upgrade will add an additional custom field. 
This is a beta release and may contain erros.
Your feedback is important to us.

== Arbitrary section ==

If you have any questions or tips for improvement, please use the support page to contact the developer.

== A brief note ==

N/A

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software")
and one to [StayOnWeb Homepage](http://stayonweb.com/ "Coupon Plugin Developer")
