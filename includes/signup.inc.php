<?php

if(isset($_POST["submit"])){
    $first = $_POST["first_name"];
    $last = $_POST["last_name"];
    $email = $_POST["email"];
    $birth = $_POST["date"];
    $psw = $_POST["password"];
    $confirm = $_POST["re_password"];

    //order of include is important 
    include "../classes_access/Dbh.php";
    include "../classes_access/signup.php";
    include "../classes_access/signupContr.php";
    //creat user
    $signup = new signupContr($first,$last,$email,$birth,$psw,$confirm);
    $signup->signuser();


    header("Location: ../index.php?error=none");

}