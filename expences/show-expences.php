<?php
require dirname(__DIR__) . '/config.php';
require BASE_PATH . '/db_connect.php';
require BASE_PATH .'/classes/Expence.php';

$expence = new Expence($connect);
$expences = $expence->getAll();

?>