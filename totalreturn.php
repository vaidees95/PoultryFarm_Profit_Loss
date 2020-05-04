<html>
    <head>
		<title>TOTAL RETURN</title>
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
<center><font color="#FF0000"><h2>TOTAL RETURN</h2></font></center><br></div>
<?php
$conn=mysqli_connect("localhost","root","","poultry");
if(!$conn)
echo "not connected";
else
{
$num=$_POST['batch'];
$result=mysqli_query($conn,"select * from temp where batch='$num'");
$row=mysqli_fetch_array($result);
$feedcost=$row['feedcost'];
$eggprice=$row['eggprice'];
$total=$eggprice-$feedcost;
echo "<CENTER><P><h1>INR $total</H1></P></center>";
}
?>
</body>
<html>