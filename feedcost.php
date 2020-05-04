<html>
<html>
    <head>
		<title>FEED COST</title>
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
<div id="color">
<br><br>
<center><font color="#FF0000"><h2>FEED COST</h2></font></center><br></div>
<?php
$conn=mysqli_connect("localhost","root","","poultry");
if(!$conn)
echo "not connected";
else
{
$cost=$_POST["cost"];
$num=$_POST["num"];
$result=mysqli_query($conn,"select * from housed where batch='$num'");
$row=mysqli_fetch_array($result);
$tot=$row['total'];
$r=110;
$fc1=$r*$tot;
$fc2=$fc1/1000;
$fc=$fc2*$cost;
echo "<CENTER><P><h1>INR $fc</H1></P></center>";
$sql=mysqli_query($conn,"update temp set feedcost='$fc' where batch='$num'");


}
?>
</body>
</html>