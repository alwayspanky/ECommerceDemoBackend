<?php 
include("../Database/database.php");
include("../Database/refUser.php");

header('Access-Control-Allow-Origin: *');

    $username = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    
    $login = RefUser::loginUser($username, $pass);

 echo json_encode($login);

?>