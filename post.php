<?php

if(isset($_POST)){

$name = $_POST['name'];
$image = $_POST['pic'];
$rate = $_POST['rating'];
$phone = $_POST['phone'];
$type = $_POST['type']
$detail = $_POST['detail'];
$category = $_POST['category'];

$filename = "IMG".rand().".jpg";
file_put_contents("images/".$filename,base64_decode($image));
// file_put_contents("C:/Users/dell/AndroidStudioProjects/VehicleRental/app/Images/".$filename,base64_decode($image));

$con = mysqli_connect("localhost","root","","vehicle");

if($con){
    echo "connected"; 
    $insert = "insert into cars(name,image,rating,phone,type,car_detail,category) values('$name','$filename','$detail')";
    mysqli_query($con,$insert);
}
}



?>
