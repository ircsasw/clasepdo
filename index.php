<?php

$host = 'localhost';
$dbname = 'clasepdo';
$user = 'root';
$pass = '';

try{
	// MySQL con PDO_MYSQL
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

} catch (PDOException $e) {
	echo $e->getMessage();
}

// execute()
/*$stmt = $pdo->prepare("INSERT INTO users( username, password, status )
	VALUES ( 'r2d2', '123', 1 )");
$stmt->execute();*/

// query()
$insertados = $pdo->query("INSERT INTO users( username, password, status )
	VALUES ( 'r2d2', '123', 1 )");

$pdo = null;
?>
