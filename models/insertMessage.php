<?php

    include_once("../config/connection.php");

    if(isset($_POST["name"]) && !empty($_POST["name"]))
    {
        if(isset($_POST["email"]) && !empty($_POST["email"]))
        {
            if(isset($_POST["message"]) && !empty($_POST["message"]))
            {
                $name = $_POST["name"]; 
                $email = $_POST["email"];
                $message = $_POST["message"];

                $sql = "INSERT INTO comments VALUES(null, :x, :y, :z, 0)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":x", $name);
                $stmt->bindParam(":y", $email);
                $stmt->bindParam(":z", $message);
                
                try{
                    $stmt->execute();
                    echo json_encode(["success" => "1"]);
                }
                catch(Exception $e){
                    echo json_encode(["msg" => $e]);
                }

            }
            else
            {
                echo json_encode(["msg" => "Message is not set or empty."]);
            }
        }
        else
        {
            echo json_encode(["msg" => "Email is not set or empty."]);
        }
    }
    else
    {
        echo json_encode(["msg" => "Name is not set or empty."]);
    }

