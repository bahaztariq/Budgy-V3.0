<?php
    require('../db_connect.php');
    require './classes/Expence.php';

    $expence = new Expence($connect);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $montant = $_POST['montant'];
        $description = $_POST['description'];
        $date = $_POST['Date'];


        $stmt =$expence->update($id,$montant,$description,$date);
    }

?>