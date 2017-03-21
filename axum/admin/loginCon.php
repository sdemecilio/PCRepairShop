<?php
//session_start();

$servername="localhost";
$username= "pcrepair";
$password ="Capstone2017!";
$dbname="pcrepair_shop";
//$message="";
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connected to database';
}
catch (PDOException $e){

    //echo "connection failed";
}



?>