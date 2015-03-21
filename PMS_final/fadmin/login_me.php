<?php

//require($_SERVER['DOCUMENT_ROOT'] . 'PMS_final/fadmin/includes/config.php');
require('../setup/newconfig.php');


if (isset($_GET['action'])) {
	switch (strtolower($_GET['action'])) {
		case 'login':
			if (isset($_POST['username']) && isset($_POST['password'])) {
			
			
				if (!validateUser($_POST['username'], $_POST['password'],$tablepre)) {
					
					
					
					$_SESSION['error'] = "Bad username or password supplied.";
					unset($_GET['action']);
				}
			}else {
				$_SESSION['error'] = "Username and Password are required to login.";
				unset($_GET['action']);
			}			
		break;
		case 'logout':
			
			
			if (loggedIn()) {
				logoutUser();
				$sOutput .= '<h1>Logged out!</h1><br />You have been logged out successfully. 
						<br /><h4>Would you like to go to <a href="../index.php">site index</a>?</h4>';
			}else {
				
				
				unset($_GET['action']);
			}
		break;
	}
}

$sOutput .= '<div id="index-body">';

if (loggedIn()) {
	$sOutput .= '<h1>Logged In!</h1><br /><br />
		Hello, ' . $_SESSION["username"] . ' how are you today?<br /><br />
		<h4>Would you like to <a href="login_me.php?action=logout">logout</a>?</h4>
		<h4>Would you like to go to <a href="../index.php">site index</a>?</h4>;
		<h4>Open Dashboard<a href="main/dashboard.php">Dashboard</a></h4>';

	//include('main/dashboard.php');
	//session_start();
		//header('Location:main/dashboard.php');
		
		
		
		
		
		
		
		
		
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
		<div id="login-form">
			' . $sError . '
			
			
			
			
			
			
			
			
			
			<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>Placement Cell | Log in</title>
        <meta content=\'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\' name=\'viewport\'>
        <link href="noor/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="noor/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />

    </head>
<body class="lockscreen">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
			
			
			
			
			
			
			
			
			
			
			
			
			<form name="login" method="post" action="login_me.php?action=login">
				
				
				
				
				
				<div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="reset.php">I forgot my password</a></p>
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
				
				
				
				
				
				
			</form>
		
		
		
		
		
		</div>
		<h4>Would you like to <a href="login_me.php">login</a>?</h4>
		<h4>Create a new <a href="register_me.php">account</a>?</h4>';
}

$sOutput .= '</div>';


echo $sOutput;
?>