
<?php

session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>Sage Hotels</title>
<?php
include "css/order.css";
?>

<?php
include "js/index.js";
?>


		
		
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
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                     <li><a href="Account.php">My Account</a></li>
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
                    
                                 	
	 <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">


    

    

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

     <div class="templatemo_product"><strong>Date</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stars
     <?php
     
     echo "comments";
     echo "<br>by customer name";
     ?>
</div>
<hr style="background-color:red;color:black">



    

     <h1>&nbsp;</h1>

  </div>  
                   <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">



    

     <h1>&nbsp;</h1>

  </div>      </h4>
                      </div>
                    
                    </div>
                    <!-- Billing Details -->
                    
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
              
                        
                        
                        <!-- <td><input type="radio" name="r1"/></td>
                          <td><strong> As Soon As Possible</strong><br>Your Order is Delivery to Your Home</td>
                        </tr>
						 <tr>
                         <td><input type="radio" name="r1"/></td>
                          <td><strong> Later</strong></td>
                        </tr>-->
                      
                   
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