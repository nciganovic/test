<?php

session_start();

include_once("config/connection.php");
include_once("models/getItems.php");
include_once("models/getApprovedComments.php");

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Store</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <?php include_once("views/navbar.php"); ?>
        <div class="container">
            
            
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center m-5">All products</h1>
                </div>

                <!-- allItems Start -->
                <?php foreach($allItems as $item): ?>
                <div class="col-4">
                    <div>
                        <img class="w-100" src="assets/img/<?= $item["imgsrc"] ?>" alt="img"/>
                    </div>
                    <h3><?= $item["title"] ?></h3>
                    <p><?= $item["description"] ?></p>
                </div>
                <?php endforeach ?>
                <!-- allItems End -->

                <div class="col-12">
                    <h2 class="text-center m-5">Comments</h2>
                </div>

                <!-- Comments Start -->
                <div class="col-12">
                    <ul class="list-group list-group-flush">
                        <?php foreach($approvedComments as $comment): ?>
                        <li class="list-group-item">From: <?= $comment["name"] ?>, <?= $comment["email"] ?>,  <?= $comment["text"] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <!-- Comments End -->

                <div class="col-12">
                    <h2 class="text-center m-5">Leave a comment</h2>
                </div>

                <!-- Comment Form Start -->
                <div class="col-12 mb-5">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input id="name" type="text" class="form-control" id="inputEmail4" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Email</label>
                        <input id="email" type="email" class="form-control" id="inputPassword4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Message</label>
                        <textarea id="message" class="form-control" id="inputAddress" placeholder="Message"></textarea>
                    </div>
                    
                    <button id="sendMsg" type="button" class="btn btn-primary">Send</button>
                    </form>
                    <div class="col-12 mt-5">
                        <ul id="form-errors" class="m-auto">
                            
                        </ul>
                    </div>
                </div>

    
                <!-- Comment Form End --> 
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="assets/js/sendMessage.js"></script>
    </body>
    </html>

