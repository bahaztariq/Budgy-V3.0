<?php

require __DIR__ . '/config.php';
include (BASE_PATH . '/classes/Database.php');

$db = new DataBase("localhost","smart_wallet","root","");
$connect = $db->connect();

?>