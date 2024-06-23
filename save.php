<?php

$server="localhost";
$username="root";
$password="";
$dbname="detalis";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    echo " not connect";
}

$NAME=$_POST['NAME'];
$CONTACT=$_POST['CONTACT'];
$HOME=$_POST['HOME'];
$DISTRICT=$_POST['DISTRICT'];
$EMAIL=$_POST['EMAIL'];



$sql="INSERT INTO `details`(`NAME`, `CONTACT`, `HOME`, `DISTRICT`, `EMAIL`) VALUES ('$NAME','$CONTACT','$HOME','$DISTRICT','$EMAIL')";
$result=mysqli_query($con,$sql);
if($result){
    echo "data submitted";
}
else{
    echo "error...";
}

?>