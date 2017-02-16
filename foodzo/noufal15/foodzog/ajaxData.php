<?php
//Include database configuration file
include('dbConfig.php');
//$txt=$_POST['txt'];
//echo "<h1>kkk".$txt."</h1>";
if(isset($_POST["city_id"]) && !empty($_POST["city_id"])){
	$a=$_POST["city_id"];
	
	if($_POST["city_id"]==$a)
	{
	
    //Get all state data
    $query = $db->query("SELECT area.area_id,area_name from area,city_area_map where area.area_id=city_area_map.area_id AND city_area_map.city_id=$a");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value=""></option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['area_id'].'">'.$row['area_name'].'</option>';
        }
    }
}

}
?>