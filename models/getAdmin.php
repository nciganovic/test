<?php

$sql = "SELECT * FROM users WHERE username = :x";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":x", $username);
$stmt->execute();
$user = $stmt->fetchAll();
