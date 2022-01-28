<?php

     class RefCart{

        public static function addCartItem($pId, $uId) {

            $aResult = array();

            $db = new Database();
    
            $sql = "INSERT INTO `cart_info`(p_id, user_id ) VALUES('".$pId."','".$uId."')";
    
            if($db->getConnection()->query($sql) === FALSE){
    
                $aResult['status']['code'] = "FAILED_TO_ADD";
    
                $aResult['status']['messge'] = "Failed to Add."; 
    
            } else {
    
                $user_id = $db->getConnection()->insert_id;
    
                $aResult['output']['user_id'] = $user_id;
    
                $aResult['status']['code'] = "PRODUCT_ADDED";
    
                $aResult['status']['message'] = "Product Added."; 
    
            }
    
            return $aResult;

        }


        public static function getAllCartItems($uId) {

            $aResult = array();
    
            $db = new Database();
    
            $sql = "SELECT * FROM `cart_info` INNER JOIN `product_info` ON cart_info.p_id=product_info.p_id WHERE user_id='".$uId."'";
    
             //$aResult['trace']['sql'] = $sql;
    
            $result = $db->getConnection()->query($sql);
    
            
            if ($result->num_rows === 0) {
    
                $aResult['status']['code'] = 'INTERNAL_ERROR';
    
                $aResult['status']['messge'] = "Internal Error has occured.";
    
            } else {
    
                while($row = $result->fetch_assoc()) {
    
                    $aResult['output']['products'][] = $row;
    
                }
    
                
    
                $aResult['status']['code'] = 'SUCCESS';
    
                $aResult['status']['message'] = "Query completed successfully.";
    
            }
    
            return $aResult;
            } 

    }

    ?>