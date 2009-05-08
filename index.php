<?php
require_once("include/set_env.php");
require_once("include/font.php");
require_once("server.php");
require_once('content/main.php');

$location = "front_page";

if(isset($_REQUEST['loc']))
{
   $location = $_REQUEST['loc'];
}

require_once('include/translate.php');
 
function display_main($location)
{
   $id = translate($location);
   
   global $db;
   
   $result = $db->getAll('select * from wp_posts where ID = ?', array($id));
   
   while( list($temp, $row) = each($result) )
   {
      $tmp = preg_replace_callback("/(&lt;\?php.*&gt;)/",'escape_html', $row['post_content']);
      eval('?>'.$tmp);
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MC Studios</title>
<link rel="openid.server" href="http://www.myopenid.com/server">
<link rel="openid.delegate" href="http://griphiam.myopenid.com">
<style type="text/css" media="screen"><!-- @import "style.css"; --></style>
<!--[if lte IE 6]>
<link rel="stylesheet" href="iestyle.css" type="text/css" />
<![endif]-->
<?php $xajax->printJavascript('./ajax/'); ?>
<script type="text/javascript" src="./scripts/lib/prototype.js"></script>
<script type="text/javascript" src="./scripts/src/scriptaculous.js"></script>
<script type="text/javascript" src="scripts/custom/toggle.js"></script>
<?php include("include/highlight.inc"); ?>
</head>
<body>
<div id="container">
<div id="header">
<div id="logo" class="filter cursor" onclick="xajax_main('front_page');"></div>

<div id="top_menu">
<?php display_top_menu(); ?>
</div>

<div id="bottom_menu"></div>

</div> <!-- end header -->

<div id="left"></div>
<div id="left2"></div>
<div id="right"></div>

<div id="main_container">
<div id="main">
<?php display_main($location); ?>
</div>
<div class="spacer">&nbsp;</div>
</div>

<div id="footer">

<div id="copyright">
&#169; MC Studios 1998-2008<br /><br />
<div id="site_links"><?php display_site_links(); ?></div>
</div>

<div id="hidden_links"> <!-- Support Search Engines -->
<?php /* display_site_links(); */ ?>
</div>

</div> <!-- end footer -->
</div> <!-- end container -->
</body>
</html>
