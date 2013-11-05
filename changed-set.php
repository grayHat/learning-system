<?PHP
require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin()){
	$fgmembersite->RedirectToURL("index.php");
    exit;
}
include "./include/navigation.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Changed settings</title>
      <link rel="STYLESHEET" type="text/css" href="style/reset.css">
	  <?php
		layout_a();
	?>
</head>
<body>
<div id='fg_membersite_content'>
<h2>Changed settings</h2>
Your settings has been changed !
<p>
Return to 
<button type="button" onclick="location.href = 'login-home.php';" class="btn btn-primary">home</button>
</p>

</div>
</body>
</html>
