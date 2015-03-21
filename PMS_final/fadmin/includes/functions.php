<?php
//require_once($_SERVER['DOCUMENT_ROOT']."/".'PMS_final/setup/newconfig.php');


//echo "$tab";
function createAccount($pUsername, $pPassword, $tablepre) {
//require_once($_SERVER['DOCUMENT_ROOT'].'PMS_final/setup/newconfig.php');
//$tablepre="zznoor_";
//include('../setup/tabpre.php');


	if (!empty($pUsername) && !empty($pPassword)) {
		$uLen = strlen($pUsername);
		$pLen = strlen($pPassword);
		
	
	
		$eUsername = mysql_real_escape_string($pUsername);
		$sql = "SELECT user_email FROM ".$tablepre."users WHERE user_email = '" . $eUsername . "' LIMIT 1";

		
		$query = mysql_query($sql) or trigger_error("Query Failed: " . mysql_error());

		
		if ($uLen <= 4 || $uLen >= 151) {
			$_SESSION['error'] = "Username must be between 4 and 151 characters."."error= ".$tablepre." ";
		}elseif ($pLen < 6) {
			$_SESSION['error'] = "Password must be longer then 6 characters.";
		}elseif (mysql_num_rows($query) == 1) {
			$_SESSION['error'] = "Username already exists.";
		}else {
			
			
			$sql = "INSERT INTO ".$tablepre."users (`user_email`, `password`) VALUES ('" . $eUsername . "', '" . hashPassword($pPassword, SALT1, SALT2) . "');";
			
			$query = mysql_query($sql) or trigger_error("Query Failed: " . mysql_error());
			
			if ($query) {
				return true;
			}	
		}
	}
	
	return false;
}



function hashPassword($pPassword, $pSalt1="2345#$%@3e", $pSalt2="taesa%#@2%^#") {
	return sha1(md5($pSalt2 . $pPassword . $pSalt1));
}





function loggedIn() {
	
	
	
	if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) {
		return true;
	}
	
	return false;
}

/***********
	bool logoutUser 
		Log out a user by unsetting the session variable.
************/
function logoutUser() {

	unset($_SESSION['username']);
	unset($_SESSION['loggedin']);
	
	return true;
}




function validateUser($pUsername, $pPassword, $tablepre) {


	// See if the username and password are valid.
	$sql = "SELECT user_email FROM ".$tablepre."users 
		WHERE user_email = '" . mysql_real_escape_string($pUsername) . "' AND password = '" . hashPassword($pPassword, SALT1, SALT2) . "' LIMIT 1";
	$query = mysql_query($sql) or trigger_error("Query Failed: " . mysql_error());
	

	if (mysql_num_rows($query) == 1) {
		$row = mysql_fetch_assoc($query);
		$_SESSION['username'] = $row['user_email'];
		$_SESSION['loggedin'] = true;
			
		return true;
	}
	
	
	return false;
}
?>