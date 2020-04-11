<?php 

if(isset($_POST["username"]) && !empty($_POST["username"]))
{

    if(isset($_POST["password"]) && !empty($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        include_once("models/getAdmin.php");

        if(count($user) != 0)
        {
            if($username == $user[0]["username"])
            {
                if (password_verify($password, $user[0]["password"]))
                {
                    $_SESSION["role"] = "1";
                    header('Location: dashboard.php');
                } 
                else 
                {
                    $_SESSION["message"] = "Password is invalid.";
                }
            }
            else
            {
                $_SESSION["message"] = "Username is invalid.";
            }
        }
        else
        {
            $_SESSION["message"] = "Username is invalid.";
        }
        
    }
}
