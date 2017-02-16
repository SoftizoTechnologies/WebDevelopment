<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- For animation and style -->
<?php
include "css/menu1.css";

?>
<!--Animation-->
<?php
include "js/menu.js";
?>
<script type="text/javascript" src="js/home.js"></script>
<!-- For font and body style -->

 <?php
 include "css/menu.css";
 ?>
 
  
<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
  $.ajax({
  type: "POST",
  url: "s.php",
  data: dataString,
  cache: false,
  success: function(html)
  {
  $("#result").html(html).show();
  }
  });
}return false;    
});

jQuery("#result").live("click",function(e){ 
  var $clicked = $(e.target);
  var $name = $clicked.find('.name').html();
  var decoded = $("<div/>").html($name).text();
  $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
  var $clicked = $(e.target);
  if (! $clicked.hasClass("search")){
  jQuery("#result").fadeOut(); 
  }
});
$('#searchid').click(function(){
  jQuery("#result").fadeIn();
});
});
</script>
    <style type="text/css">
  body{ 
    font-family:Tahoma, Geneva, sans-serif;
    font-size:18px;
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
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20" style="background: light gray;">

    <!-- header-section-starts -->
  
    <!-- header-section-starts -->
  <div class="header" style="background-color:gray" >
    
      
        </div>
<!-- header section -->
<?php
include "html/header.html";
?>


  
 
<?php
include "db.php";
$id=$_GET['id'];
$_SESSION['rest_id'] = $id;
$sql4="select * from restaurant where rest_id=$id";
$result4=mysqli_query($link,$sql4);
$row4=mysqli_fetch_array($result4);
?>
  
        
          <div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
            <h1></h1>
            <?php
            echo "<img src=images1/".$id.".jpg height=150px,width=150px> <br>";

          
            echo "Delivery Timings";
            
            $sql="select * from delivery_hours where rest_id=$id";
$result=mysqli_query($link,$sql);
$days=array(1=>"Monday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",2=>"Tuesday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ",3=>"Wednesday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",4=>"Thursday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",5=>"Friday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",6=>"Saturday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp",7=>"Sunday &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");
echo "<h1>Delivery Hours</h1>";
while($row=mysqli_fetch_array($result))
{
date_default_timezone_set('Asia/Kolkata');
 $t1=strtotime($row[1]);echo "&nbsp &nbsp &nbsp &nbsp";
  $t2=(strtotime($row[2])- (12*60*60));
  $t3=(strtotime($row[3])- (12*60*60));
  $t4=(strtotime($row[4])- (12*60*60));
  if(date('i',$t1)=="00")
    $dt1=date('h',$t1);
  else
  $dt1=date('h:i',$t1);
if(date('i',$t2)=="00")
    $dt2=date('h',$t2);
  else
  $dt2=date('h:i',$t2);
if(date('i',$t3)=="00")
    $dt3=date('h',$t3);
  else
  $dt3=date('h:i',$t3);
if(date('i',$t4)=="00")
    $dt4=date('h',$t4);
  else
  $dt4=date('h:i',$t4);  
  $i=$row[0];
  echo "<br> $days[$i] ". $dt1."AM - ".$dt2." PM / ".$dt3."PM - ".$dt4."PM";

}


            ?>
            
                 

          </div>
        
          
    <?php
    include "js/index2.js";
    ?>
          
        </div>
      </div>
    </div>

          
                <div class="clearfix"></div>
        

  <!-- header-section-ends -->
  <!-- content-section-starts -->
   




    <?php 
   
    $loc=$_SESSION["loc"];
    $loc1=$_SESSION["rst"];
    
         // echo "<h2 style=margin-left:450px;color:red;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orders from ".$loc." Restaurants</h2><h6 style=margin-left:550px;color:red;>delivering to your door</h6><br>"; 
        

            
          //echo"<h4 style=margin-left:460px;color:white>". $loc1." <a style='margin-left:150px' class='y' href=index.php>Change Location</a></h4>";
       
    $id=$_GET['id'];
 $sql="select * from menu where rest_id=$id";
 $result=mysqli_query($link,$sql);
    
    ?>

    <br>
  <div class="content">
  <form name="f2" action="" method="POST">
<input type="text" class="search" id="searchid" placeholder="Search for Dishes" name="food" style="border-radius:15px;width:250px;margin-left:250px" />; 
<input type="submit" name="search" value="search"/>
</form>
<?php
if(isset($_POST['search']))
{


  $foodname=$_POST['food'];
$sql5="SELECT product.*,menu.* from product,menu,product_menu_map pmp where menu.menu_id=pmp.menu_id AND product.product_id=pmp.product_id AND menu.rest_id=$id and product.product_name like '%".$foodname."%'";
$result5=mysqli_query($link,$sql5);
while($row5=mysqli_fetch_array($result5))
{
  echo "$row5[1]  $row5[3] &nbsp&nbsp&nbsp <a href=\"javascript:adddata('$row5[1]',$row5[3],1)\"><button>Add</button></a><br>";

          //$item   = str_replace(" ", "_-", $row1[1]);
         
        
}
}
?>
<div id="result">
</div>
</div>

    <!-- for allignent  -->
 <?php
 include "html/menu.html";
 ?>



                   <?php
   $i=1;
   while($row=mysqli_fetch_array($result))
   { 
    $s="#section".$i;

     echo "<li><a href='$s'>$row[4]</a></li>";
$i++;
   }
  echo "<li><a href='#section1'>All Menu Items</a></li>";
 
 
    $sql="select * from menu where rest_id=$id ";
   $result=mysqli_query($link,$sql);
   ?>
     
                </ul>
          </div>

          </div>  
          <div class="col-md-9" style="width:550px">
    
                <h2 id="sec0"><?php echo "$row[1]";?> </h2>


      <?php
    $i=1;
    while($row=mysqli_fetch_array($result))
    {

 ?>    


                
   <div id="templatemo_right_section" style="padding:10px;margin-left:0px;">
<?php
$s="section".$i;
echo "<style type='text/css'> #$s {color: #fff; background-color: #ff9800;}  @media screen and (max-width: 810px) {  #$s { margin-left: 150px; }  } </style>";

$sql1="SELECT product.*,menu.* from product,menu,product_menu_map pmp where menu.menu_id=pmp.menu_id AND product.product_id=pmp.product_id AND menu.rest_id=$id AND menu.menu_id=$row[0]";
        $result1=mysqli_query($link,$sql1);
        $nos1=mysqli_num_rows($result1);
        $size=$nos1*100;
         echo "<div id='$s' style=height:".$size."px>";   
         
        echo "<h4>$row[4]</h4>";

    
        ?>
     <div class="templatemo_product">
     <?php
     while($row1=mysqli_fetch_array($result1))
        { 
          echo "<img src='Food images/2.1.jpg' alt='templatemo.com' width='' height='40'style='border-radius:15px;margin-left:0px;'' />";          
          echo "$row1[1] <br> $row1[2] <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          $item   = str_replace(" ", "_-", $row1[1]);
         $price = $row1[3];
          echo "<a href=\"javascript:adddata('$row1[1]',$row1[3],1)\"><button>Add To Cart</button></a>";
          echo " <strong>$row1[3] </strong> ";
          
          echo "<br><br>";

        }
        ?>

 </div><hr style="background-color:red;color:black"> 
    <h1>&nbsp;</h1>

  </div>  
      </div>
<?php
$i++;
}  
?>  




<ul>          
            
   </div>
  <div>    
<nav class="col-sm-3" id="myScrollspy"style="margin-top:00px;float:right">
      <ul class="nav nav-pills nav-stacked">
      <div class="col-md-3" id="right" class="col-md-3" id="myScrollspy"    >
        <div class="well" style="width:380px;height:350px;"class="nav nav-pills nav-stacked" data-spy="affix"data-offset-top="700"> 
              <div class="cart box_1"style=" height:100px;" >
        <div style="max-height:150px;overflow-y:scroll;font-size:8px">
        <h4 ><center>Your Order</center></h4>
              <a href="checkout.html">
              <br>  <br>
<form name="f1" method="POST" action="login.php">
<?php
$sql3="select * from restaurant where rest_id=$id";
$result3=mysqli_query($link,$sql3);
$row3=mysqli_fetch_array($result3);
?>
<input type="hidden" name="hf1" />
<input type="hidden" name="qty_price"/>

              </a>  <h5 style="font-size:11px" lass="item_add">&nbsp;&nbsp;&nbsp;&nbsp;<span id=d1></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''>x</a></h5><br><br><br>
             
              
              </div>
              
              <h5>Sub Total&nbsp;&nbsp;<span id="subtotal"></span>Rs </h5>
              
              <br>
              <input type="hidden" name="delivery" value="<?php echo $row3[7];?>">
              <h5>Delivery Fee&nbsp;&nbsp; <?php echo $row3[7];?>
              Rs </h5>
              <br>
              <input type="hidden" name="service" value='<?php echo $row3[11];?>'>
              <h5>Service Taxs&nbsp;&nbsp; <?php echo $row3[11];?>Rs </h5>
              <br><br>
              <h5>Grand Total&nbsp;&nbsp;<span id=grand></span>Rs </h5>
 
              <p><br><br><br><br> 
              
              <a href="#myModal" role="button"  data-toggle="modal" style="margin-top:-55px;width:249px;position:absolute;background-color:green;text-decoration:none;color:white;padding:10px;border-radius:7px" name="adddoc" id="adddoc" >Proceed To Check Out</a></p>
              </form>
              <div class="clearfix"> </div>
            </div>
          </div>

          </div>   
    </div>
</div></div>
  
    </div>
    
  </div>
</div>
<!-- popup -->
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



  <script type="text/javascript">
  function call()
  {
    $('#myModal').show();
  }
</script>
<!-- /. PAGE INNER  -->
       
       <!-- footer section -->     </div>
  <?php
  include "footer.php";
  ?>
</body>
</html>