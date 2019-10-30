<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql=mysqli_query($konek,"update user set nama='$nama',password='$pass' where email='$email'");
if(!mysqli_error($konek)){
	$message = "berhasil edit data";
}
else{
	$message = "Gagal edit data";
}
header("location:index.php?message=$message")



?>