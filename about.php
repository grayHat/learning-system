<?PHP
require_once("./include/membersite_config.php");
include "./include/navigation.php";

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="STYLESHEET" type="text/css" href="style/about.css">
	  <link rel="STYLESHEET" type="text/css" href="style/reset.css">
		<title>About</title>
		<?php
		layout_a();
	?>
	</head>
	<body>
	<script src="scripts/jquery.js"></script>
	<div id="logo"><a href="login-home.php">ELSYS</a></div>
	<?php
			layout($fgmembersite);
	?>
		<article>
			<header><h3>ELSYS Student System</h3></header>
				<p>
					One morning, a widower and a programmer transform a ring into a vampire.
				</p>
			<footer>
				This site was created by ELSYS students for the HACKFMI 2.0.
			</footer>
		</article>
		<article id="gettingStarted">
			<header><h3>Getting Started</h3></header>
			<p>
				To see the lectures just press classes above on the navigation and then select the class you want to see.<br/>
				<img src="images/classes.png" width="518px" height="384px" /> <br/>
				To contact us click the contacts navigation.<br/>
				<img src="images/contacts.png" width="518px" height="384px" />
			</p>
		</article>
	</body>
	<footer></footer>
</html>
