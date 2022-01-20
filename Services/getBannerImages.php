<?php 

include("../Database/database.php");
include("../Database/refBanner.php");

header('Access-Control-Allow-Origin: *');

    
    $bannerImage = RefBannerImage::getImages();

 echo json_encode($bannerImage);

?>