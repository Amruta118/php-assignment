<?php
$host="localhost";
$username="root";
$pwd="";
$database="savedetail";

$con = new mysqli($host, $username, $pwd, $database);

if(!$con){
    die('Could not connect: ' . mysqli_error($con));
}
$firstname=$_GET["firstname"];
$lastname=$_GET["lastname"];
$email=$_GET["email"];
$phonenumber=$_GET["phonenumber"];

$stmt = $con->prepare("insert into pagedetail (firstname,lastname,email,phonenumber) values(?,?,?,?)");
$stmt->bind_param("sssi",$firstname,$lastname,$email,$phonenumber);

$stmt->execute();
echo "Your record is inserted successfully..";
mysqli_close($con);
?>