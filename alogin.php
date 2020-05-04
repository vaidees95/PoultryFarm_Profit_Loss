<html>
    <head>
		<title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
     
        
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
<?php
if(count($_POST)>0) {
$conn = @mysql_connect("localhost","root","","poultry");
if (!$conn)
           {
             die('Could not connect: ' . mysql_error());
           }
mysql_select_db("poultry",$conn);
$result = @mysql_query("SELECT * FROM login WHERE userName='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
echo "<center>Invalid Username or Password!</center>";
} else {
header('Location:layer.html');echo "Invalid Username or Password!";
}
}
?>
</body>
</html>