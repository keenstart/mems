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
        //echo "DbOperation";
    }
 
    //Function to create a new user
    public function createMems($userId, $username)
    {
        //echo "createMems";

        $stmt = $this->conn->prepare("INSERT INTO mems(userId, username) values(?, ?)");
        $stmt->bind_param("ss", $userId, $username);
        $result = $stmt->execute();
        $stmt->close();
        if ($result) {
            return true;
            
        } else {
            return false;
        }
    }
 
}