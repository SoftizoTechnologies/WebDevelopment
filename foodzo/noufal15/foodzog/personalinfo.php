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
  <?php
  $id=1;
  include "db.php";
  if(isset($_POST['btn']))
  {
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $sql="update customer set cust_name='$t1',cust_email='$t2',cust_phone='$t3',cust_addr1='$t4' where cust_id=$id";
    mysqli_query($link,$sql);

  }

  $sql="select * from customer where cust_id=1";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_array($result);
  ?>
  
       
         <div class="aa-contact-address" style="margin-left:580px;color:black">
             <div class="row">
               <div class="col-md-5">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                       <div class="panel-heading">
                       <h1 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                           Personel Info
                           </h1>
                           </div>
                          </a>
                        <div class="form-group"> Name :                       
                          <input type="text" name="t1" placeholder="Name" value='<?php echo $row[3];?>' class="form-control" style="width:250px">
                        </div>
                      </div>
                    </div> <div class="row">
            <div class="col-md-6">
                        <div class="form-group">        Email :                
                          <input type="text" name="t2" placeholder="Email" value='<?php echo $row[1];?>'class="form-control"style="width:250px;">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">     Mobile :                   
                          <input type="text" name="t3" placeholder="Mobile" value='<?php echo $row[2];?>' class="form-control"style="width:250px">
                        </div>
                      </div></div>  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">       Location :                 
                          <input type="text" placeholder="location" class="form-control"style="width:250px">
                        </div>
                      </div>
                    </div>                  
                     
                    <div class="form-group">      Address :                  
                      <textarea class="form-control" rows="3" name="t4" placeholder="address" ><?php echo $row[4];?></textarea>
                    </div>
                    <button name="btn" class="aa-secondary-btn"style="float:right">Save</button>
                  </form>
                 </div>
               </div>
               
             </div>
           </div>
  
  
 
  <div class="content">
   
    </div>

    
      </div>
    </div>
    <?php
    include "footer.php";
    ?>        
</body>
</html>