<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- For animation and style -->
<?php
include "css/menu1.css";
?>
<!--Animation-->
<?php
include "js/menu.js";
?>
<!-- For font and body style -->

 <?php
 include "css/menu.css";
 ?>
  <?php
include "js/index1.js";
?>

<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "s.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
    <style type="text/css">
	
	body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:900px;
		margin:0 auto;
	}
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
</style>  



<script type="text/javascript">

function incr()
{


var value=parseInt(document.getElementById('num').value,10);
value=isNaN(value)?0:value;
if(value<1000)
{
value++;
document.getElementById('num').value=value;

var v1=parseInt(document.getElementById('num1').value);

var v2=value * v1;

document.getElementById('num2').value=v2;

}
}




function decr()
{


var value=parseInt(document.getElementById('num').value,10);
value=isNaN(value)?0:value;
if(value>0)
{
value--;
document.getElementById('num').value=value;

var v1=parseInt(document.getElementById('num1').value);

var v2=value * v1;

document.getElementById('num2').value=v2;
}
}

</script>



</head>
<body  style="background: light gray;">

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
	
<input type="text" class="search" id="searchid" placeholder="Search for Dishes" style="border-radius:15px;width:250px;margin-left:250px" />&nbsp; &nbsp;<input type="button" onclick="incr()" value="+" style="color:black"/>&nbsp;&nbsp;&nbsp;<input type="text" name="qty1" value="120" maxlength="2" max="10" size="1" id="num1" style="border:0px;color:black"/>&nbsp;<input type="button" onclick="decr()" value="-" style="color:black"/>&nbsp; &nbsp; <a href="#modal1"role="button"  data-toggle="modal" style="margin-bottom: 2%;background-color:green;text-decoration:none;color:white;padding:10px;border-radius:15px" name="adddoc" id="adddoc" >Change Location</a><br /> 
<div id="result">
</div>
</div>




    <!-- for allignent  -->
 <?php
 //include "html/menu.html";
 ?>
 
 <div class="aa-search-box">
                
              </div>
<div class="container">
  
  <ul class="nav nav-tabs" style="margin-left:29px;">
    <li class="active"><a data-toggle="tab" href="#home">Menu</a></li>
    <li><a data-toggle="tab" href="#menu1">Reviews</a></li>
    <li><a data-toggle="tab" href="#menu2">Info</a></li>
   
  </ul>

 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div>
<div >
   <div class="row">
        <div class="col-md-3" id="myScrollspy">
                
        <div class="well"> 
                <ol class="nav nav-pills nav-stacked" data-spy="affix"data-offset-top="700" >

                   <?php
   $i=1;
   while($row=mysqli_fetch_array($result))
   { 
    $s="#section".$i;

     echo "<li><a href='$s'>$row[4]</a></li>";
$i++;
   }
  
 
    $sql="select * from menu where rest_id=$id ";
   $result=mysqli_query($link,$sql);
   ?>
     
                </ul>
          </div>

          </div>  
          <div class="col-md-9" style="width:550px">
    
                <h2 id="sec0"><?php echo "$row[1]";?> </h2>


      <?php
    $i=1;
    while($row=mysqli_fetch_array($result))
    {

 ?>    


                
   <div id="templatemo_right_section" style="padding:10px;margin-left:0px;">
<?php
$s="section".$i;
echo "<style type='text/css'> #$s {color: #fff; background-color: #ff9800;}  @media screen and (max-width: 810px) {  #$s { margin-left: 150px; }  } </style>";

$sql1="SELECT product.*,menu.* from product,menu,product_menu_map pmp where menu.menu_id=pmp.menu_id AND product.product_id=pmp.product_id AND menu.rest_id=$id AND menu.menu_id=$row[0]";
        $result1=mysqli_query($link,$sql1);
        $nos1=mysqli_num_rows($result1);
        $size=$nos1*100;
         echo "<div id='$s' style=height:".$size."px>";   
         
        echo "<h4>$row[4]</h4>";

    
        ?>
     <div class="templatemo_product">
     <?php
     while($row1=mysqli_fetch_array($result1))
        { 
          echo "<img src='Food images/2.1.jpg' alt='templatemo.com' width='' height='40'style='border-radius:15px;margin-left:0px;'' />";          
          echo "$row1[1] <br> $row1[2] <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          $item   = str_replace(" ", "_-", $row1[1]);
         $price = $row1[3];
          echo "<a href=\"javascript:adddata('$row1[1]',$row1[3],1)\">+</a>";
          echo " <strong>$row1[3] </strong> ";
          
          echo "<br><br>";

        }
        ?>

 </div><hr style="background-color:red;color:black"> 
    <h1>&nbsp;</h1>

  </div>  
      </div>
<?php
$i++;
}  
?>      




