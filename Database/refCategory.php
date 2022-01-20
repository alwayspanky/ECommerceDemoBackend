<?php

class RefCategories{

public static function getAllCategory() {

        $aResult = array();

        $db = new Database();

        $sql = "SELECT * FROM `category_info` ";

         //$aResult['trace']['sql'] = $sql;

        $result = $db->getConnection()->query($sql);

        
        if ($result->num_rows === 0) {

            $aResult['status']['code'] = 'DATA_NOT_FOUND';

            $aResult['status']['messge'] = "Data not found.";

        } else {

            while($row = $result->fetch_assoc()) {

                $aResult['output']['category'][] = $row;

            }

            

            $aResult['status']['code'] = 'SUCCESS';

            $aResult['status']['message'] = "Query completed successfully.";

        }

        return $aResult;
        } 



    }

    ?>