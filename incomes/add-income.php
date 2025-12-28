<?php
require dirname(__DIR__) . '/config.php';
require BASE_PATH . '/db_connect.php';
require BASE_PATH . '/classes/Income.php';


$income = new Income($connect);

if($_SERVER["REQUEST_METHOD"]=="POST"){
   $montant = $_POST['montant'] ;
   $Description = $_POST['description'] ;
   $Date = $_POST['Date'] ;
   $UserId = $_POST['UserId'];
   $stmt = $income->create($UserId,$montant,$Description,$Date);
   if($stmt){
    header("location:../incomes.php");
   }else{
    echo "failed to create income";
   }
}


?>