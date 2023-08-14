<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
$conn = mysqli_connect('localhost','root','','');
if($conn){
    echo "connection sucess";
}else{
    echo "Database was not conne";
}

?>