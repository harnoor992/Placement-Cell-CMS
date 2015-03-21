<?php
include("headblock.php");
?>
<div id="content">
<?php
$strSQL2 = "SELECT * FROM ".$tablepre."landpage_settings";
$rs = mysql_query($strSQL2);
		while($row = mysql_fetch_array($rs)) {	 
	 echo "<h1>".$row['welcome_title']."</h1>".$row['welcome_content']."<h1>".$row['secondary_title']."</h1>"."<p>".$row['secondary_content']."</p>";
	  $lic =$row['licence'];
	  }
	?>
	
	</div>
	<?php
include("footerblock.php");
?>