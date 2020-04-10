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

                $name = trim($name);
                $email = trim($email);
                $message = trim($message);

                $nameRegex = '/^[A-z]{1,20}$/';
                $emailRegex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;
                                :\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0
                                -9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                
                $isNameValid = preg_match($nameRegex, $name);
                $isEmailValid = preg_match($emailRegex, $email);

                $isMessageValid = true;

                if(strlen($message) > 250 || strlen($message) == 0)
                {
                    $isMessageValid = false;
                } 

                if($isNameValid && $isEmailValid && $isMessageValid)
                {
                    $sql = "INSERT INTO comments VALUES(null, :x, :y, :z, 0)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":x", $name);
                    $stmt->bindParam(":y", $email);
                    $stmt->bindParam(":z", $message);
                    
                    try
                    {
                        $stmt->execute();
                        echo json_encode(["success" => "1"]);
                    }
                    catch(Exception $e)
                    {
                        echo json_encode(["msg" => $e]);
                    }
                }
                else
                {
                    if(!$isNameValid)
                    {
                        echo json_encode(["msg" => "Name is not valid!"]);
                        
                    }
                    if(!$isEmailValid)
                    {
                        echo json_encode(["msg" => "Email is not valid!"]);
                        
                    }
                    if(!$isMessageValid)
                    {
                        echo json_encode(["msg" => "Message is not valid!"]);
                       
                    }
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
