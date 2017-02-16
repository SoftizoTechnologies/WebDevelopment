<?php
	include "../config/db.php";
	
	if(isset($_POST['cust_name'])|| isset( $_POST['cust_email']) || isset($_POST['cust_addr1']) || isset($_POST['cust_addr2'])|| isset($_POST['cust_addr3']))
	{
		
		if ($link->connect_error) 
		{
			die("Connection failed: " . $link->connect_error);
		}	
		
		    $cust_name=$_POST['cust_name'];
			$cust_email=$_POST['cust_email'];
			$cust_addr1=$_POST['cust_addr1'];
			$cust_addr2=$_POST['cust_addr2'];
			$cust_addr3=$_POST['cust_addr3'];
			
		
		$sql = "INSERT INTO customer (`cust_email`, `cust_phone`, `cust_name`, `cust_addr1`, `cust_addr2`, `cust_addr3`) VALUES ('$cust_email','$cust_phone`','$cust_name','$cust_addr1','$cust_addr2','$cust_addr3')";    
		if ($link->query($sql) === TRUE) 
		{
        ?>
             <script type="text/javascript">
               alert ("Your Account is Successfully Created !");
			    </script>
				<?php
        } else { ?>
        <script type="text/javascript">
               alert ("Try Again !!!");
			    </script> 
				<?php
        }
	}		
?>