<!--<?php
session_start();
$_SESSION['loggedIn']=false;
?>-->
<!DOCTYPE html>
<html>
<head>
<title>Sage Hotels</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery1.min.js"></script>
<link href="css1/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="js/bootstrap.min.js"></script>
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
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body style="background:white;">
    <!-- header-section-starts -->	
	<div class="header" style="height:132px;">
	<link rel="icon" 
      type="image/png" 
      href="images/logo.png">			
				<div class="logo"style="margin-left:38px;">
					<a href="home.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				
				</div>		    		 
			<div class="menu-bar" style="background:#e24425;height:55px;margin-top:78px;">			
				<div class="top-menu">
					<ul style="margin-left:46px;">
						<li class="active"><a style="margin-left:-21px;" href="#Home" class="scroll">Home</a></li>|
						<li><a href="">Popular Restaurants</a></li>|
						
						<li><a href="">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>				
				<div class="login-section">
					<ul><li>
                        <?php if ($_SESSION['loggedIn']) { ?>

                        <a href="logout.php"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Logout</span></a>

						<?php } else { ?>

						<a href="#myModal" role="button" data-toggle="modal" id="loginin"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Login</span></a>

						<?php } ?>
                    	</li> | 
						<li><a href="">Register</a> </li> |
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>		
           </div>			
		</div>		
	
<!-- Modal2 -->
<form>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter Mobile Number</h4>
      </div>
      <div class="modal-body">
     
  <input type="number" class="form-control"  name="mobile_number" id="mobile_number"  placeholder="Enter Mobile Number " maxlength="10" required/>
      </div>
      <div class="modal-footer">
	  <button type="button" name="Login" class="btn btn-success" onclick="sendOTP();"  id="ya">Submit</button> 
      <button type="button" id="close1" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
</form>	

  <div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none" >
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter OTP</h4>
      </div>
      <div class="modal-body">
     
 <input type="text" class="form-control"  name="otp_text" id="otp_text"  placeholder="One Time Password " maxlength="4" />
      </div>
      <div class="modal-footer">
        <button type="button" id="close3" class="btn btn-default" data-dismiss="modal">Submit</button>
        <button type="button" id="close2" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
    </div>
  </div>
  </div>

	