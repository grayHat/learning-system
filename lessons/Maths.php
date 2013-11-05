<?PHP 
require_once('./include/membersite_config.php');
include "./include/navigation.php";

if(!$fgmembersite->CheckLogin())
{
$fgmembersite->RedirectToURL('../index.php');
exit;
}
?>
<html>
	<head>
		<title>Maths</title>
		<link rel='STYLESHEET' type='text/css' href='../style/reset.css' />
		<link rel='STYLESHEET' type='text/css' href='../style/lessons.css' />
		<?php
		layout_a();
	?>
	</head>
	<body>
	<script src="scripts/jquery.js"></script>
	<div id="logo"><a href="../login-home.php">ELSYS</a></div>
	<?php
			layout($fgmembersite);
	?>
	<div id="nameOfClass">Maths</div>
		<table>
			<tr> 
				<th>Lesson name</th>
				<th>Materials</th>
			</tr>
			<tr> 
				<td>Equalations</td>
				<td>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='xdfgcvhgbjk'>Book</a>
					<br/>
					<img src='images/ppt.png' alt='pic' width='15' height='15'/>
					<a href='rsthgsfaykgz'>Presentation</a>
					<br/>
				</td>
			</tr>
			<tr> 
				<td>Square root</td>
				<td>
					<img src='images/video.png' alt='pic' width='15' height='15'/>
					<a href='http://youtu.be'>You Tube</a>
					<br/>
				</td>
			</tr>
		</table>
	</body>
</html>
