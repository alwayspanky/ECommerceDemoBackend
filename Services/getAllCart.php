<?php 

include("../Database/database.php");
include("../Database/refCart.php");

header('Access-Control-Allow-Origin: *');

    $uId = $_REQUEST['userId'];
    
    $getCartItems = RefCart::getAllCartItems($uId);

 echo json_encode($getCartItems);

?>