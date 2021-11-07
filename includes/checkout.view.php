<?php

include "classes_access/Dbh.php";
include "classes_access/checkout.php";
$view = new checkout();

$data = array();
$data = $view->getdata();

echo $data;
