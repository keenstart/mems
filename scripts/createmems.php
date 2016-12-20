<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='GET'){
 
    //getting values
    //$teamName = $_POST['name'];
    //$memberCount = $_POST['member'];

    $userId = $_GET['userId'];
    $username = $_GET['username'];    
 
    //including the db operation file
    require_once '../includes/DBOperation.php';
 
    $db = new DbOperation();
 
    //inserting values 
    if($db->createMems($userId,$username)){
        $response['error']=false;
        $response['message']='Team added successfully';
    }else{
 
        $response['error']=true;
        $response['message']='Could not add team';
    }
 
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}
echo json_encode($response);