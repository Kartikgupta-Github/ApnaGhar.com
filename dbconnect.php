<?php
$server="localhost";
$username="root";
$password="";
$dbname="apna_ghar";

$conn=new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed due to ".$conn->connect_error );
}
/*else{
    echo "connected successfully";
    }*/
?>