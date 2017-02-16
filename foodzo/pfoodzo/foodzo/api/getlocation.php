<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "foodzo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$city_name = isset($_GET['city_name']) ? mysql_real_escape_string($_GET['city_name']) :  "";
$json = array("city_name" => "", "area_id" => "", "area_name"=>"");
if(!empty($city_name))
{
	$sql = "select city_name,city_id from city where city_name='$city_name'";
	$result = $conn->query($sql);
	if ($result->num_rows==1) 
	{
		// echo " exist";
		while($row = $result->fetch_assoc()) 
		{
			$json = array("city  Name" => $row['city_name'],"city id" => $row['city_id'], "city-exist" => "1");
		}
	}
	else{
		
		$json = array("city-exist" => "0");
		//echo " User not exist";
	}
}

$conn->close();

   @mysql_close($conn);

   /* Output header */
   header('Content-type: application/json');
   echo json_encode($json);
?>