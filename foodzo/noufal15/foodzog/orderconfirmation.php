
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
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />  
	<link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  
    <link href="css/responsive.css" rel="stylesheet">
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		
		<link id="switcher" hre  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">   

 <link rel="stylesheet" href="css/bootstrap321.min.css">
  <script src="jquery1.min.js"></script>
  <script src="bootstrap1.min.js"></script>
 
 
  <script src="bootstrap321.min.js"></script>
  
<title>Sage Hotels</title>
<?php
include "css/order.css";
?>

<?php
include "js/index.js";
?>

 <style>
 
#menu {
  position: fixed;
  right: 0;
  top: 65%;
  width: 28em;
  margin-top: -2.5em;
 
}

  
  
  .content{
		width:900px;
		margin:0 auto;
	}
	
	
	

	
	
  </style>
		
		
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
	<div class="header">
	 <div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <font color ="black">FoodZo  &nbsp;&nbsp;<img src="images/logo.png" height="46px" />
          
            </div>
          <!--  <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                     <li><a href="Account.php">My Account</a></li>
                    <li><a href="#contact">Help</a></li>
                    
                </ul>
            </div>-->
			<div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
				 <li><a href="index.php">Home</a></li>
                   <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="PersonalInfo.php">Personal Info</a></li>
                                <li><a href="myorder.php">My Orders</a></li>
								 <li><a href="index.php">Logout</a></li>
                                <!-- <li><a href="patient.php">Patient</a></li>
                                <!-- <li><a href="#modal-container-hod" role="button" data-toggle="modal">404</a></li> -->
                                <!-- <li><a href="shortcodes.html">Shortcodes</a></li> -->
                            </ul>
                        </li>
                  
                    <li><a href="#contact">Help</a></li>
                    
                </ul>
            </div>
           
        </div>
    </div>
   
		
   
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1></h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					
					
		<?php
		include "js/index2.js";
		?>
					
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function add(x)
	{ 
		//y="document.f1."+eval(x)+".value"
		//alert(y)
		document.f1.qty1.value=parseInt(document.f1.qty1.value)+1;
		p=x*parseInt(document.f1.qty1.value)
		document.getElementById("price").innerHTML=p;
	}
	function subtraction()
	{
		document.f1.qty1.value=parseInt(document.f1.qty1.value)-1;
	}
</script>

	<?php
include "db.php";
$id=$_SESSION['rest_id'];
$sql="select * from restaurant where rest_id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
?>
			  	
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="payment.php" method="POST" name="f1">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                    <div class="panel panel-default aa-checkout-coupon" style="height: 209;">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                                 	
	 <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">


     <div class="templatemo_product" style="height:150px;width:150px;"><?php
          echo "<img src=images1/".$id.".jpg >";
            ?><strong>

 <?php echo "$row[1]</strong><br> $row[3]";?>

     </div><hr style="background-color:red;color:black">

    

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
<?php
$hf1=$_SESSION['hf1'];
$delivery=$_SESSION['delivery'];
$service=$_SESSION['service'];
$item=preg_split('/,/', $hf1);
//print_r($item);
$s_tot = 0.00;
for($i=1;$i<sizeof($item);$i=$i+3)
{ 
	$q="qty".$i;
	 $sql1="select * from product where product_name='$item[$i]'";
	$result1=mysqli_query($link,$sql1);
     $row1=mysqli_fetch_array($result1);
?>
     <div class="templatemo_product"><strong><?php echo "$item[$i]"; ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href =javascript:add("<?php echo $row1[3];?>")>+</a><input class="text" name="<?php echo $q; ?>"  type="number"  disabled="disabled" value="<?php echo $item[$i+2];?>";" style="width:40px"><a href =javascript:subtraction()>-</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs <?php
     
     $p= $item[$i+2]*$row1[3];
     echo "<span id='price'>$p</span>";

    $s_tot = $s_tot + $item[$i+2]*$row1[3];
     ?><br /> 
     <?php
     
     echo "$row1[2]";
     echo "<br>Unit Price: Rs $row1[3]";
     ?>
</div>
<hr style="background-color:red;color:black">

<?php
}
?>

    

     <h1>&nbsp;</h1>

  </div>  
                   <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">



    

     <h1>&nbsp;</h1>

  </div>      </h4>
                      </div>
                    
                    </div>
                    <!-- Billing Details -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">

                         Subtotal &nbsp;&nbsp;
                         
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s_tot; ?><br /> 

                        </h4>
                      </div>
                      
                    </div>
                    <!-- Shipping Address -->
                  <div class="panel panel-default aa-checkout-billaddress">
                       <div class="panel-heading">
                       <!-- <h4 class="panel-title">
                        Enter Votcher Code <br>  <input type="text" placeholder="" name="t1"> <input type="submit" placeholder="" name="btn" value="Submit">  <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /> 

                        </h4>-->
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                       
                         
                        
                                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
			  
              <div class="col-md-4" style="border:2px groove gray;" id="menu" >
			  
              <div class="checkout-right" >
                  <h4>Order Information</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive" >
                     
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
                       
                      </tbody>
                     
                    </table>
                  </div>
                
                   <center> <input type="submit" value="CheckOut" class="aa-browse-btn">    </center>             
                  </div>
                </div>
				
				
				
				
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>

	<?php
	include "footer.php";
	?>
</body>
</html>