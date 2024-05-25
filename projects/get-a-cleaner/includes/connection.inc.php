<?php 

//local database
$servername = "localhost";
$dbuid = "root";
$dbpassword = "";
$dbname="getacleaner";


/** 
//live database
$servername = "kzislam89366.ipagemysql.com";
$dbuid = "kazi";
$dbpassword = "Palash@1121";
$dbname="getacleaner";
*/


$dbconnection = mysqli_connect($servername,$dbuid, $dbpassword, $dbname) or die("Could not connect to database!");





