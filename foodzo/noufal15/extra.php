
<?php

session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>Sage Hotels</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<?php
include "css/order.css";
?>

<?php
include "js/index.js";
?>


    
    
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
<script type="text/javascript">
  function add(x,y,z)
  { 
  z1="price"+z
  n=eval("document.f1."+x+".value")
  n++
  document.getElementById(x).value=n;
  p=n*y;
    //document.f1.qty1.value=parseInt(document.f1.qty1.value)+1;
    //p=x*parseInt(document.f1.qty1.value)
    tot=parseInt(document.f1.total1.value)+parseInt(y);
    document.getElementById("total").innerHTML=tot;
    document.f1.total1.value=tot;
    document.getElementById(z1).innerHTML=p;
  }
  function subtraction(x,y,z)
  {
    z1="price"+z
  n=eval("document.f1."+x+".value")
  n--
  document.getElementById(x).value=n
  p=n*y;
  document.getElementById(z1).innerHTML=p
  tot=parseInt(document.f1.total1.value)-parseInt(y);
    document.getElementById("total").innerHTML=tot;
    document.f1.total1.value=tot;
    //document.f1.qty1.value=parseInt(document.f1.qty1.value)-1;
  }
</script>

  <?php
include "db.php";
$id=$_SESSION['rest_id'];
$sql="select * from restaurant where rest_id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
?>
          
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="" name="f1">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                    <div class="panel panel-default aa-checkout-coupon" style="height: 340px;">
                      <div class="panel-heading" style="height: 340px;">
                        <h4 class="panel-title">
                                  
   <div id="templatemo_right_section"style="padding:10px;margin-left:0px;">


     <div class="templatemo_product" style="height:150px;width:150px;">

     <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                         Order ID:
               
                        </a>
<br><br>
     <?php
          echo "<img src=images1/".$id.".jpg >";
            ?><strong>
Name:
 <?php echo "$row[1]" ;?></strong><br>  Status:  
 <br><br> Rate & Review:
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




 <br><br>Review:<input type="text" name="review"/>
 <br>
 <br><br><input type="Submit" name="button"/>



     </div><hr style="background-color:red;color:black">

    

     <h1>&nbsp;</h1>

  </div>  
                        </h4>
                      </div>
                    
                    </div>
                    <!-- Login section -->
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
                    
                        <h4 class="panel-title">
                          
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <!-- <h6>Order Id : 123 </h6><br>Your Order was Successfully Processed-->
                        </div>
                      </div>
                    </div>
                     <div class="panel panel-default aa-checkout-coupon">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                         
                                   
<table width="600px" cellpadding="10px">
<tr>
<th>Status 



 </th> <th> &nbsp;&nbsp;&nbsp;&nbsp;Delivery Address </th> 
 
 <th> Order Details  
 
 
 </th>

</tr>



                           </a>
                        </h4>
                      </div>
                     
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
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
             <button type="submit" class="aa-browse-btn" style="width:120px;">ReOrder</button>
               
            </a>
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