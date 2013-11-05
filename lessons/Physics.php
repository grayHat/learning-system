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
		<title>Physics</title>
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
	<div id="nameOfClass">Physics</div>
		<table>
			<tr> 
				<th>Lesson name</th>
				<th>Materials</th>
			</tr>
			<tr> 
				<td>Gravity</td>
				<td>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='http://en.wikipedia.org/wiki/Gravity'>Wikipedia</a>
					<br/>
					<img src='images/video.png' alt='pic' width='15' height='15'/>
					<a href='http://youtu.be/IpfQspeCXsc'>Youtube</a>
					<br/>
				</td>
			</tr>
			<tr>
				<td>Electricity</td>
				<td>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='http://bg.wikipedia.org/wiki/%D0%9F%D0%B0%D1%81%D0%BA%D0%B0%D0%BB_(%D0%B5%D0%B7%D0%B8%D0%BA_%D0%B7%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B8%D1%80%D0%B0%D0%BD%D0%B5)'>Wikipedia</a>
					<br/>
					<img src='images/video.png' alt='pic' width='15' height='15'/>
					<a href='http://youtu.be/0VPvQ_dXMhw'>YouTube</a>
					<br/>
				</td>
			</tr>
			<tr>
				<td>Solar Wind</td>
				<td>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='http://wiki.freepascal.org/Var'>Wikipedia</a>
					<br/>
					<img src='images/video.png' alt='pic' width='15' height='15'/>
					<a href='http://youtu.be/Yt-YTrabs8g'>YouTube</a>
					<br/>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='https://Valetins-PC:8443/svn/resources/ref.pdf'>Book</a>
					<br/>
				</td>
			</tr>
			<tr>
				<td>Quantum Physics</td>
				<td>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='http://www.tutorialspoint.com/pascal/pascal_loops.htm'>Tutorials Point</a>
					<br/>
					<img src='images/video.png' alt='pic' width='15' height='15'/>
					<a href='http://youtu.be/hSjwC7jXdVQ'>Youtube</a>
					<br/>
				</td>
			</tr>
			<tr>
				<td>Test</td>
				<td>
					<img src='images/txt.png' alt='pic' width='15' height='15'/>
					<a href='http://homepages.uconn.edu/~ph101vc/quiz/quiz.html'>101 Quizzes</a>
					<br/>
				</td>
			</tr>
		</table>
	</body>
</html>
