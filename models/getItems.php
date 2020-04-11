<?php 

$sql = "SELECT * FROM items";
$stmt = $pdo->query($sql);
$allItems = $stmt->fetchAll();
