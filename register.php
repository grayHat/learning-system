<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Join us</title>
    <link rel="STYLESHEET" type="text/css" href="style/logon.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/jquery.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  
</head>
<body>
  <!--
Facebook plugin begins
-->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '672045869492360', // App ID
    channelUrl : 'http://151.237.3.82/channel.html', // Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      sendData();
    } 
    else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      alert("You are not loged in to the app !");
      FB.login();
    } 
    else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function sendData() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Done!');
      $(document).ready(function(){
          $('#name').val(response.name);
          $('#username').val(response.username);
      });
    });
  }  
</script>

<!--
  Below we include the Login Button social plugin. This button uses the JavaScript SDK to
  present a graphical Login button that triggers the FB.login() function when clicked.

  Learn more about options for the login button plugin:
  /docs/reference/plugins/login/ -->
<!--
Facebook plugin ends
  -->
<div id="logo">
	<a href="login-home.php">ELSYS</a>
</div>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<div id="wrap">
    <input type='text' name='name' class="input" id='name' placeholder="Full name" value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
<hr class="line" />
    <input type='text' name='email' class="input" id='email' placeholder="Email" value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
<hr class="line" />
    <input type='text' name='username' class="input" id='username' placeholder="Username" value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
<hr class="line" />
    <input type='password' name='password' class="input" id='password' placeholder="Password" maxlength="50" />
</div>
<br/>
	<button name='Submit' id="Submit" class="btn btn-primary" style="margin: 8px 0px;" >Join the dark side</button>
  <button class="btn btn-primary" data-scope="email" onClick="sendData()"> <img src="images/Facebook-Icon.png" width="20px" height="20px"/></button>
</form>
</body>
</html>