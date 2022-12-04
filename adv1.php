<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    require __DIR__ . "/src/$class.php";
});

// header("Content-type: application/json; charset=UTF-8");

$dbconn = new DB("localhost", "product_db", "thodoris", "utfrts30sk");

$dbobj = new DBqueries($dbconn);

$dbobj->create(['name'=>'Product 1', 'size'=>3, 'is_available'=>true]);