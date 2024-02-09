<?php

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;


define('APP_PATH',$root.'htdocs'.DIRECTORY_SEPARATOR);
define('FILE_PATH',$root.'htdocs'.DIRECTORY_SEPARATOR.'electronic-card-transactions-december-2023-csv-tables.csv');


 include 'app.php';


$files = getTransactionFile(APP_PATH);

$transactions = getTransactions(FILE_PATH);

// echo "<pre>";
// var_dump($transactions);
// echo "</pre>";


require 'transactions.php';


