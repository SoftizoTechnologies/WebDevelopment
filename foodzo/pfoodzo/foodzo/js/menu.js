<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' /> <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery1.min.js"></script>
  <script src="bootstrap1.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  <script src="js/simpleCart.min.js"> </script> 
    <link href="css/responsive.css" rel="stylesheet">
 
<script>
  new WOW().init();
</script>
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
<!-- <script src="js/simpleCart.min.js"> </script>  -->


<script language="javascript">

function checkout()
{
 // document.f1.action="login.php";
  //document.f1.submit;
alert('abc');
}
function adddata(x,y1,c)
{

  a=""
  b="";
  var found=0
  st=0;
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
  st+=(z[i+1]*z[i+2]);
  b+=","+z[i]+","+z[i+1]+","+z[i+2];

a+="<a href=javascript:adddata1('"+escape(z[i])+"',"+z[i+2]+")>+</a>"+z[i+2]+" - "+z[i]+"  "+(z[i+1]*z[i+2])+"<a href=javascript:removedata('"+escape(z[i])+"',"+z[i+2]+")>-</a><br>"
i=i+3
//alert(a)
}
/*document.getElementById("vv").innerHTML="Done"
document.getElementById("vv").disabled=true*/
gt=st+parseInt(document.f1.delivery.value)+parseInt(document.f1.service.value)
document.getElementById("d1").innerHTML=a;
document.getElementById("subtotal").innerHTML=st;
document.getElementById("grand").innerHTML=gt;
document.f1.hf1.value=b

}


function adddata1(x,c)
{
a=""
b=""
st=0;
//document.f1.hf1.value=document.f1.hf1.value;
//alert(document.f1.hf1.value)
y=document.f1.hf1.value;
z=y.split(",");
//for(i=1;i<z.length;i++)
i=1;
while(i<(z.length))
{
  
  if(z[i]==x)
  {z[i+2]++; }
//  alert(z[i])
b+=","+z[i]+","+z[i+1]+","+z[i+2];
st+=(z[i+1]*z[i+2]);
a+="<a href=javascript:adddata1('"+escape(z[i])+"',"+z[i+2]+")>+</a>"+z[i+2]+" - "+z[i]+(z[i+1]*z[i+2])+"<a href=javascript:removedata('"+escape(z[i])+"',"+z[i+2]+")>-</a><br>"
//alert(a)
i=i+3
//alert(a)
}
document.getElementById("d1").innerHTML=a;
document.getElementById("subtotal").innerHTML=st;
gt=st+parseInt(document.f1.delivery.value)+parseInt(document.f1.service.value)
document.getElementById("grand").innerHTML=gt;

document.f1.hf1.value=b


}



function removedata(x,y)
{
a=""  
b=""
y=document.f1.hf1.value;
z=y.split(",");
i=1;
st=0;
while(i<(z.length))
{

  if(z[i]==x)
  {z[i+2]--; }  
  if(z[i+2]!=0)
  {b+=","+z[i]+","+z[i+1]+","+z[i+2];
st+=(z[i+1]*z[i+2]);
  a+="<a href=javascript:adddata1('"+escape(z[i])+"',"+z[i+2]+")>+</a>"+z[i+2]+" - "+z[i]+"  "+(z[i+1]*z[i+2])+"<a href=javascript:removedata('"+escape(z[i])+"',"+z[i+2]+")>-</a><br>"
  }
/*  if(z[i+2]==0)
{ 
  document.getElementById("vv").innerHTML="+" // check you may add hyperlink code
  document.getElementById("vv").disabled=false  
}*/
//  alert(z[i])
i=i+3
//alert(a)
}
document.getElementById("d1").innerHTML=a;
document.getElementById("subtotal").innerHTML=st;
gt=st+parseInt(document.f1.delivery.value)+parseInt(document.f1.service.value)
document.getElementById("grand").innerHTML=gt;

document.f1.hf1.value=b

}
</script>
