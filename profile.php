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
		<title>Profile</title>
		<link rel="STYLESHEET" type="text/css" href="style/reset.css">
		<link rel="STYLESHEET" type="text/css" href="style/profile.css">
		<?php
		layout_a();
	?>
	</head>
	<body>
		<div id="logo"><a href="login-home.php">ELSYS</a></div>
	<?php
			layout($fgmembersite);	
	?>
	<h2>Profile Setting</h2>
	<form action="save.php" method="POST">
	<div class="panel panel-default">
  <div class="panel-body">
	<div class="input-group input-group-lg">
  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <input name="name" id="name" type="text" class="form-control input-lg" placeholder="Username" value="<?php echo $_SESSION['name_of_user']  ?>">
</div>
	<div class="input-group input-group-lg">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" id="username" name="username" class="form-control input-lg" placeholder="Username" value="<?php echo $_SESSION[$fgmembersite -> GetLoginSessionVar()]  ?>">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input id="email" type="text" name="email" class="form-control input-lg" placeholder="Username" value="<?php echo $_SESSION['email_of_user']  ?>">
</div>
<button type="button" class="btn btn-primary"><a href="change-pwd.php">Change Password</a></button>
<button type="submit" class="btn btn-primary">Save Settings</button>
</div>
</div>
</form>
	</body>
</html>
	