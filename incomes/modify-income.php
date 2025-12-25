<?php
    require('../db_connect.php');
    require './classes/Income.php';

    $income = new Income($connect);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $montant = $_POST['montant'];
        $description = $_POST['description'];
        $date = $_POST['Date'];

        $stmt = $income->update($id,$montant,$description,$date);

    }

?>