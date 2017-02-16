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
	
	<link rel="icon" type="image/png"  href="images/logo.png">
	
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
		<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
		<form action="search.php" method="post">
		<ul class="navmain">
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
        if($rowCount > 0)
		{
            while($row = $query->fetch_assoc())
			{ 
             echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
            }
        }
		else
		{
           echo '<option value=""></option>';
        }		
	$_SESSION['K']=$row['city_name'];
    ?>
	
    </select></li>   
    <li>
    <select name="state" id="state" onchange="updateMyText()">
        <option value="">--Select City First--</option>
    </select>
    <li>
        <input type="Submit"  value="Search Restaurant"  style="width:170px;height:35px;color:black" name="btn1"/><!-- <input type="text" class="text" id="t12">--> </form>
	    <input type="hidden" id="myText1" name="t1"/>  <input type="hidden" id="myText" name="t2"/><input type="hidden" id="myText2" name="t3"/>
    </li>
    </div>						
	</ul>			
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
	<br><br>
	<div class="aa-contact-address" style="margin-left:150px;color:black">
        <div class="row">
        <div class="col-md-5">
        <div class="aa-contact-address-left">
        <form class="comments-form contact-form" method="post" action="controller/register.php">
        <div class="row">
        <div class="col-md-6">
        <div class="form-group"> Name :                       
        <input type="text" name="cust_name" placeholder="Name" class="form-control" style="width:250px">
        </div>
        </div>
        </div> <div class="row">
		<div class="col-md-6">
        <div class="form-group">        Email :                
        <input type="text" name="cust_email" placeholder="Email" class="form-control"style="width:250px;">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">     Mobile :                   
        <input type="text" name="cust_phone" class="form-control"style="width:250px" />
        </div>
        </div></div>  <div class="row">
        <div class="col-md-6">
        <div class="form-group">       Location :                 
        <input type="text" name="cust_addr1" placeholder="location" class="form-control"style="width:250px">
        </div>
        </div>
        </div>              
        <div class="form-group">      Address1 :                  
        <textarea class="form-control" name="cust_addr2" rows="3" placeholder="Address"></textarea>
        </div>
        <div class="form-group">       Address2 :                 
        <input type="text" name="cust_addr3" placeholder="Address2" class="form-control"style="width:250px">
        </div>
        <button class="aa-secondary-btn"style="float:right">Save</button>
        </form>
        </div>
        </div>
        </div>
        </div>
	
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		</div>
		</div>
		</div>
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
		<div class="clearfix"></div>
		</div>
		</div>
		</div>
	   </div>
	<div class="footer">
		<div class="container">
		<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2017  All rights  Reserved. &nbsp;<a href="http://sagehotels.com" target="target_blank"style="color:white;">sagehotels.com</a></p>
		</div>
	</div>
	
	<script type="text/javascript">
			$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
				});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>