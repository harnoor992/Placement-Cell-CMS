<?php

//require($_SERVER['DOCUMENT_ROOT'] . 'PMS_final/fadmin/includes/config.php');
require('../setup/newconfig.php');
//include('../setup/tabpre.php');

//echo "<a href='../setup/newconfig.php'>DD</a>";

$sOutput .= '<div id="register-body">';

if (isset($_GET['action'])) {
	switch (strtolower($_GET['action'])) {
		case 'register':
			
			
			if (isset($_POST['username']) && isset($_POST['password'])) {
			//include('../setup/tabpre.php');
				if (createAccount($_POST['username'], $_POST['password'],$tablepre)) {
					$sOutput .= '<h1>Account Created</h1><br />Your account has been created. 
								You can now login <a href="login_me.php">here</a>.';
				}else {
					unset($_GET['action']);
				}				
			}else {
				$_SESSION['error'] = "Username and or Password was not supplied.";
				unset($_GET['action']);
			}
		break;
	}
}


if (loggedIn()) {
	$sOutput .= '
	
	<h2>Already Registered</h2>
				You have already registered and are currently logged in as: ' . $_SESSION['username'] . '.
				<h4>Would you like to <a href="login_me.php?action=logout">logout</a>?</h4>
				<h4>Would you like to go to <a href="../index.php">site index</a>?</h4>';
				
// If the action is not set, we want to display the registration form
}elseif (!isset($_GET['action'])) {
	// incase there was an error 
	// see if we have a previous username
	$sUsername = "";
	if (isset($_POST['username'])) {
		$sUsername = $_POST['username'];
	}
	
	$sError = "";
	if (isset($_SESSION['error'])) {
		$sError = '<span id="error">' . $_SESSION['error'] . '</span><br />';
	}
	
	$sOutput .= '
		' . $sError . '
	


<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>Placement Cell-Registration Page</title>
        <meta content=\'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\' name=\'viewport\'>
        <link href="noor/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="noor/font-awesome.min.css" rel="stylesheet" type="text/css" />
      
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />

<script src="register.js"></script>

 <script src="noor/jquery-1.10.2.js"></script>
  <script src="noor/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: "-20", maxDate: "+1M +1D" });
  });
  </script>
  
    </head>
    <body class="lockscreen">
        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>

	<form name="register" method="post" action="' . $_SERVER['PHP_SELF'] . '?action=register">
		
			<div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="usernam2" class="form-control" placeholder="First name"  id="nam" onblur="namblur(nam.value,1);" onfocus="namfocus(1);" />
                    </div><div id="ERR_NAM" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Please fill first name. eg:- john</i></u> </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Email ID" id="eml" onblur="emlblur(eml.value);" onfocus="emlfocus();"/>
						<div id="ERR_EMAIL" style="padding: 2px; width: 400px; display: none; color: red;">Incorrect Email address</div>
                    </div>
                    <div class="form-group">
  <input type="text" name="mobile" class="form-control" placeholder="Mobile" id="mobile" onblur="mobileblur(mobile.value)" onfocus="mobilefocus()"/>
                    </div>
					<div id="ERR_MOBILE" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Mobile Validation. eg:- 9673654514  </i></u> </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="pass" onblur="passblur(pass.value)" onfocus="passfocus()"/>
						<div id="ERR_PASS" style="padding: 2px; width: 400px; display: none; color: red;">Password must include 8 to 15 characters with atleast 1 letter, 1 numeric digit and 1 special character</div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Retype password" id="pass2"  onblur="rpassblur(pass.value,pass2.value)" onfocus="rpassfocus()"/>
                    </div>
					<div id="ERR_RPASS" style="padding: 2px; width: 400px; display: none; color:red"><u><i>Retype Password Validation. eg:- Sirgie  </i></u> </div>
					<div class="form-group">
                                        <label>I am: &nbsp;&nbsp;</label>
                                       
                                           
                                            <input type="radio" name="gender" checked="true">Male &nbsp;&nbsp;&nbsp;<input type="radio" name="gender"> Female
                                     
                                    </div>
					
					<div class="form-group">
                                        <label>Birthday:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" id="datepicker" class="form-control" data-mask="">
                                        </div>
                                    </div>
					
                </div>
                <div class="footer">                    

                    <button type="submit" name="register" class="btn bg-olive btn-block" onclick="submeclick()">Sign me up</button>

					
                    <a href="index.php" class="text-center">I already have a membership</a>
                </div>
			
			
			
			
			
		</form>
		
		
		
		
		
		<div class="margin text-center">
                <span>Register using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>

        <script src="noor/jquery.min.js"></script>
        <script src="noor/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
';

		}

$sOutput .= '</div>';


echo $sOutput;
?>