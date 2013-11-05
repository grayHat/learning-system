<?php

function layout($fgmembersite){
	echo '<script src="scripts/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Navigation</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="login-home.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Classes <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="lessons/Programming.php">Programming</a></li>
							<li><a href="lessons/Maths.php">Maths</a></li>
							<li><a href="lessons/Physics.php">Physics</a></li>
							<li><a href="lessons/Chemistry.php">Chemistry</a></li>
							<li><a href="lessons/Biology.php">Biology</a></li>
							<li><a href="lessons/History.php">History</a></li>
						</ul>
					</li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><p class="navbar-text">Signed in as <a href="profile.php" style="text-decoration:none">' . $fgmembersite->UserFullName() . '</a></p></li>
					<li><a href="logout.php" >Log out</a></li>
				</ul>
			</div>
		</nav>';
	
}
function layout_a(){
	echo '<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">';
}
