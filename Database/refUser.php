<?php

     class RefUser{

        public static function registerUser($username, $mobileNo, $pass) {

            $aResult = array();

            $db = new Database();
    
            $sql = "INSERT INTO `user_info` (username, mobile , password) VALUES('".$username."','".$mobileNo."' , '".$pass."')";
    
            // $aResult['trace']['sql'] = $sql;
    
            if($db->getConnection()->query($sql) === FALSE){
    
                $aResult['status']['code'] = "FAILED_TO_CREATE_ACCOUNT";
    
                $aResult['status']['messge'] = "Failed to created account."; //RefMessge.getMessageByCode($aResult['status']['code']);
    
            } else {
    
                $user_id = $db->getConnection()->insert_id;
    
                $aResult['output']['user_id'] = $user_id;
    
                $aResult['status']['code'] = "ACCOUNT_CREATED";
    
                $aResult['status']['message'] = "Account created."; //RefMessge.getMessageByCode($aResult['status']['code']);
    
            }
    
            return $aResult;

        }

        /////////Login 

        public static function loginUser($username, $pass){

            $aResult = array();

            $db = new Database();

            $sql = "SELECT * FROM `user_info` WHERE username='".$username."' AND password='".$pass."' ";

             //$aResult['trace']['sql'] = $sql;
    
            $result = $db->getConnection()->query($sql);
    
            
    
            if ($result->num_rows === 0) {
    
                $aResult['status']['code'] = 'NOT_FOUND';
    
                $aResult['status']['messge'] = "Username or password are incorrect.";
    
            } else {
    
                while($row = $result->fetch_assoc()) {
    
                    $aResult['output']['user_id'] = $row['user_id'];
    
                    $aResult['output']['username'] = $row['username'];
    
                    $aResult['status']['code'] = 'LOGIN_SUCCESSFULL';
    
                    $aResult['status']['message'] = "Login Successfull.";
    
                }  
    
            } 
    
    return $aResult;

        }
    }

    ?>