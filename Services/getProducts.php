<?php 

include("../Database/database.php");
include("../Database/refProducts.php");

header('Access-Control-Allow-Origin: *');

$categoryId = $_REQUEST['catId'];
    
    $products = RefProducts::getAllProducts($categoryId);

 echo json_encode($products);

?>