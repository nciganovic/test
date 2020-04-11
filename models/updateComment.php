<?php 

include_once("../config/connection.php");

if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
    $sql = "UPDATE comments SET isApproved = 1 WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    try{
        $stmt->execute();
        include_once("getDisapprovedComments.php");
        echo json_encode($disapprovedComments);
    }catch(Exception $e){
        echo json_encode(["msg" => $e]);
    }   
}
