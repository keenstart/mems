<?php
 
//creating response array
$response = array();
 
//if($_SERVER['REQUEST_METHOD']=='GET') {

    //including the db operation file
    require_once '../includes/DBOperation.php';
 
    $db = new DbOperation();
    $result = $db->getMems();

	if ($result)
	{


		// Loop through each row in the result set
	    while($e=mysqli_fetch_assoc($result)){
	             $output[]=$e;
      
	    }
	 
		// Finally, encode the array to JSON and output the results
		echo json_encode($output);
	}	
	/*else{
    	$response['error']=true;
    	$response['message']='You are not authorizeds';
    	echo json_encode($response);
	} */   

/*}else{
    $response['error']=true;
    $response['message']='You are not authorized';
    echo json_encode($response);
}*/
