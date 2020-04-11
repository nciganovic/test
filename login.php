<?php 

session_start();

$_SESSION['message'] = "";

include_once("redirect/redirectAuthUser.php");  
include_once("config/connection.php");
include_once("models/auth.php");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <?php include_once("views/navbar.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center m-5">Login</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <label>Username: </label>
                    <input type="text" class="form-control" name="username" id="username" required/>
                    <label>Password: </label>
                    <input type="password" class="form-control" name="password" id="name" required/>
                    <button class="btn btn-success mt-3" type="submit">Login</button>

                    <?php if(isset($_SESSION['message'])): ?>
                    <p class="error-msg text-danger"><?= $_SESSION['message']; ?></p>
                    <?php endif ?>

                </form>
            </div>
        </div>
    </div>
</body>
</html>