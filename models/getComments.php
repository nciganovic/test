<?php

    $approved = 1;
    $sql = "SELECT * FROM comments WHERE isApproved = :x";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":x", $approved);
    $stmt->execute();
    $approvedComments = $stmt->fetchAll();
