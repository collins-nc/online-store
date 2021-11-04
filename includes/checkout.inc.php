<?php

include "../classes_access/Dbh.php";
include "../classes_access/checkout.php";
$pr = new checkout();


if(isset($_POST["submit"])){
    if(empty($_POST["laptop-1"])){
        $laptop1 = 00;
    }else{
        $laptop1 = $_POST["laptop-1"];
        $pr->check($laptop1);
    }

    if(empty($_POST["laptop-2"])){
        $laptop2 = 00;
    }else{
        $laptop2=$_POST["laptop-2"];
        $pr->check($laptop2);
    }

    if(empty($_POST["laptop-3"])){
        $laptop3 = 00;
    }else{
        $laptop3=$_POST["laptop-3"];
        $pr->check($laptop3);
    }

    if(empty($_POST["laptop-4"])){
        $laptop4 = 00;
    }else{
        $laptop4 = $_POST["laptop-4"];
        $pr->check($laptop4);
    }
    
    if(empty($_POST["laptop-5"])){
        $laptop5 = 00;
    }else{$laptop5=$_POST["laptop-5"];
        $pr->check($laptop5);}

    if(empty($_POST["laptop-6"])){
        $laptop6 = 00;
    }else{$laptop6=$_POST["laptop-6"];
        $pr->check($laptop6);}

    if(empty($_POST["laptop-7"])){
        $laptop7 = 00;
    }else{$laptop7 = $_POST["laptop-7"];
        $pr->check($laptop7);}

    if(empty($_POST["laptop-8"])){
        $laptop8 = 00;
    }else{$laptop8=$_POST["laptop-8"];
        $pr->check($laptop8);}

    if(empty($_POST["laptop-9"])){
        $laptop9 = 00;
    }else{$laptop9=$_POST["laptop-9"];
        $pr->check($laptop9);}

    if(empty($_POST["laptop-10"])){
        $laptop10 = 00;
    }else{$laptop10 = $_POST["laptop-10"];
        $pr->check($laptop10);}
    
    if(empty($_POST["laptop-11"])){
        $laptop11 = 00;
    }else{$laptop11=$_POST["laptop-11"];
        $pr->check($laptop11);}

    if(empty($_POST["laptop-12"])){
        $laptop12 = 00;
    }else{$laptop12=$_POST["laptop-12"];
        $pr->check($laptop12);}

    if(empty($_POST["laptop-13"])){
        $laptop13 = 00;
    }else{$laptop13=$_POST["laptop-13"];
        $pr->check($laptop13);}

    if(empty($_POST["laptop-14"])){
        $laptop14 = 00;
    }else{$laptop14 = $_POST["laptop-14"];
        $pr->check($laptop14);}
    
    if(empty($_POST["laptop-5"])){
        $laptop15 = 00;
    }else{$laptop15=$_POST["laptop-15"];
        $pr->check($laptop15);}

    if(empty($_POST["laptop-16"])){
        $laptop16 = 00;
    }else{$laptop16=$_POST["laptop-16"];
        $pr->check($laptop16);}

    $nm = $GLOBALS["name"];
    $dsc = $GLOBALS["desc"] ;
    $pr = $GLOBALS["price"];

    $url="../checkout.page.php?name=$nm&descrip=$dsc&price=$pr";
    $url=str_replace(PHP_EOL, '', $url);
    header("Location: $url");




}