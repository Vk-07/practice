<?php

$host ="localhost";
$username="root";
$password="";
$db_name="school";


$conn = new mysqli($host,$username,$password,$db_name);

if(!$conn -> connect_error){
    echo "Connection Established Successfully";
}
?>