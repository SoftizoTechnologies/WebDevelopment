<?php
include "header.php";
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
<?php
include "js/index1.js";
?>
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
<script src="js/jquery1.min.js"></script>
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
   <li>
       <input type="Submit"  value="Search Restaurant"  style="width:170px;height:35px" name="btn1"/><!-- <input type="text" class="text" id="t12">--> </form>
	        <input type="hidden" id="myText1" name="t1"/>  <input type="hidden" id="myText" name="t2"/><input type="hidden" id="myText2" name="t3"/>
          </li>
                </div>							
						  </ul>						
						</div>	

						<?php
				include "js/index2.js";
				?>					
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



	<?php
	include "db.php";
	
	$sql="select  special_offers.* ,product_name,product_tag,ROUND(product_price*(100-discount)/100) from special_offers,product where product.product_id=special_offers.product_id and Sysdate() between start_date AND end_date  ";
	//select * from special_offers where sysdate() between start_date AND end_date
	$result=mysqli_query($link,$sql);
	
	?>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
		<<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
					  <?php
					  while($row=mysqli_fetch_array($result))
					  {
					  	?>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="food images/1.1.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4><?php echo "$row[5]";?></h4>
									<p><?php echo "$row[6]";?> </p>
									<p>Discount price:<?php echo "$row[7]";?></p>
									<input type="button" value="Add cart">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<?php
					}
					?>
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
</body>
</html>