<?php
require './db_connect.php';
require './classes/Expence.php';

$expence = new Expence($connect);
$expences = $expence->getAll();

?>