<?php

session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title></title>

<!-- styles and allignment -->
  
		
		
<?php
include "css/search1.css";
?>
  <?php
  include "js/search2.js";
  ?>
<link rel="icon" 
      type="image/png" 
      href="images/logo.png">

      <?php
      include "css/search2.css";
      ?>
	
<script src="jquery.min.js"></script>

     <?php
     include "css/search3.css";
     ?>

	   <link rel="stylesheet" href="css12/menu.css" type="text/css" media="screen">
      
	 


</head>

<!-- header files-->

<body>

	 

   
	
		    
				
					<?php
	include "header.php";
	?>

   <?php
   include "html/index1.html";
   ?>

<body style="background-color:#f2f2f2" >

 <?php
 
    include "db.php";
    if(isset($_POST['s1']))
    {
    	$s1=$_POST['s1'];

    }
    ?>
    <!-- header-section-starts -->
	
			<div class="top-header" >
			<?php
			
			include("in1.php");
			
			?>

					<div class="queries">
					
				</div>
				<div class="header-right">
						<div class="cart box_1">
								
							
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
						
<?php
include "js/index2.js";
?>
					
				</div>
			</div>
		</div>

<br><br>
        	
<div class="wrapper">
	<header>
    	
        <div class="clearfloat"></div>
    </header>
	
	
	 
	 
	 
	 
	 

    <div class="bodyContainer" style="color:red">
   <?php
				if(isset($_POST['btn1']))
				{
				$a=$_POST['t1'];
				$b=$_POST['t2'];
					$b1=$_POST['t3'];
					include("db.php");
				
				
				$sql="SELECT rest_name, count(rest_name) from restaurant where  restaurant.area_id='$b'";
				$result = mysqli_query($link,$sql);

// Print out result
while ($row = mysqli_fetch_array($result)){

					 
					$i= $row[COUNT('rest_name')];
					//$rest=$row['rest_name'];

					//echo "<h1 style=margin-left:450px;color:red;>Order from ".$i." Restaurants<br></h1><h6 style=margin-left:550px;color:black;></h6><br>"; 
					//echo"<h4 style=margin-left:460px;color:red>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Location:". $b1."</h4>";
				$_SESSION["loc"]=$i;
$_SESSION["rst"]=$b1;
						
				
		
			}
				 
			}
?>		 	 	

				<div class="clearfix"></div>
			</div>
		</div>		
				</div>
				
		
	 <?php
include "food.html";
?>	

<br><br>

<div style="background-color:#ffffff">

<form action="" method="post"  name="form1">
<div ><br> 
	
	</form>
<div id="txtHint"></div>
</div>
<br>
	
        	
<div class="wrapper">
	<header>
    	
        <div class="clearfloat"></div>
    </header>
    <div class="bodyContainer" style="color:red">
    	 	

<?php
if(isset($_POST['country']))
{
$_SESSION['country']=$_POST['country'];
$_SESSION['state']=$_POST['state'];
}
$country=$_SESSION['country'];
$state=$_SESSION['state'];
//$country=$_POST['country'];
//$state=$_POST['state'];
$sql="select * from restaurant where area_id=$state";
if(isset($_POST['dcharge']))
{
	$dc=$_POST['dcharge'];
	$sql="select * from restaurant where area_id=$state order by $dc";
}
if(isset($_POST['Indian']))
{
	$dc=$_POST['Indian'];
	$sql="select * from restaurant where area_id=$state and rest_tags like '%".$dc."%'";
} 
if(isset($_POST['Restaurant']))
{
	$dc=$_POST['my_content1'];
	$sql="select * from restaurant where area_id=$state and rest_name like '%".$dc."%'";
} 

include "db.php";

$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
?>

        <section>
            <article class="post">
            <br><br>
               <?php echo "<a href='menu.php?id=$row[0]'><img src='images1/$row[0].jpg'  style=border-radius:10px;width:500px;height:100px>";?>

                <p class="smallPost"><b> <?php echo "$row[1]'<br>";?></b>
                   <?php echo "$row[8]<br> $row[3]<br> Minimum order  :$row[10] <br> Delivery Charge   :$row[7]" ; 
                   

                   ?>

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
	//echo "correct time is: ".$time.$AMPM."<br>";
	

	$ct=strtotime($time);
	$t1=strtotime($row1[1]);
	$t2=(strtotime($row1[2])- (12*60*60));
	$t3=(strtotime($row1[3])- (12*60*60));
	$t4=(strtotime($row1[4])- (12*60*60));
	if(date('i',$t1)=="00")
		$dt1=date('h',$t1);
	else
	$dt1=date('h:i',$t1);
if(date('i',$t2)=="00")
		$dt2=date('h',$t2);
	else
	$dt2=date('h:i',$t2);
if(date('i',$t3)=="00")
		$dt3=date('h',$t3);
	else
	$dt3=date('h:i',$t3);
if(date('i',$t4)=="00")
		$dt4=date('h',$t4);
	else
	$dt4=date('h:i',$t4);

   echo "<br>". $dt1."AM - ".$dt2." PM / ".$dt3."PM - ".$dt4."PM";

echo "<br></a>";
	
	if(strtotime($time)>=strtotime($row1[1]) && strtotime($time)<=strtotime($row1[2]) ||(strtotime($time)>=strtotime($row1[3]) && strtotime($time)<=strtotime($row1[4])))
	{
		echo "<a href='menu.php?id=$row[0]' class='button1'>Open </a>";
	}
	else
	{
		echo "<a href='' class='button2'>Closed </a>";
	}
	
}


?>

                </p>
             
            </article>
           
        </section>
 
   		

<?php


}
?>
       
    </div>
    <div class="clearfloat"></div>
   
</div

<?php
include "js/search4.js";
?>		
    
          
 </div>
			
	<?php
	include "footer.php";
	?>

</body>
</html>