<?php
require dirname(__DIR__) . '/config.php';
require BASE_PATH . '/db_connect.php';
require BASE_PATH . '/classes/Expence.php';

$expence = new Expence($connect);

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $expence->delete($id);
    
    if($stmt) {
        header("Location:../expences.php");
        exit();
    } else {
        header("Location:../expences.php?error=delete_failed");
        exit();
    }
    
} else {
    header("Location:../expences.php");
    exit();
}
?>