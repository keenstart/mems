<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='GET'){
 
    //getting values
    //$teamName = $_POST['name'];
    //$memberCount = $_POST['member'];

    $userId = $_GET['userId'];
    $username = $_GET['username'];    
 echo $userId ;


    //including the db operation file
    require_once '../includes/DBOperation.php';
 
    $db = new DbOperation();
   echo $username ;
    //inserting values 
    if($db->createMems($userId,$username)){
        $response['error']=false;
        $response['message']='Team added successfully';
        echo $response['message'];
    }else{
 
        $response['error']=true;
        $response['message']='Could not add team';
        echo $response['message'];
    }
 
}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}
echo json_encode($response);