


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
</head>
<body>
    <!-- header-section-starts -->
	
		
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form action="search.php" method="post">
						  <ul class="navmain">
						  
					<!--	<li> <span> City Name</span>
    <input type="text" list="browsers" name="t1" required class="text"style="width:240px;" value="Udupi" onfocus="this.value = '';"onblur="if (this.value == '') {this.value = 'Udupi';}" />
    <datalist id="browsers">
      <option value="Udupi">
      <option value="Manipal">
     
    </datalist></li>
							<li><span>City Name</span>
							 <input type="text" class="text" name="t1"value="Udupi"style="width:240px;" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Udupi';}">
							</li>
							<li><span>Area Name</span>
							 <input type="text"style="width:240px;"required name="t2" class="text" value="Diana" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Diana';}">
							</li>-->
							
							
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
   <li >

<input type="Submit"  value="Search Restaurant"  style="width:170px;height:35px" name="btn1"/><!-- <input type="text" class="text" id="t12">--> </form>
	        <input type="hidden" id="myText1" name="t1"/>  <input type="hidden" id="myText" name="t2"/><input type="hidden" id="myText2" name="t3"/>
</li>
    </div>		
							


							
						  </ul>
						
						</div>