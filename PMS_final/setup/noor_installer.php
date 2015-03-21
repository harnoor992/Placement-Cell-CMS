<?php
$dbname=$_POST["dbname"];
$usernm=$_POST["uname"];
$passwd=$_POST["pwd"];
$hostz=$_POST["dbhost"];
$tablpre=$_POST["prefix"];
$dirx=$_POST["dirx"];


error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED)); 



$myfile = fopen("newconfig.php", "w") or die("Unable to open file!");


$txt = " <?php	\n session_start();\n  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));  \n  \$sFolder = '".$dirx."';\n mysql_connect('".$hostz."', '".$usernm."', '".$passwd."') or trigger_error(\"Unable to connect to the database: \" . mysql_error()); \n mysql_select_db('".$dbname."') or trigger_error(\"Unable to switch to the database: \" . mysql_error()); \n define('SALT1', '24859f@#\$#@\$'); \n define('SALT2', '^&@#_-=+Afda\$#%'); \n require_once(\$_SERVER['DOCUMENT_ROOT'] .\"/\". \$sFolder . '/fadmin/includes/functions.php');  \n   \$_SESSION['error'] = \"\";   \n   \$sOutput=\"\"; \n \$tablepre=\"".$tablpre."\";  ?>";






fwrite($myfile, $txt);
fclose($myfile);





/*
echo "<html><head><title>All success</title></head><body><center>Your configuration file has been created.And now Website can function as per your requirement.<br><br><a href='../index.php'>Click here to go to homepage</a></center></body></html>";
*/

//echo $dbname." ". $usernm." ".$passwd." ".$hostz." ".$tablpre;


 mysql_connect($hostz, $usernm, $passwd) or trigger_error("Unable to connect to the database: " . mysql_error()); 
 mysql_select_db($dbname) or trigger_error("Unable to switch to the database: " . mysql_error()); 
 
//require('newconfig.php');

	


$create[0] = " CREATE TABLE IF NOT EXISTS `".$tablpre."aboutpage_setting` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` text NOT NULL,
  `about_content` longtext NOT NULL,
  `about_status` int(11) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

$create[1] = " CREATE TABLE IF NOT EXISTS `".$tablpre."blog` (
  `Postid` int(11) NOT NULL AUTO_INCREMENT,
  `Post_timestamp` datetime DEFAULT NULL,
  `Post_title` text,
  `Post_content` longtext,
  `Pinned_status` int(11) DEFAULT NULL,
  `Active_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`Postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";


$create[2] = " CREATE TABLE IF NOT EXISTS `".$tablpre."home_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coll_name` varchar(200) NOT NULL,
  `coll_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;";

$create[3] = " CREATE TABLE IF NOT EXISTS `".$tablpre."landpage_settings` (
  `welcome_id` int(11) NOT NULL AUTO_INCREMENT,
  `welcome_title` varchar(200) NOT NULL,
  `welcome_content` longtext NOT NULL,
  `secondary_title` varchar(200) NOT NULL,
  `secondary_content` longtext NOT NULL,
  `title_img` varchar(100) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `status_flag` int(11) NOT NULL,
  `licence` text,
  PRIMARY KEY (`welcome_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;";

$create[4] = " CREATE TABLE IF NOT EXISTS `".$tablpre."news_settings` (
  `news_settings` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text,
  `news_post` longtext,
  `news_timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`news_settings`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";


$create[5] = " CREATE TABLE IF NOT EXISTS `".$tablpre."register_main` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(150) DEFAULT NULL,
  `username` varchar(90) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `user_status` int(4) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `display_name` varchar(90) DEFAULT NULL,
  `user_activation_key` varchar(90) DEFAULT NULL,
  `user_type` int(4) DEFAULT NULL,
  `registereddate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

