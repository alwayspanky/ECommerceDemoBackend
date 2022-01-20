<?php 

include("../Database/database.php");
include("../Database/refUser.php");

header('Access-Control-Allow-Origin: *');

    $username = $_REQUEST['username'];
    $mobileNo = $_REQUEST['mobile'];
    $pass = $_REQUEST['password'];
    
    $register = RefUser::registerUser($username, $mobileNo, $pass);

 echo json_encode($register);

?>