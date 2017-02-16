<?php 
include"header.php";
?>
<link href="css/styles.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body style="background-color:#f2f2f2;height:500px;" >     	
<div class="wrapper"style="height:1500px;">	
    <div class="bodyContainer" style="color:red;margin-top:38px;">  	 	

<?php
$country=$_POST['country'];
$state=$_POST['state'];
include "config/db.php";
$sql="select * from restaurant where area_id=$state";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
?>
        <section>
            <article class="post">
                <?php echo " <a href='search.php?id=$row[0]'><img src='images1/$row[0].jpg'  style=border-radius:10px></a><h5></h5>";?></a> 
                <p class="smallPost"><?php echo "$row[1]<br>";?>
                   <?php echo "$row[3]<br> $row[8]<br> Delivery Time   :$row[6] <br>Minimum Delivery  :$row[10] <br> Delivery Charge   :$row[7] <br> " ; ?>
                    <?php 
                          $day=date("N");

                $sql1="select * from delivery_hours where day=$day and rest_id=$row[0]";

                $result1=mysqli_query($link,$sql1);
while($row1=mysqli_fetch_array($result1))
{
	
	date_default_timezone_set('Asia/Kolkata');
	$now = time();
	$AMPM = "PM";
	$ten_minutes = $now + (15 * 60);
	$twHr = $now - (12*60*60);
	if ($twHr < 0) {
		$twHr = $twHr + (12*60*60);
		$AMPM = "AM";
	}
	$time = date('H:i:s', $ten_minutes);
	$d=date("H:i:s");
	echo "<br>";
	if((strtotime($time)>strtotime($row1[1])) && (strtotime($time)<=strtotime($row1[2])) || (strtotime($time)>strtotime($row1[3])) && (strtotime($time)<=strtotime($row1[4])))
	{
		echo "open";
	}
	else
	{
		echo "close";
	}	
}
?></p>
                </p>             
            </article>           
        </section> 		

<?php
}
?>       
    </div>
 </div>	
<?php
 include"footer.php";
?> 
 