<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script language="javascript">
function adddata(x,y1,c)
{
a=""
b=""
var found=0
y=document.f1.hf1.value;
z=y.split(",");
i=1;
while(i<(z.length))
{
if(x==z[i])
found=1
i=i+3;	
}
if(found==0)
{
document.f1.hf1.value=document.f1.hf1.value +","+x+","+y1+","+c;
}
y=document.f1.hf1.value;
z=y.split(",");
i=1;
while(i<(z.length))
{
if(found==1 && x==z[i])
{
	z[i+2]++; 
}
b+=","+z[i]+","+z[i+1]+","+z[i+2];
a+="<a href=javascript:adddata1('"+escape(z[i])+"',"+z[i+2]+")>+</a>"+z[i]+" - "+z[i+1]+z[i+2]+"<a href=javascript:removedata('"+escape(z[i])+"',"+z[i+2]+")>-</a><br>"
i=i+3
}
document.getElementById("d1").innerHTML=a;
document.f1.hf1.value=b
}

function adddata1(x,c)
{
a=""
b=""
y=document.f1.hf1.value;
z=y.split(",");
i=1;
while(i<(z.length))
{
	if(z[i]==x)
	{z[i+2]++; }
b+=","+z[i]+","+z[i+1]+","+z[i+2];
a+="<a href=javascript:adddata1('"+escape(z[i])+"',"+z[i+2]+")>+</a>"+z[i]+" - "+z[i+1]+z[i+2]+"<a href=javascript:removedata('"+escape(z[i])+"',"+z[i+2]+")>-</a><br>"
i=i+3
}
document.getElementById("d1").innerHTML=a;
document.f1.hf1.value=b
}

function removedata(x,y)
{
a=""	
b=""
y=document.f1.hf1.value;
z=y.split(",");
i=1;
while(i<(z.length))
{
	if(z[i]==x)
	{z[i+2]--; }	
	if(z[i+2]!=0)
	{b+=","+z[i]+","+z[i+1]+","+z[i+2];
	a+="<a href=javascript:adddata1('"+escape(z[i])+"',"+z[i+2]+")>+</a>"+z[i]+" - "+z[i+1]+z[i+2]+"<a href=javascript:removedata('"+escape(z[i])+"',"+z[i+2]+")>-</a><br>"
	}
i=i+3
}
document.getElementById("d1").innerHTML=a;
document.f1.hf1.value=b
}
</script>
<?php
$p1=array("Rawa Dosa","Masala Dosa","Masala puri","Pani Puri");
$pp1=array(30,50,40,25);
?>
<form name="f1">
<input type="hidden" name="hf1" />

<table width="100%" border="0">
<?php
for($i=0;$i<count($p1);$i++)
{
	?>
  <tr>
    <td><?php echo $p1[$i]; $s1="v".$i; ?></td>
    <td> </td>
    <td><a id="vv" href="javascript:adddata('<?php echo $p1[$i]; ?>',<?php echo $pp1[$i]; ?>,1)">+</a></td>
    <td></td>
    <td></td>
    <td><span id=v1></span></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
<?php
}
?>
</table><span id=d1></span>
</form>
</body>
</html>