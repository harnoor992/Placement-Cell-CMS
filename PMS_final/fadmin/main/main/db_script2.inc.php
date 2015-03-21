<?php 
	if (isset($_POST['submit']))
	{
		$host=$_POST['dbhost'];
		$name=$_POST['dbname'];
		$user=$_POST['dbuser'];
		$pwd=$_POST['dbpwd'];
		$pre = $_POST['dbpre']."_";

		mysql_connect("$host","$user","$pwd");
>		