$create[6] = " CREATE TABLE IF NOT EXISTS `".$tablpre."users` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(150) DEFAULT NULL,
  `username` varchar(90) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `user_status` int(4) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `display_name` varchar(90) DEFAULT NULL,
  `user_activation_key` varchar(90) DEFAULT NULL,
  `user_type` int(4) DEFAULT NULL,
  `registereddate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;";

$create[7] = " CREATE TABLE IF NOT EXISTS `".$tablpre."year_page` (
  `yearpgid` int(11) NOT NULL AUTO_INCREMENT,
  `year_title` text,
  `year_content` longtext,
  `Statstitle` text,
  `Statscontent` longtext,
  `statsactive` int(11) DEFAULT NULL,
  `Presentationtitle` text,
  `Presentation_content` longtext,
  `Presentation_status` int(11) DEFAULT NULL,
  `Video_title` text,
  `Video_content` longtext,
  `Video_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`yearpgid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

for($i=0;$i<count($create);$i++){
	 mysql_query("$create[$i]");
	}
	

	
	
	
mysql_close();
	
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	
	<title>PlacementCMS › Installation</title>
	<link rel="stylesheet" id="buttons-css" href="setupcss/buttons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="open-sans-css" href="setupcss/css" type="text/css" media="all">
<link rel="stylesheet" id="install-css" href="setupcss/install.min.css" type="text/css" media="all">
<style type="text/css"></style></head>
<body class="wp-core-ui">
<h1 id="logo"><a href="https://harnoorsingh.com/" tabindex="-1">PlacementCMS</a></h1><center><img src="plogo.png" style="margin: -130px auto 25px;"></center>

<h1>Welcome</h1>
<p>Welcome to the famous five-minute PlacementCMS installation process! Just fill in the information below and you’ll be on your way to using the most extendable and powerful management platform in the world.</p>

<h1>Information needed</h1>
<p>Please provide the following information. Don’t worry, you can always change these settings later.</p>

<form id="setup" method="post" action="step4.php">
	<table class="form-table">
		<tbody><tr>
			<th scope="row"><label for="weblog_title">Institue Name</label></th>
			<td><input name="weblog_title" type="text" id="weblog_title" size="25" value="<b>SICSR</b>Placements"></td>
		</tr>
	<tr>
			<th scope="row"><label for="admin_email">Your E-mail</label></th>
			<td><input name="admin_email" type="email" id="admin_email" size="25" value="">
			<p>Double-check your email address before continuing.</p></td>
		</tr>
				<tr>
			<th scope="row">
				<label for="pass1">Password, twice</label>
				<p>A password will be automatically generated for you if you leave this blank.</p>
			</th>
			<td>
				<input name="admin_password" type="password" id="pass1" size="25" value="">
				<p><input name="admin_password2" type="password" id="pass2" size="25" value=""></p>
				<div id="pass-strength-result" style="display: block;">Strength indicator</div>
				<p>Hint: The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ &amp; ).</p>
			</td>
		</tr>
				
		<tr>
			<th scope="row"></th>
			<td colspan="2"></td>
		</tr>
	</tbody></table>
	<p class="step"><input type="submit" name="Submit" value="Install PlacementCMS" class="button button-large"></p>
	<input type="hidden" name="language" value="en_US">
</form>
<script src="setupcss/zxcvbn.min.js" type="text/javascript" async=""></script><script type="text/javascript">var t = document.getElementById('weblog_title'); if (t){ t.focus(); }</script>
<script type="text/javascript" src="setupcss/jquery.js"></script>
<script type="text/javascript" src="setupcss/jquery-migrate.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"http:\/\/localhost\/PMS_final_installer\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="setupcss/zxcvbn-async.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var pwsL10n = {"empty":"Strength indicator","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type="text/javascript" src="setupcss/password-strength-meter.min.js"></script>
<script type="text/javascript" src="setupcss/underscore.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="setupcss/wp-util.min.js"></script>
<script type="text/javascript" src="setupcss/user-profile.min.js"></script>
<script type="text/javascript" src="setupcss/language-chooser.min.js"></script>


</body></html>


