<?php

session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>Sage Hotels</title>
<?php
include "css/index1.css";
?>
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
<?php
include "js/index1.js";
?>
</head>
<body>
    <!-- header-section-starts -->
    
	<?php
	include "header.php";
	?>

   <?php
   include "html/index1.html";
   ?>
		

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
				<?php
				include "js/index2.js";
				?>	
		
					
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<?php
	//include "html/index.html";
	?>
	
	
	
	
	
		<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Olister Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p3.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Crab Combo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo pack lorem</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
	
	
	
	
	
				<?php
				//include "js/index3.js";
				?>
				    
				</div>
			</div>
		</div>
		</div>
		
			</div>
		</div>
		<?php
		include "footer.php";
		?>
				
				
				

</body>
</html>