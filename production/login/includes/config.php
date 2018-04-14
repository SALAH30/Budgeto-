<?php
ob_start();
session_start();

//set timezone
//date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','budgeto');

//application address
define('DIR','127.0.0.1'. dirname($_SERVER['PHP_SELF']).'/');
define('SITEEMAIL','ds_boukhetta@esi.dz');

try {

	//create PDO connection 
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
$user = new User($db); 
?>
