<?php
 
//creating response array
$response = array();
 
//if($_SERVER['REQUEST_METHOD']=='GET') {

    //including the db operation file
    require_once '../includes/DBOperation.php';
 
    $db = new DbOperation();
    $result = $db->getMems();
var_dump($result);
echo "get1";
	if ($result)
	{
		// If so, then create a results array and a temporary one
		// to hold the data
		//$resultArray = array();
		//$tempArray = array();
	 echo "testy";

		// Loop through each row in the result set
	    while($e=mysqli_fetch_assoc($result)){
	       // $distance = (DistanceBetween( $latitudev, $longitudev,$e['latitude'],$e['longitude']) * 1000 ) * 3.281;
	        //$distance = DistanceBetween( $latitudev, $longitudev,$e['latitude'],$e['longitude'])  * 3280.8;
	        
	        
	        // if($distance < $e['radius']/*Feet*/)  { 
	             $output[]=$e;
	             //echo $e['latitude'].", ".$e['longitude'] .'='.$distance. '//';
	         //}
	         //$output[]=$e;
	      
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
