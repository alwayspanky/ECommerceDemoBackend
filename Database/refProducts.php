<?php

class RefProducts{

public static function getAllProducts($categoryId) {

        $aResult = array();

        $db = new Database();

        $sql = "SELECT * FROM `product_info` WHERE cat_id='".$categoryId."' ";

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