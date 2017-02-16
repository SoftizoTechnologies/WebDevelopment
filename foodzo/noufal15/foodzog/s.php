
<script type="text/javascript">

function incr()
{


var value=parseInt(document.getElementById('num').value,10);
value=isNaN(value)?0:value;
if(value<1000)
{
value++;
document.getElementById('num').value=value;

var v1=parseInt(document.getElementById('num1').value);

var v2=value * v1;

document.getElementById('num2').value=v2;

}
}




function decr()
{


var value=parseInt(document.getElementById('num').value,10);
value=isNaN(value)?0:value;
if(value>0)
{
value--;
document.getElementById('num').value=value;

var v1=parseInt(document.getElementById('num1').value);

var v2=value * v1;

document.getElementById('num2').value=v2;
}
}

</script>



<?php
$connection = mysql_connect('localhost','root','admin') or die(mysql_error());
$database = mysql_select_db('foodzo1') or die(mysql_error());

if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select * from menu where menu_name like '$q%'order by menu_id ");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['menu_name'];
//$email=$row['email'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
//$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Rs 120.00 <input type="submit" onclick="incr()" id="num" value="+" name="rs"><br/><br/>
</div>
<?php

//echo "";
}
}
?>
