<?PHP
require_once("./include/membersite_config.php");
include "./include/navigation.php";


if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->ChangePassword())
   {
        $fgmembersite->RedirectToURL("changed-set.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Change password</title>
      <link rel="STYLESHEET" type="text/css" href="style/changePassword.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<?php
		layout_a();
	?>	  
</head>
<body>
<div id="logo"><a href="login-home.php">ELSYS</a></div>
	<?php
			layout($fgmembersite);	
	?>
<div id='change'>
<form id='changepwd' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Change Password</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>


<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='oldpwd' >Old Password:</label>
    <input type='password' name='oldpwd' id='oldpwd' maxlength="50" />
</div>

<div class='container'>
    <label for='newpwd' >New Password:</label>
    <div class='pwdwidgetdiv' id='newpwddiv' ></div>
    <input type='password' name='newpwd' id='newpwd' maxlength="50" /><br/>
    
</div>
<button type="submit" class="btn btn-primary">Change Password</button>

</fieldset>
</form>
<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
    pwdwidget.enableGenerate = false;
    pwdwidget.enableShowStrength=false;
    pwdwidget.enableShowStrengthStr =false;
    pwdwidget.MakePWDWidget();
    
    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
    pwdwidget.MakePWDWidget();
    
    
    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("oldpwd","req","Please provide your old password");
    
    frmvalidator.addValidation("newpwd","req","Please provide your new password");

// ]]>
</script>
</div>
</body>
</html>