<?php
require './classes/Database.php';

$db = new DataBase("localhost","smart_wallet","root","");
$connect = $db->connect();

?>