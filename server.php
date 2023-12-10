<?php
$server="localhost";
$username="root";
$password="root";
$database ="Sugar_ERP";


$con=mysqli_connect($server,$username,$password,$database);

if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}

?>