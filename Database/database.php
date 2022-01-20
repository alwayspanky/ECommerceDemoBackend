<?php 

class Database {

    private static $servername   = "localhost";

    private static $database = "ecommercedemo";

    private static $username = "root";

    private static $password = "";

    

    private $conn;

    

    function __construct() {

        $this->conn = new mysqli(self::$servername, self::$username, self::$password, self::$database);

        if ($this->conn->connect_error) {

            die("Connection failed: " . $this->conn->connect_error);

        }

    }

    

    function getConnection() {

        return $this->conn;

        echo("Database connected successfully");
        console.log("connection successfull");


    }

    

    function __destruct() {

        $this->conn->close();

    }

}

?>