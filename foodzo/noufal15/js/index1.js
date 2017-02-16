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