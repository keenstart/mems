<?php
 
class DbOperation
{
    private $conn;
 
    //Constructor
    function __construct()
    {
        require_once dirname(__FILE__) . '/Config.php';
        require_once dirname(__FILE__) . '/ConnectDB.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
        echo "DbOperation";
    }
 
    //Function to create a new user
    public function createMems($userId, $username)
    {
        echo "createMems";
        
        $stmt = $this->conn->prepare("INSERT INTO team(userId, username) values(?, ?)");
        $stmt->bind_param("si", $userId, $username);
        $result = $stmt->execute();
        $stmt->close();
        if ($result) {
            echo "true";
            return true;
            
        } else {
            echo "false";
            return false;
        }
    }
 
}