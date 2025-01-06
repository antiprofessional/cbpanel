<?php
$dbHost = 'localhost';
$dbName = 'coinbase';
$dbUser = 'nigger';
$dbPassword = 'Nigger123$$$';
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $GLOBALS['pdo'] = $pdo;
 
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

