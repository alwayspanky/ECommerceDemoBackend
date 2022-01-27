<?php 

include("../Database/database.php");
include("../Database/refCart.php");

header('Access-Control-Allow-Origin: *');

    $pId = $_REQUEST['productId'];
    $uId = $_REQUEST['userId'];
    
    $cartItems = RefCart::addCartItem($pId,$uId);

 echo json_encode($cartItems);

?>