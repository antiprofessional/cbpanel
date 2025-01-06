<?php
session_start();

if(!isset($_SESSION['user_id']) && !isset($_SESSION['username'])){
    exit;
}

require_once __DIR__ . "/../../controller/db-connect.php";

$GLOBALS['pdo'] = $pdo;
$stmt = $pdo->prepare("SELECT * FROM clients");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results);


