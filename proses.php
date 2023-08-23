<?php
include 'connect.php';

$user = $_POST['user'];
$pass = $_POST['pass'];



//perintah
$query = mysqli_query($host,"select * from user where username= '$user' and password='$pass'");

//mendektesi apakah sesuai atau tidak
// mysqli_num_rows($query);

//mendektesi apakah sesuai atau tidak
$cek =mysqli_num_rows($query);

if($cek == 1){
    header("location:admin.php?pesan=login");
}else if($cek == 0){
    header("location:index.php?pesan=gagal");
}



?>