<?php

$title=$_POST["weblog_title"];
$eml=$_POST["admin_email"];
$pass=$_POST["admin_password"];

//echo $title." ".$eml." ".$pass;

require('newconfig.php');


$insert[0]="
INSERT INTO `".$tablepre."landpage_settings` (`welcome_id`, `welcome_title`, `welcome_content`, `secondary_title`, `secondary_content`, `title_img`, `timestamp`, `status_flag`, `licence`) VALUES
(1, 'Welcome', '  <p> <a href=\"#\">SICSR</a> Since it''s inception in 1985, SICSR has been committed to the best IT education and has been continuously scaling new heights in the field of Information Technology. It is efficaciously providing quality education to students through various full time and part time programmes affiliated to (Symbiosis International Deemed University).Will get data from database . </p>', 'Extract title Database', ' <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod \r\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, \r\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo \r\n      consequat. Duis aute irure dolor in reprehenderit in <a href=\"#\">voluptate</a> \r\n      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat \r\n      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id \r\n      est laborum. </p>\r\n				\r\n    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod \r\n      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, \r\n      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo \r\n      consequat. <a href=\"#\">Link try</a> dolor in reprehenderit in voluptate \r\n      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat \r\n      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id \r\n      est laborum. </p>', 'images/header.jpg', '2015-02-25 07:19:18', 1, 'Licensed under GPL v3.0');";


function hashPassword2($pPassword, $pSalt1="2345#$%@3e", $pSalt2="taesa%#@2%^#") {
	return sha1(md5($pSalt2 . $pPassword . $pSalt1));
}


$insert[1]="
INSERT INTO `".$tablepre."users` (`user_email`, `username`, `password`, `user_status`, `mobile`, `bday`, `gender`, `display_name`, `user_activation_key`, `user_type`, `registereddate`) VALUES
('".$eml."', 'admin','".hashPassword2($pass,SALT1,SALT2)."', 1, NULL, NULL, NULL, NULL, NULL, 1, NULL);";

$insert[2]="
INSERT INTO `".$tablepre."home_settings` (`id`, `coll_name`, `coll_logo`) VALUES
(1, '".$title."', '');";


for($i=0;$i<count($insert);$i++){
	$rs = mysql_query("$insert[$i]");
	}
	mysql_close();
	
	
	echo "<html><head><title>All success</title></head><body><center>Your configuration file has been created.And now Website can function as per your requirement.<br><br><a href='../index.php'>Click here to go to homepage</a></center></body></html>";
	

?>