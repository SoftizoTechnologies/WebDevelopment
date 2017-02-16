 <?php

session_start();
?>


 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Checkout Page</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
<link href="css/animate.css" rel='stylesheet' type='text/css' /><link href="css/prettyPhoto.css" rel="stylesheet">
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
		
		
		<script type="text/javascript">
    <!-- Font awesome -->
    <link href="css12/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css12/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css12/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css12/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css12/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css12/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css12/theme-color/default-theme.css" rel="stylesheet">
  

    <!-- Main style sheet -->
    <link href="css12/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

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
       <style>
      div.stars {

  width: 270px;

  display: inline-block;

}

 

input.star { display: none; }

 

label.star {

  float: right;

  padding: 10px;

  font-size: 36px;

  color: #444;

  transition: all .2s;

}

 

input.star:checked ~ label.star:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

 

input.star-5:checked ~ label.star:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

 

input.star-1:checked ~ label.star:before { color: #F62; }

 

label.star:hover { transform: rotate(-15deg) scale(1.3); }

 

label.star:before {

  content: '\f006';

  font-family: FontAwesome;

}
</style>

<style type="text/css">
.select-boxes{width: 280px;text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #FB4314;
    color: #55BB91;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}
</style>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'city_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value=""></option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value=""></option>');
            $('#city').html('<option value=""></option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'area_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value=""></option>'); 
        }
    });
});
</script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
  <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 <font color ="white">FoodZo  &nbsp;&nbsp;<img src="images/logo.png" />
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="PersonalInfo.php">Personal Info</a></li>
                                <li><a href="myorders.php">My Orders</a></li>
								 <li><a href="index.php">Logout</a></li>
                                <!-- <li><a href="patient.php">Patient</a></li>
                                <!-- <li><a href="#modal-container-hod" role="button" data-toggle="modal">404</a></li> -->
                                <!-- <li><a href="shortcodes.html">Shortcodes</a></li> -->
                            </ul>
                        </li>
                  
                    <li><a href="#contact">Help</a></li>
                    
                </ul>
            </div>
            </div><!--/.container-->
        </nav>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1></h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					
				
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
					
				</div>
			</div>
		</div>
	</div>
			  

	<!-- header-section-ends -->
	<!-- content-section-starts -->
		<?php	
		include("db.php");
		$loc=$_SESSION["loc"];
		$loc1=$_SESSION["rst"];
		
					echo "<h2 style=margin-left:450px;color:white;>Order from ".$loc." Restaurants</h2><h6 style=margin-left:550px;color:white;>delivering to your door</h6><br>"; 
				

						
					//echo"<h4 style=margin-left:460px;color:white>". $loc1."	<a style='margin-left:150px' class='y' href=index.php>Change Location</a></h4>";
			 
		
		
		?>
		
 
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
                   
                    <!-- Login section -->
                    <div class="panel panel-default aa-checkout-login">
                      <div class="panel-heading">
                        <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><img src="images1/1.jpg" style="width: 150px;height:96px" /></a><br><br>
                           

                            
                           Name: <br><br>
                         Order ID:  <br><br>
                         
 </strong>Status:  
 <br><br> Ratings:
 <div class="stars">
  <form action="">

    <input class="star star-5" id="star-5" type="radio" name="star"/>

    <label class="star star-5" for="star-5"></label>

    <input class="star star-4" id="star-4" type="radio" name="star"/>

    <label class="star star-4" for="star-4"></label>

    <input class="star star-3" id="star-3" type="radio" name="star"/>

    <label class="star star-3" for="star-3"></label>

    <input class="star star-2" id="star-2" type="radio" name="star"/>

    <label class="star star-2" for="star-2"></label>

    <input class="star star-1" id="star-1" type="radio" name="star"/>

    <label class="star star-1" for="star-1"></label>

  </form>

