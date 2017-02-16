function sendOTP() {
		  
		    $.ajax({
            url: 'controller/header.php',
            type: 'post',
            data: {
				mobile_number: $('#mobile_number').val()},
                
				success: function (result) 
				{	
					result = JSON.parse(result);							
					if (result.user_exists == true)//login 
					{
						//$('#myModal').hide();
						 $('#myModal').close;
						 $('#loginin').text("Logout");
						window.document.location.href = 'home.php';										
					    
					}             
					else  //show next popup window
					{		
                        $('#myModal').hide();					
						$('#myModal2').show();
						clickmi(result.OTP_sent);
					} 
				}                    
			});//close ajax
    }
function clickmi(y)
	{
	$('#close3').click(function()
	       { 
            	var otpp=$('#otp_text').val();
				
				if (y==otpp) //entered otp is matched
				{
				 window.document.location.href = 'register.php';							
				}
				else // when entered otp not match
				{
				alert("Try Again !!!");
				}
						
			});  
	}
	