<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';


// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select id from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$type = mysqli_query($koneksi,"select type from user where username='$username' and password='$password'");

$_SESSION['status']="belum";
if($_SESSION['status']=="belum")
{
	echo "<script type='text/javascript'>alert('Username atau password salah')</script>";
	echo "<script>window.location = 'index.php'</script>";
}

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}

?>