<?php 

$approved = 0;
$sql = "SELECT * FROM comments WHERE isApproved = :x";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":x", $approved);
$stmt->execute();
$disapprovedComments = $stmt->fetchAll();
