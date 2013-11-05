<?PHP
require_once("./include/membersite_config.php");
if($fgmembersite->CheckLogin()){
  $fgmembersite->RedirectToURL("login-home.php");
    exit;
}
if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>


<!DOCTYPE html>
<html>
<head>
	<script src="scripts/jquery.js"></script>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Login</title>
	<link rel="STYLESHEET" type="text/css" href="style/reset.css" />
	<link rel="STYLESHEET" type="text/css" href="style/index.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

	<script src="scripts/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<div id="logo">
		<a href="login-home.php">ELSYS</a>
	</div>
	<hr/>
	<div id="form">
		<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
		<div id="wrapper">
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<div id="wrap">
				<input type='text' placeholder="Username" name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
				<hr style="margin:0px; padding:0px";/>
				<input type='password' placeholder="Password" name='password' id='password' maxlength="50" /><br/>
			</div>
			
			<br/>	
			<button name='Submit' id="Submit" class="btn btn-primary" style="margin: 8px 0px;" >Go Go Go </button>
			<div class='forgottenPass'>
				<a id="forgot" href='reset-pwd-req.php'>Forgot Password?</a>
			</div>
			</div>
		</form>
		
		<p>Don't have an account? <a href="register.php">Sign up</a></p><br>
	</div>
	<iframe src="IContacts.html" id="contacts"></iframe>
	<br/>
	<footer>
		<a href="#" id="terms">Terms & Privacy</a>
	</footer>
	
	</body>
</html>

