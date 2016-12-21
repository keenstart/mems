<?php
 
//creating response array
$response = array();
 
if($_SERVER['REQUEST_METHOD']=='POST') {

    //including the db operation file
    require_once '../includes/DBOperation.php';
 
    $db = new DbOperation();
    $result = $db->getMems();
	if ($result)
	{
		// If so, then create a results array and a temporary one
		// to hold the data
		$resultArray = array();
		$tempArray = array();
	 
		// Loop through each row in the result set
		while($row = $result->fetch_object())
		{
			// Add each row into our results array
			$tempArray = $row;
		    array_push($resultArray, $tempArray);
		}
	 
		// Finally, encode the array to JSON and output the results
		echo json_encode($resultArray);
	}	else{
    	$response['error']=true;
    	$response['message']='You are not authorized';
    	echo json_encode($response);
	}    

}else{
    $response['error']=true;
    $response['message']='You are not authorized';
    echo json_encode($response);
}
