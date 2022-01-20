<?php 

include("../Database/database.php");
include("../Database/refCategory.php");

header('Access-Control-Allow-Origin: *');

    
    $categories = RefCategories::getAllCategory();

 echo json_encode($categories);

?>