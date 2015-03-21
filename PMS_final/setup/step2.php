<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>PlacementCMS › Setup Configuration File</title>
<link rel="stylesheet" id="buttons-css" href="setupcss/buttons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="open-sans-css" href="setupcss/css" type="text/css" media="all">
<link rel="stylesheet" id="install-css" href="setupcss/install.min.css" type="text/css" media="all">
<style type="text/css"></style></head>
<body><center><img src="plogo.png" style="margin: -130px auto 25px;"></center>
<h1><a href="" tabindex="-1">PLacement CMS</a></h1>
<form method="post" action="noor_installer.php">
	<p>Below you should enter your database connection details. If you’re not sure about these, contact your host.</p>
	<table class="form-table">
		<tbody><tr>
			<th scope="row"><label for="dbname">Database Name</label></th>
			<td><input name="dbname" id="dbname" type="text" size="25" value="Placement CMS"></td>
			<td>The name of the database you want to run PlacementCMS in.</td>
		</tr>
		<tr>
			<th scope="row"><label for="uname">User Name</label></th>
			<td><input name="uname" id="uname" type="text" size="25" value="username"></td>
			<td>Your MySQL username</td>
		</tr>
		<tr>
			<th scope="row"><label for="pwd">Password</label></th>
			<td><input name="pwd" id="pwd" type="text" size="25" value="password" autocomplete="off"></td>
			<td>…and your MySQL password.</td>
		</tr>
		<tr>
			<th scope="row"><label for="dbhost">Database Host</label></th>
			<td><input name="dbhost" id="dbhost" type="text" size="25" value="localhost"></td>
			<td>You should be able to get this info from your web host, if <code>localhost</code> does not work.</td>
		</tr>
		<tr>
			<th scope="row"><label for="prefix">Table Prefix</label></th>
			<td><input name="prefix" id="prefix" type="text" value="noor_" size="25"></td>
			<td>If you want to run multiple Placement CMS installations in a single database, change this.</td>
		</tr><tr>
			<th scope="row"><label for="dirx">Launch Directory</label></th>
			<td><input name="dirx" id="dirx" type="text" value="PMS_final" size="25"></td>
			<td>If you want to install in root directory please leave it blank. Otherwise specify path from root directory.eg. root/ABC write ABC. </td>
		</tr>
	</tbody></table>
		<input type="hidden" name="language" value="">
	<p class="step"><input name="submit" type="submit" value="Submit" class="button button-large"></p>
</form>
<script type="text/javascript" src="setupcss/jquery.js"></script>
<script type="text/javascript" src="setupcss/jquery-migrate.min.js"></script>
<script type="text/javascript" src="setupcss/language-chooser.min.js"></script>


</body></html>