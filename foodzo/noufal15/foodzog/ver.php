
<!DOCTYPE html>
<html>
<head>

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap321.min.css">
  <script src="jquery1.min.js"></script>
  <script src="bootstrap1.min.js"></script>
 
 
  <script src="bootstrap321.min.js"></script>
  
   <style>
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 240px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
	  width:450px;
  }
 
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 90px;
    }
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
</head>
<body>
<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p></span><label></label></p>
				</div>


				
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li class="active"><a href="#Home" class="scroll">Home</a></li>|
						<li><a href="">Popular Restaurants</a></li>|
						
						<li><a href="">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="">Login</a>  </li> |
						<li><a href="">Register</a> </li> |
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
<div class="container">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="container">
  <div class="row" >
    <nav class="col-sm-3" id="myScrollspy"style="margin-top:80px;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      <li><a href="#section4">Section 3</a></li>
	   <li><a href="#section5">Section 3</a></li>
	    <li><a href="#section6">Section 3</a></li>
		
		
      </ul>
    </nav>
	 <div>
      <nav class="col-sm-3" id="myScrollspy"style="margin-top:80px;float:right;">
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
    <div class="col-sm-9" style="margin-left:100px">
      <div id="section1">    
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2"> 
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>        
      <div id="section3">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section4">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section5">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
	 <div id="section6">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
	<div class="contact-section" id="contact" >
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
				
				
				
</body>
</html>
