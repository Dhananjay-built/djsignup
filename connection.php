<?php

$server = "sql305.epizy.com";
$database = "	epiz_29179932";
$password = "lkF52qFgtKWm";
$dbname = "epiz_29179932_signup_database_djwebsites";

$conn = mysqli_connect($server,$database,$password,$dbname);
if(!$conn){
	die ("Connection failed".mysqli_connect_error());
}
?>