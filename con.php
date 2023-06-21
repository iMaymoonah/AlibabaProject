<?php 
// connection to db 

$DB_HOST = "rm-l4v9j450xpi4rwhdv7o.mysql.me-central-1.rds.aliyuncs.com";
    $DB_PORT = "3306";
    $DB_USER = "db_protestacc";
    $DB_PASSWORD = "Amalshamrani1010$$";
    $DB_DATABASE = "db_protest";
    $table = "book";
	
	

	//Connect to db server
	//$con = new mysqli($DB_HOST,$DB_USER, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);
   // if ($con->connect_error()) {    //   die("Connection Failed".$con ->connect_error);}
       

try {
  $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);
  echo "<h2>TODO</h2><ol>"; 
  foreach($db->query("SELECT * FROM $table") as $row) {
    echo "<li>" . $row['title'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}











	    

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
