<?php

class Dbh{
    protected function connect(){
        try {
            //change variables dpending on host settings
            $userName = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=e_com',$userName,$password);
        } catch (PDOException $msg) {
            print "!Error: ".$msg->getMessage()."<br/>";
            die();
        }
        return $dbh;
    }
}