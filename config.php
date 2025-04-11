<?php
// Database configuration with ENV variables. Set default values as well 
$db_host = getenv('DB_HOST') ?: '34.38.137.113';
$db_name = getenv('DB_NAME') ?: 'image_catalog';
$db_user = getenv('DB_USER') ?: 'appmod-phpapp-user';
$db_pass = getenv('DB_PASS') ?: 'genericpassword';

try {
	//echo "host=$db_host";
	//echo "name=$db_name";
	//echo "user=$db_user";
	//echo "pass=$db_pass";

    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("connection error " . $e->getMessage());
}

session_start();
?>

