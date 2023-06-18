<?php 
// connection to db 

	$DB_HOST = "rm-l4vfr6frdw2sgh7flco.mysql.me-central-1.rds.aliyuncs.com";
	$DB_PORT = "3306";
    $DB_USER = "db_protestacc";
    $DB_PASSWORD = "Amalshamrani1010$$";
    $DB_DATABASE = "db_protest";
	
	
	

	//Connect to db server
	$con = new mysqli($DB_HOST,$DB_USER, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

    if ($con->connect_error()) {
       die("Connection Failed".$con ->connect_error);}
       


	//if(!$con) {
	
        //die('Failed to connect to server: ' . mysql_error());
	//}
	
	//Select database
	//$db = mysql_select_db($DB_DATABASE);
	//mysql_query("SET CHARACTER SET 'utf-8'", $con); 
	//if(!$db) {
	//	die("Unable to select database");
	//}

?>
