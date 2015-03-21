<?php
$myfile = fopen("newconfig.php", "w") or die("Unable to open file!");


$txt = " <?php	\n session_start();\n \$sFolder = '';\n mysql_connect('localhost', 'tnpuser', 'harnoor123') or trigger_error(\"Unable to connect to the database: \" . mysql_error()); \n mysql_select_db('placementcell') or trigger_error(\"Unable to switch to the database: \" . mysql_error()); \n define('SALT1', '24859f@#\$#@\$'); \n define('SALT2', '^&@#_-=+Afda\$#%'); \n require_once(\$_SERVER['DOCUMENT_ROOT'] . \$sFolder . '/includes/functions.php');\$_SESSION['error'] = \"\";\$sOutput=\"\"; \n ?>";


fwrite($myfile, $txt);
fclose($myfile);
?>