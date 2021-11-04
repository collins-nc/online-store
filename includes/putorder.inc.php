<?php
//get data from form  
//send to seller
$name = $_POST['sname'];
$email= $_POST['semail'];
$city= $_POST['scity'];
$addres = $_POST['saddress'];
$zip = $_POST['szip'];
$country = $_POST['scountry'];

$to = "noko.nc@gmail.com"; //seller email
$subject = "New Order placed!";
$txt ="Name = ". $sname . "\r\n  Email = " . $semail . "\r\n City =" . $city. "\r\n Address =" . $addres. "\r\n Zip code =" . $zip. "\r\n Country =" . $country;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}


//confirmation for customer

$name = $_POST['name'];
$to = $_POST['email'];  //cutomer email
$subject = "Order confirmation";
$txt ="Name = ". $name . "\r\n" . $email . "\r\n Your Order has been placed successfully";
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:../order.php");
?>