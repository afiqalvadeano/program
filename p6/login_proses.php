<?php
include 'koneksi.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

//statis
// if($user=="admin" && $pass=="admin"){
// 	$_SESSION['login'] = true;
// 	header("location:index.php");
// 	return;
// }
$data=mysqli_query($konek, "select * from user where email ='$user' and password ='$pass'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$data=mysqli_fetch_assoc($data);
	$_SESSION['login']=true;
	$_SESSION['nama']=$data->nama;
	header("location:check_login.php");
	return;
}

?>