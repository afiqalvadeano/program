<?php
include 'koneksi.php';
$email = $_GET['email'];

$sql=mysqli_query($konek,"delete from user where email='$email'");

if(!mysqli_error($konek)){
	$message = "berhasil hapus data";
}
else{
	$message = "Gagal mmenghapus data";
}
header("location:index.php?message=$message")

?>