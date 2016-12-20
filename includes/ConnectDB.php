<?php
 
class DbConnect
{
    private $conn;
 
    function __construct()
    {
        echo "ConnectDB";
    }
 
    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect()
    {
        require_once 'Config.php';
        echo DB_HOST;
        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
 
        // returing connection resource
        return $this->conn;
    }
}
