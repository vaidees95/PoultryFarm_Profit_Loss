<?php

$conn=@mysqli_connect("localhost","root","","poultry");
if(!$conn)
{
echo "not connected";
}
else
{
$batch=$_POST['num'];
$hens=$_POST['hens'];

$result =@mysqli_query($conn,"SELECT * FROM housed WHERE batch='$batch'");
$row=@mysqli_fetch_array($result);
$batch1=$row['batch'];

if($batch==$batch1)
{
echo "already present";
}
else
{
$sql=@mysqli_query($conn,"INSERT INTO housed VALUES ('$batch','$hens')");
$sql=@mysqli_query($conn,"INSERT INTO temp VALUES ('$batch','','')");
header('location:index.html');
}
}
?>