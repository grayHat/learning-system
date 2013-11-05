<?PHP
error_reporting(E_ALL ^ E_NOTICE);
require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin()){
	$fgmembersite->RedirectToURL("index.php");
    exit;
}
include "./include/navigation.php";
$fgmembersite->LogOut();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Log out</title>
      <link rel="STYLESHEET" type="text/css" href="style/reset.css" />
      <link rel="STYLESHEET" type="text/css" href="style/logout.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	  <?php
		layout_a();
	?>
</head>
<body>
<div id="logo"><a href="login-home.php">ELSYS</a></div>
<h2>You have logged out</h2>
<p>
<button type="button" class="btn btn-primary" id="again" onClick="window.location.reload()">Login Again</button>
</p>

</body>
</html>