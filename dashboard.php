<?php 

session_start();

include_once("redirect/redirectUnAuthUser.php");    
include_once("config/connection.php");
include_once("models/getDisapprovedComments.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <?php include_once("views/navbar.php"); ?>
    
    <div class="container">
        <div class="col-12">
            <h1 class="text-center mt-5 mb-5"> Welcome to Admin Dashboard </h1>
        </div>

        <div class="col-12 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Text</th>
                        <th>Approve</th>
                    <tr>
                </thead>    
                <tbody id="comments">
                    <?php foreach($disapprovedComments as $comment): ?>
                    <tr>
                        <td><?= $comment["name"] ?></td>
                        <td><?= $comment["email"] ?></td>
                        <td><?=  $comment["text"] ?></td>
                        <td><button type="button" class="btn btn-success" data="<?= $comment["id"] ?>">Approve</button></td>
                    <tr>
                    <?php endforeach ?>
                </tbody> 
            </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/approveComments.js"></script>
</body>
</html>