<html>
<html>
<html>
    <head>
		<title>EGG PRICE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
     
        
    </head>
<body bgcolor="#9933CC">
    
<div id="first"><br/>

  <h2>KALIYANNAN POULTRY FARM </h2></p>
<h2>NAMAKKAL</h2>
</div>

<div id=second>
<ul>
<li><a href=index.html target="_self">Home</a></li>
<li><a href=housed.html target="_self">Egg Production</a></li>
<li><a href=feedcost.html target="_self">Feed Cost</a></li>
<li><a href=eggprice.html target="_self">Egg Price</a></li>
<li><a href=totalreturn.html target="_self">Total Return</a></li></ul>
</div>
<div id="color">
<br><br>
<center><font color="#FF0000"><h2> EGG PRICE</h2></font></center><br></div>
<?php
$conn=mysqli_connect("localhost","root","","poultry");
if(!$conn)
echo "not connected";
else
{
$batch=$_POST["batch"];
$cost=$_POST["price"];
$num=$_POST["eggs"];
$total=$cost*$num;
echo "<CENTER><P><h1>INR $total</H1></P></center>";
$sql=@mysqli_query($conn,"update temp set eggprice='$total' where batch='$batch'");
}
?>
</body>
</html>