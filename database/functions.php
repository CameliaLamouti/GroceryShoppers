<?php

// require MySQL Connection
require ('DBController.php');

// require Product Class
require ('Product.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();
