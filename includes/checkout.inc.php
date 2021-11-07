<?php

include "../classes_access/Dbh.php";
include "../classes_access/checkout.php";
$pr = new checkout();



if(isset($_POST["submit"])){
    $line = "";
    $count = 0;
    if(!empty($_POST["laptop-1"])){
        $laptop1 = $_POST["laptop-1"];
        $line.="&".$pr->check($laptop1);
        $count++;
    }

    if(!empty($_POST["laptop-2"])){
        $laptop2=$_POST["laptop-2"];
        $line.="&".$pr->check($laptop2);
        $count++;

    }

    if(!empty($_POST["laptop-3"])){
        $laptop3=$_POST["laptop-3"];
        $line.="&".$pr->check($laptop3);
        $count++;

    }

    if(!empty($_POST["laptop-4"])){
        $laptop4 = $_POST["laptop-4"];
        $line.="&".$pr->check($laptop4);
        $count++;

    }
    
    if(!empty($_POST["laptop-5"])){
        $laptop5=$_POST["laptop-5"];
        $line.="&".$pr->check($laptop5);
        $count++;

    }

    if(!empty($_POST["laptop-6"])){
        $laptop6=$_POST["laptop-6"];
        $line.="&".$pr->check($laptop6);
        $count++;

    }

    if(!empty($_POST["laptop-7"])){
        $laptop7 = $_POST["laptop-7"];
        $line.="&".$pr->check($laptop7);
        $count++;

    }

    if(!empty($_POST["laptop-8"])){
        $laptop8=$_POST["laptop-8"];
        $line.="&".$pr->check($laptop8);
        $count++;

    }

    if(!empty($_POST["laptop-9"])){
        $laptop9=$_POST["laptop-9"];
        $line.="&".$pr->check($laptop9);
        $count++;

    }

    if(!empty($_POST["laptop-10"])){
        $laptop10 = $_POST["laptop-10"];
        $line.="&".$pr->check($laptop10);
        $count++;

    }
    
    if(!empty($_POST["laptop-11"])){
        $laptop11=$_POST["laptop-11"];
        $line.="&".$pr->check($laptop11);
        $count++;

    }

    if(!empty($_POST["laptop-12"])){
        $laptop12=$_POST["laptop-12"];
        $line.="&".$pr->check($laptop12);
        $count++;

    }

    if(!empty($_POST["laptop-13"])){
        $laptop13=$_POST["laptop-13"];
        $line.="&".$pr->check($laptop13);
        $count++;

    }

    if(!empty($_POST["laptop-14"])){
        $laptop14 = $_POST["laptop-14"];
        $line.="&".$pr->check($laptop14);
        $count++;

    }
    
    if(!empty($_POST["laptop-5"])){
        $laptop15=$_POST["laptop-15"];
        $line.="&".$pr->check($laptop15);
        $count++;

    }

    if(!empty($_POST["laptop-16"])){
        $laptop16=$_POST["laptop-16"];
        $line.="&".$pr->check($laptop16);
        $count++;

    }


    $url="../checkout.page.php?count=$count$line";
    $url=str_replace(PHP_EOL, '', $url);
    header("Location: $url");




}
