<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $psw = $_POST["password"];

    //order of include is important 
    include "../classes_access/Dbh.php";
    include "../classes_access/login.php";
    include "../classes_access/loginContr.php";
    //creat user
    $signup = new loginContr($username,$psw);
    $signup->loginuser();


    header("Location: ../index.php?successful");

}