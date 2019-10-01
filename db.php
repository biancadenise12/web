<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//$host = 'database-webserver.cmc23fguffkc.us-east-1.rds.amazonaws.com'; //if using RDS, get the Endpoint; else if using mysql container, get the container name or ID
//$port = '3306'; //include this line if using RDS
$host = 'mysql';
$db   = 'dxc';
$user = 'user';
$pass = 'pass';
$charset = 'utf8mb4';

//$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$cover = "";
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     //throw new \PDOException($e->getMessage(), (int)$e->getCode());
    $cover = $e->getMessage(); 
}
