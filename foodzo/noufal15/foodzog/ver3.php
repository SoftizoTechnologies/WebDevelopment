<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap321.min.css">
  <script src="jquery1.min.js"></script>
  <script src="bootstrap1.min.js"></script>
 
 
  <script src="bootstrap321.min.js"></script>
  
  
  
   <style>
 
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:250px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
		margin-left:250px;
		border-radius:15px;
		overflow-y:scroll;
		
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
	
	#m{position: fixed;
  right: 0;
  top: 50%;
  width: 8em;
  margin-top: -2.5em;
	}
  </style>
</head>
<body  style="background: light gray;">




<ul id="menu">

<table  border="1" bgcolor="pink" float="right">
                     
                      <tbody>
                        <tr>
                          <td><input type="radio" value="delivery" name="r1" checked="checked" /></td>
                          <td><strong> Delivery</strong><br>Your Order will be Delivered to Your address</td>
                        </tr>
                        <tr>
                         <td><input type="radio" value="pickup" name="r1"/></td>
                          <td><strong> PickUp  (and save on delivery:Rs </strong><br>Your Order is Delivery to Your Home</td>
                        </tr>
                        <tr>
						<td colspan="2">
						  <center> <input type="submit" value="CheckOut" class="aa-browse-btn">    </center>   
						  </td>
                       
                      </tbody>
                     
                    </table>



</ul>



    <!-- header-section-starts -->
  
    <!-- header-section-starts -->
  <div class="header" style="background-color:gray" >
    
      
        </div>
<!-- header section -->
<?php
include "html/header.html";
?>
 
<?php
include "db.php";
$id=$_GET['id'];
$_SESSION['rest_id'] = $id;
$sql4="select * from restaurant where rest_id=$id";
$result4=mysqli_query($link,$sql4);
$row4=mysqli_fetch_array($result4);
?>
    <div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
        <div class="container">
        <div class="banner-info">
          <div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
            <h1></h1>
            <?php
            echo "<img src=images1/".$id.".jpg height=150px,width=150px>";
            ?>
          </div>
        
          
    <?php
    include "js/index2.js";
    ?>
          
        </div>
      </div>
    </div>

          
                <div class="clearfix"></div>
        

  <!-- header-section-ends -->
  <!-- content-section-starts -->
   




    <?php 
   
    $loc=$_SESSION["loc"];
    $loc1=$_SESSION["rst"];
    
          echo "<h2 style=margin-left:450px;color:red;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orders from ".$loc." Restaurants</h2><h6 style=margin-left:550px;color:red;>delivering to your door</h6><br>"; 
        

            
          //echo"<h4 style=margin-left:460px;color:white>". $loc1." <a style='margin-left:150px' class='y' href=index.php>Change Location</a></h4>";
       
    $id=$_GET['id'];
 $sql="select * from menu where rest_id=$id";
 $result=mysqli_query($link,$sql);
    
    ?>

    


    <br>
	<div class="content">
<input type="text" class="search" id="searchid" placeholder="Search for Dishes" style="border-radius:15px;width:250px;margin-left:250px" />&nbsp; &nbsp; <a href="#modal1"role="button"  data-toggle="modal" style="margin-bottom: 2%;background-color:green;text-decoration:none;color:white;padding:10px;border-radius:15px" name="adddoc" id="adddoc" >Change Location</a><br /> 
<div id="result">
</div>
</div>


 

    
    
    
  </div>
</div>

</body>
</html>