</div>



 <br><br>Review:<input type="text" name="review"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="button"/>
 
 

           </a>   
                        </a>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          <button type="submit" class="aa-browse-btn" style="width:120px;">View Details</button>
						   
                        </a>
						<!--<a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
						 <button type="submit" class="aa-browse-btn" style="width:120px;">RateUs</button>
							 
						</a>
						<a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
						 <button type="submit" class="aa-browse-btn" style="width:120px;">ReOrder</button>
							
						</a>-->
						</div>
                      </div>
					    <div id="collapseThree" class="panel-collapse collapse" style="color:red;">
                        <div class="panel-body">
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          My Order Details
                        </a>
												                       
<table width="600px" cellpadding="10px">
<tr>
<th>Status 



 </th> <th> &nbsp;&nbsp;&nbsp;&nbsp;Delivery Address </th> 
 
 <th> Order Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
						 <button type="submit" class="aa-browse-btn" style="width:120px;">ReOrder</button>
							 
						</a>
 
 </th>

</tr>



                           </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                     

<tr>
<td>Status :  <br>
<br>Id :  <br><br>
<!--Payment :  <br><br>-->
Order Type : <br><br>
Date  & Time :


 </td> <td>My Address </td> 
 
 <td> <br>Service Provider:  
 
 <br><br>
 product Detail Is : <br><br> SubTotal : <br><br> Delivery Charge : <br><br> Taxes : <br><br> Order Total :
 
 </td>

</tr>

</table>

						</div>
                      </div>
                    </div>
               
			   
					
					
					
					   <div id="collapsefour" class="panel-collapse collapse"style="color:red;">
                        <div class="panel-body">
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                        asa
                        </a>
												                       
<table width="600px" cellpadding="10px">
<tr>
<th>Status 



 </th> <th> &nbsp;&nbsp;&nbsp;&nbsp;Delivery Address </th> 
 
 <th> Order Detail Is  
 
 
 </th>

</tr>



                           </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                     

<tr>
<td>Status :  <br>
<br>Id :  <br><br>
<!--Payment :  <br><br>-->
Order Type : <br><br>
Date  & Time :


 </td> <td>My Address </td> 
 
 <td> <br>Service Provider:  
 
 <br><br>
 product Detail Is : <br><br> SubTotal : <br><br> Delivery Charge : <br><br> Taxes : <br><br> Order Total :
 
 </td>

</tr>

</table>

						</div>
                      </div>
                    </div>
					
					
					
					
					   <div id="collapsefive" class="panel-collapse collapse"style="color:red;">
                        <div class="panel-body">
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                       yyyyyyyy
                        </a>
												                       
<table width="600px" cellpadding="10px">
<tr>
<th>Status 



 </th> <th> &nbsp;&nbsp;&nbsp;&nbsp;Delivery Address </th> 
 
 <th> Order Detail Is  
 
 
 </th>

</tr>



                           </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                     

<tr>
<td>Status :  <br>
<br>Id :  <br><br>
<!--Payment :  <br><br>-->
Order Type : <br><br>
Date  & Time :


 </td> <td>My Address </td> 
 
 <td> <br>Service Provider:  
 
 <br><br>
 product Detail Is : <br><br> SubTotal : <br><br> Delivery Charge : <br><br> Taxes : <br><br> Order Total :
 
 </td>

</tr>

</table>

						</div>
                      </div>
                    </div>
					
					
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
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="jsc/bootstrap.js"></script>  
	<!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="jsc/jquery.smartmenus.js"></script>
	<!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="jsc/jquery.smartmenus.bootstrap.js"></script>  
	<!-- Product view slider -->
	<script type="text/javascript" src="jsc/jquery.simpleGallery.js"></script>
	<script type="text/javascript" src="jsc/jquery.simpleLens.js"></script>
	<!-- slick slider -->
	<script type="text/javascript" src="jsc/slick.js"></script>
	<!-- Price picker slider -->
	<script type="text/javascript" src="jsc/nouislider.js"></script>
	
	<!-- Custom js -->
	<script src="jsc/custom.js"></script> 
    