<?php
require '../db_connect.php';
require '../classes/Expence.php';
session_start();
$expence = new Expence($connect);





if($_SERVER["REQUEST_METHOD"]=="POST"){
   $montant = $_POST['montant'] ;
   $Description = $_POST['description'] ;
   $Date = $_POST['Date'] ;
   $UserId = $_SESSION['user_id'];
   $category = $_POST['category'];

   $stmt = $expence->create($UserId,$montant,$Description,$Date,$category);

   header("location:../expences.php");
   
}


?>