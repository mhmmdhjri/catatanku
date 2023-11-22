<?php
$host="localhost";
$user="root";
$pass="";
$db="note";

$conn=mysqli_connect($host,$user,$pass,$db);
// if($conn){
//     echo "koneksi berhasil";
// }else{
//     echo "gk bisa";
// }

mysqli_select_db($conn,$db);
?>