<ul>          
            
   </div>
  <div>
      <nav class="col-sm-3" id="myScrollspy"style="margin-top:80px;float:right">
      <ul class="nav nav-pills nav-stacked">
		  <div class="col-md-3" id="right" class="col-md-3" id="myScrollspy"    >
	      <div class="well" style="width:380px;height:350px;"class="nav nav-pills nav-stacked" data-spy="affix"data-offset-top="700"> 
              <div class="cart box_1"style=" height:100px;" >
        <div style="max-height:150px;overflow-y:scroll;font-size:8px">
        <h4 ><center>Your Order</center></h4>
              <a href="checkout.html">
              <br>  <br>
<form name="f1" method="POST" action="login.php">

<input type="hidden" name="hf1" />
<input type="hidden" name="qty_price"/>

              </a>  <h5 style="font-size:8px" lass="item_add">&nbsp;&nbsp;&nbsp;&nbsp;<span id=d1></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''>x</a></h5>
             <input type="button" onclick="incr()" value="+" style="color:black"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="qty" value="0" maxlength="2" max="10" size="1" id="num" style="border:0px"/>&nbsp;<input type="button" onclick="decr()" value="-" style="color:black"/>&nbsp;&nbsp; Name&nbsp;&nbsp;&nbsp;&nbsp;Rs <input type="text" name="qty1" value="0.00" maxlength="2" max="10" size="1" id="num2" style="border:0px"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''>x</a></h5>
              
              </div>
              
              <h5>Sub Total&nbsp;&nbsp;<span id="subtotal"></span>Rs </h5>
              
             
              <input type="hidden" name="delivery" value="<?php echo $row3[7];?>">
              <h5>Delivery Fee&nbsp;&nbsp; <?php echo $row3[7];?>
               </h5>
             
              <input type="hidden" name="service" value='<?php echo $row3[11];?>'>
              <h5>Service Taxs&nbsp;&nbsp; <?php echo $row3[11];?>Rs </h5>
             
              <h5>Grand Total&nbsp;&nbsp;<span id=grand></span>Rs </h5>
 
              
              <input type="submit" value="proceed to check out">
              <!--<a href="javascript:checkout()"role="button"  data-toggle="modal" style="margin-top:-55px;width:249px;position:absolute;background-color:green;text-decoration:none;color:white;padding:10px;border-radius:7px" name="adddoc" id="adddoc" >Proceed To Check Out</a></p>-->
              </form>
              <div class="clearfix"> </div>
            </div>
          </div>

          </div>  
      </ul>
    </nav>
    </div>
































</div></div>
  
   </div></div>
	<div id="menu1" class="tab-pane fade">
         
<?php
$sql="select * from delivery_hours where rest_id=$id";
$result=mysqli_query($link,$sql);
$days=array(1=>"Monday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",2=>"Tuesday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",3=>"Wednesday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",4=>"Thursday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",5=>"Friday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",6=>"Saturday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",7=>"Sunday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");
echo "<h1>Delivery Hours</h1>";
while($row=mysqli_fetch_array($result))
{
date_default_timezone_set('Asia/Kolkata');
 $t1=strtotime($row[1]);echo "&nbsp &nbsp &nbsp &nbsp";
  $t2=(strtotime($row[2])- (12*60*60));
  $t3=(strtotime($row[3])- (12*60*60));
  $t4=(strtotime($row[4])- (12*60*60));
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
  $i=$row[0];
  echo "<br> $days[$i] ". $dt1."AM - ".$dt2." PM / ".$dt3."PM - ".$dt4."PM";

}
?>
     
    </div>
    <div id="menu2" class="tab-pane fade">
 
 
 
 
 
 
 
                   
                                 	
	 <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">
