<?PHP
require_once("./include/membersite_config.php");
include "./include/navigation.php";

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/page.css">
	  <link rel="STYLESHEET" type="text/css" href="style/reset.css">
	  <?php
		layout_a();
	?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/bg_BG/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script src="scripts/jquery.js"></script>
	<div id="logo"><a href="login-home.php">ELSYS</a></div>
	<?php
			layout($fgmembersite);
	?>
<br/>
<iframe class="pull-left" width="23%" height="250px" style="border: 1px solid black;" src="http://us1.rssfeedwidget.com/getrss.php?time=1382805591546&amp;x=http%3A%2F%2Fwww.pcworld.com%2Findex.rss&amp;w=200&amp;h=500&amp;bc=333333&amp;bw=1&amp;bgc=transparent&amp;m=20&amp;it=true&amp;t=PcWorld&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" id="rssOutput">News</iframe>
<div class="jumbotron">
  <div class="container">
    <h1>Hello!</h1>
    <p>In this site you can find useful resources,easy-to-learn lessons and self-preparation tests.To get started just press "The Button".</p>
    <p><a class="btn btn-primary btn-lg" href="about.php">The Button</a></p>
  </div>
</div>
<iframe id="calendar" class="pull-right" src="calendar.html" width="22%" height="230px" frameborder="0" scrolling="no"></iframe>
<div class="fb-like pull-right" data-href="https://www.facebook.com/tues.bg" data-width="10" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="standard" data-action="like" data-show-faces="true" data-send="false"></div>
</body>
</html>
