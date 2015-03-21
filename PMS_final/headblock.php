
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Placement management system</title>
<link href="mycss2.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">

<div id="top-nav">
<?php
		
		require('setup/newconfig.php');
	
	
	
	// SQL query
	$strSQL = "SELECT * FROM ".$tablepre."home_settings";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {
	 
	 echo $row['coll_name'] . " ";

	  }

	// Close the database connection
	//mysql_close();
	?>
	

		</div>	
		<div id="header">
		
			<img src="images/header.jpg" alt="" width="720" height="160" />
			
		</div>
		
	
		<div id="navigation">

			
			Menu
			
			<hr />
			
			<a href="index.php" class="navigation">Home</a>
<a href="fadmin/register_me.php" class="navigation">Signup</a>
<a href="fadmin/login_me.php" class="navigation">Login</a>
<a href="about.php" class="navigation">About Us</a>
<a href="news.php" class="navigation">News</a>
<a href="thisyear.php" class="navigation">This year Page</a>
<a href="blog.php" class="navigation">Blog</a>
<a href="contactus.php" class="navigation">Contact Us</a>
			
		</div>
		

