<?php
$host="localhost";
$user="root";
$pass="";
$database="db_psb";

$conn= mysqli_connect($host, $user, $pass, $database);
if(!$conn){
    die("koneksi gagal:" . mysqli_connect_error());
}
echo "";


?>