<?php
require('../db_connect.php');
require './classes/Income.php';

$income = new Income($connect);

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $income->delete($id);
    
    if($stmt) {
        header("Location:../incomes.php");
        exit();
    } else {
        header("Location:../incomes.php?error=delete_failed");
        exit();
    }
    
} else {
    header("Location:../incomes.php");
    exit();
}
?>