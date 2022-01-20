<?php

class RefBannerImage{

public static function getImages() {

        $aResult = array();

        $db = new Database();

        $sql = "SELECT * FROM `banner_info` ";

         //$aResult['trace']['sql'] = $sql;

        $result = $db->getConnection()->query($sql);

        
        if ($result->num_rows === 0) {

            $aResult['status']['code'] = 'INTERNAL_ERROR';

            $aResult['status']['messge'] = "Internal Error has occured.";

        } else {

            while($row = $result->fetch_assoc()) {

                $aResult['output']['images'][] = $row;

            }

            

            $aResult['status']['code'] = 'SUCCESS';

            $aResult['status']['message'] = "Query completed successfully.";

        }

        return $aResult;
        } 



    }

    ?>