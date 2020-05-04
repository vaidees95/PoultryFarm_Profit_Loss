<html>
    <head>
		<title>HOUSED</title>
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
<li><a href=eggprice.html target="_self">Egg Price</a></li></ul>
</div>
<br><br>
<center><font color="#FF0000"><h2>PERCENTAGE OF EGG PRODUCTION</h2></font></center><br>

<?php
$conn=mysqli_connect("localhost","root","","poultry");
if(!$conn)
echo "not connected";
else
{
$num=$_POST["num"];
$died=$_POST["died"];
$produced=$_POST["produced"];

$result=mysqli_query($conn,"select * from housed where batch='$num'");
$row=mysqli_fetch_array($result);
$tot=$row['total'];

$present=$tot-$died;

$housed1=$produced/$present;

$housed=$housed1*100;
echo "<center><P><h1>$housed %</H1></P></center>";
$sql=mysqli_query($conn,"UPDATE housed set total='$present' WHERE batch='$num'"); 
}
?>
</body>
</html>