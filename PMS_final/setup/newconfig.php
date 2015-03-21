 <?php	
 session_start();
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));  
  $sFolder = 'PMS_final';
 mysql_connect('localhost', 'tnpuser', 'harnoor123') or trigger_error("Unable to connect to the database: " . mysql_error()); 
 mysql_select_db('placementcell') or trigger_error("Unable to switch to the database: " . mysql_error()); 
 define('SALT1', '24859f@#$#@$'); 
 define('SALT2', '^&@#_-=+Afda$#%'); 
 require_once($_SERVER['DOCUMENT_ROOT'] ."/". $sFolder . '/fadmin/includes/functions.php');  
   $_SESSION['error'] = "";   
   $sOutput=""; 
 $tablepre="xyz_";  ?>