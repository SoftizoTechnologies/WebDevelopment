
<?php

session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>Sage Hotels</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css" rel="stylesheet" type="text/css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />  
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<?php
include "js/index.js";
?>
		
		
		<script type="text/javascript">


function updateMyText()
{
    var dd = document.getElementById("state");
    var ddtext = dd.options[dd.selectedIndex].value;
	 var ddtext1 = dd.options[dd.selectedIndex].text;
    document.getElementById("myText").value = ddtext;
	
	  document.getElementById("myText2").value = ddtext1;
	
} 

function updateMyText1()
{
    var dd = document.getElementById("country");
    var ddtext = dd.options[dd.selectedIndex].value;
    document.getElementById("myText1").value = ddtext;
} 

function updateMyText2()
{
    var dd = document.getElementById("state");
    var ddtext = dd.options[dd.selectedIndex].text;
    document.getElementById("myText2").value = ddtext;
} 

</script>
		
		<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<?php
include "css/index.css";
?>
<script src="jquery.min.js"></script>


</head>
<body>
    <!-- header-section-starts -->
	<?php
  include "header.php";
  ?>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1></h1>
						
					</div>
					
				
		<?php
    include "js/index2.js";
    ?>
					
				</div>
			</div>
		</div>
	</div>
			  

 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                    <div class="panel panel-default aa-checkout-coupon">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                                 	
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
                        </h4>
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
              
 <!-- content-section-ends -->
	<!-- footer-section-starts -->
	
</body>
</html>