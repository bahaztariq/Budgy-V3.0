<?php
require dirname(__DIR__) . '/config.php';
require BASE_PATH . '/db_connect.php';
require BASE_PATH . '/classes/Income.php';

$income = new Income($connect);
$incomes = $income->getAll();

?>