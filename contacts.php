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
<!-- saved from url=(0029)http://localhost/contacts.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
      <title>Links</title>
	  <link rel="STYLESHEET" type="text/css" href="style/reset.css">
	  <link rel="STYLESHEET" type="text/css" href="style/contacts.css">
		<?php
		layout_a();
	?>
	</head>
	<body style="">
		<div id="logo"><a href="login-home.php">ELSYS</a></div>
		<?php
				layout($fgmembersite);
		?>
		
		<h1>Contacts</h1>
		<br><table class="table table-hover">
			<thead>
				<tr><td>Names</td><td>Email</td><td>Skype</td><td>Phone</td></tr>
			</thead>
			<tbody>
				<tr><td>Valentin Jonev</td><td><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:valentin.ionev@live.com">valentin.ionev@live.com</a></td><td>valentin.ionev</td><td><i class="glyphicon glyphicon-earphone"></i> +359 897 647 905</td></tr>
				<tr><td>Margarita Ilieva</td><td><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:margiemim@gmail.com">margiemim@gmail.com</a></td><td>skype</td><td><i class="glyphicon glyphicon-earphone"></i> +359 884 032 495</td></tr>
				<tr><td>Nikolay Rangelov</td><td><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:nikolay.rangelov@live.com">nikolay.rangelov@live.com</a></td><td>niki_3224</td><td><i class="glyphicon glyphicon-earphone"></i> +359 886 699 976</td></tr>
				<tr><td>Radostin Angelov</td><td><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:angelovradostin@gmail.com">angelovradostin@gmail.com</a></td><td>skype</td><td><i class="glyphicon glyphicon-earphone"></i> +359 898 633 813</td></tr>
				<tr><td>Svetlin Jordanov</td><td><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:svetlin8878@abv.bg">svetlin8878@abv.bg</a></td><td>svetlin9898</td><td><i class="glyphicon glyphicon-earphone"></i> +359 895 446 745</td></tr>
			</tbody>
			
			
		</table>
		
		<p>
			ELSYS - <a href="http://www.elsys-bg.org/">Click!</a><br/>
			bgcoder - <a href="http://www.bgcoder.com/">Click!</a><br/>
			PcWorld - <a href="http://pcworld.bg/">Click!</a><br/>
			InfoMan - <a href="http://infoman.musala.com/">Click!</a>	
		</p>
		
		<p>
			To get the source email us to get username and password then click this <a href="https://localhost:8443/svn/project/project.rar">link</a> .
		</p>
		
	
	<footer>
		Terms and Conditios * Time of creation: October 2013
	</footer>

</body></html>