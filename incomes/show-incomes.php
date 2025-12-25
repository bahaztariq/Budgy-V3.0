<?php
require './db_connect.php';
require './classes/Income.php';

$income = new Income($connect);
$incomes = $income->getAll();

?>