<?php

session_start();
?><!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<link href="css1/component.css" rel='stylesheet' type='text/css' />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="css1/magnific-popup.css" rel="stylesheet" type="text/css">

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
<link href="css/animate.css" rel='stylesheet' type='text/css' /> <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<script>
	new WOW().init();
</script>
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
<script src="js/simpleCart.min.js"> </script>	

 <style>
 div#expand{
	display:block;
}
 .y{
 border: 2px solid #a1a1a1;
    padding: 5px; 
    background: #dddddd;
    width: 40px;
    border-radius: 25px;
}
.y:hover{text-decoration:none;background:dark gray}

 body {
      position: relative;
  }
  .affix {
      top: 20px;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {color: #fff; background-color: #1E88E5;}
  #section2 {color: #fff; background-color: #673ab7;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
    }
  }

div.parent{ 
    border:solid white 5px;
    display:table;
    padding:5px; 
    width:100%;
    margin:5px 0; /* you can change/remove margin */
}
div.text{ 
    vertical-align:top;
    display:table-cell;
    text-align:top;
}
div.parent .img{
    vertical-align:top;
    display:table-cell;
    padding-right:5px;
    width:50px; /* you can change width */
}
div.img img{ 
    width:50px;
    height:50px; /* you can change height */
    vertical-align:top;
}

  </style>
<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
</head>
<body style="background-color:#FFE4C4">

    <!-- header-section-starts -->
	
    <!-- header-section-starts -->
	<div class="header"style="background-color:white" >
		<div class="container">
		
		</div>
			<div class="menu-bar">
			<div class="container" >
				
				
				<div class="clearfix"></div>
				<?php
		echo "<a href='index.php'><img src='images/logo.png'  alt='' /></a>";
			include("in1.php");
			
			?>
			</div>
		</div>		
				</div>



 
			   	 <ul class="breadcrumbs">
                    <li class="home">
                     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php" title="Go to Home Page" style="color:black;">Home</a>&nbsp;
                       <span></span>
                    </li>
                   
                </ul>
                <div class="clearfix"></div>
			  

	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
		
		
		

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
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseone">
                        
                          </a>
                        </h4>
                      </div>
                     <div id="collapseone" class="panel-collapse collapse">
                        <div class="panel-body">
                       
						 
                        </div>
                      </div>
                    </div>
                    <!-- Login section -->
                    <div class="panel panel-default aa-checkout-login">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              <input type="radio" name="r1"/>  Pay Now
                   
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          <input type="radio" name="r1"/>  Pay Online
                        </div>
						 
                      </div>
                    </div>
                    <!-- Billing Details -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           <input type="radio" name="r1"/>  Pay On Delivery
                          </a>
                        </h4>
                      </div>
                        <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                         Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00<br /> 

                        </h4>
                      </div>
                      
                    </div>
                    </div>
                    <!-- Shipping Address -->
                  <div class="panel panel-default aa-checkout-billaddress">
                      
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                       
                         
                        
                                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <form class="comments-form contact-form" action="payment.php">
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Information</h4>
                     <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>xxxx <strong> x  1</strong></td>
                          <td>$150</td>
                        </tr>
                        <tr>
                          <td>yyyyy <strong> x  1</strong></td>
                          <td>$250</td>
                        </tr>
                        <tr>
                          <td>zzzzz <strong> x  1</strong></td>
                          <td>$350</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Subtotal</th>
                          <td>$750</td>
                        </tr>
                         <tr>
                          <th>Tax</th>
                          <td>$35</td>
                        </tr>
                         <tr>
                          <th>Total</th>
                          <td>$785</td>
                        </tr>
                      </tfoot>
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

	<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
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
							<li><i class="gp"></i></li>
							<li class="data"><a href="#">Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and food deals every week</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
			
		</div>
		
		
		 
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
	<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2017  All rights  Reserved.<a href="http://sagehotels.com" target="target_blank"style="color:white;">sagehotels.com</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
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
include "db.php";
$a=$_POST['r1'];
//echo $a;
$hf1=$_SESSION['hf1'];
$id=$_SESSION['rest_id'];
//echo $hf1;
//echo $id;
?>
</body>
</html>