<?php
include "db.php";
$id=$_GET['id'];
$sql="select * from Restaurant where rest_id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
?>

     <div class="templatemo_product"><img style="width: 200px;height:150px;" src="images1/<?php echo $row[0];?>.jpg"/><br><br><strong><?php echo" Name:$row[1]<br> Address:$row[3]<br> Delivery Time:$row[6]<br>" 
     ?></strong><br /> 

     <h1>&nbsp;</h1>

  </div>  
                      
                    </div>
                    <!-- Login section -->
                    <div class="panel panel-default aa-checkout-login">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                         <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">


     <div class="templatemo_product">
<?php
$sql="select * from delivery_hours where rest_id=$id";
$result=mysqli_query($link,$sql);
$days=array(1=>"Monday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",2=>"Tuesday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",3=>"Wednesday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",4=>"Thursday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",5=>"Friday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",6=>"Saturday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",7=>"Sunday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");
echo "<h1>Delivery Hours</h1>";
while($row=mysqli_fetch_array($result))
{
date_default_timezone_set('Asia/Kolkata');
 $t1=strtotime($row[1]);echo "&nbsp &nbsp &nbsp &nbsp";
  $t2=(strtotime($row[2])- (12*60*60));
  $t3=(strtotime($row[3])- (12*60*60));
  $t4=(strtotime($row[4])- (12*60*60));
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
  $i=$row[0];
  echo "<br> $days[$i] ". $dt1."AM - ".$dt2." PM / ".$dt3."PM - ".$dt4."PM";

}
?>
     </div><hr style="background-color:red;color:black">

     <h1>&nbsp;</h1>

  </div>  
                  
                           <!-- Shipping Address -->
                   
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                       
                         
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
 </div>

			
<div class="modal fade" id="modal1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <form action="search.php" method="POST" enctype="multipart/form-data" >
            <div class="modal-dialog" style="width:350px;" >
                 <ul class="navmain">
						  
					<!--	<li> <span> City Name</span>
    <input type="text" list="browsers" name="t1" required class="text"style="width:240px;" value="Udupi" onfocus="this.value = '';"onblur="if (this.value == '') {this.value = 'Udupi';}" />
    <datalist id="browsers">
      <option value="Udupi">
      <option value="Manipal">
     
    </datalist></li>
							<li><span>City Name</span>
							 <input type="text" class="text" name="t1"value="Udupi"style="width:240px;" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Udupi';}">
							</li>
							<li><span>Area Name</span>
							 <input type="text"style="width:240px;"required name="t2" class="text" value="Diana" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Diana';}">
							</li>-->
							
							
					 <div class="">
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM city   ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	<li>
    <select name="country" id="country" onchange="updateMyText1()">
        <option value="">--Select City--</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
            }
        }else{
            echo '<option value=""></option>';
        }
		
	$_SESSION['K']=$row['city_name'];
        ?>
    </select></li>
   
     <li>
    <select name="state" id="state" onchange="updateMyText()">
        <option value="">--Select City First--</option>
    </select>
   <li >

<input type="Submit"  value="Search Restaurant"  style="width:170px;height:35px;color:black" name="btn1"/><!-- <input type="text" class="text" id="t12">--> </form>
	        <input type="hidden" id="myText1" name="t1"/>  <input type="hidden" id="myText" name="t2"/><input type="hidden" id="myText2" name="t3"/>
</li>
    </div>		
							


							
						  </ul>
            </div>
        </form>

<!-- /. PAGE INNER  -->
            </div>

  <script type="text/javascript">
    
</script>
<!-- /. PAGE INNER  -->
       
       <!-- footer section -->     </div>
	    
	   	
	<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<br><br>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="#">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="#">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="#"> Linkedin</a></li>
						</ul>
						<ul>
							
						</ul>
					</div>
	 
		<div class="footer">
		
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2017  All rights  Reserved. &nbsp;<a href="http://sagehotels.com" target="target_blank"style="color:white;">sagehotels.com</a></p>
		</div>
	</div>
	
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				
				
	   
  <?php
  //include "footer1.php";
  ?>
</body>
</html>