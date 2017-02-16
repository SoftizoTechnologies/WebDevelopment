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
	include "html/index.html";
	?>
				<?php
				include "js/index3.js";
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