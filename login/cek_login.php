<?php
session_start();
include "koneksi.php";
$user=$_POST[username];
$pass=md5($_POST[pass]);
$sql=mysql_query("select * from tbl_user where username='$user' and password='$pass'");
$cek=mysql_num_rows($sql);
if($cek>0){
	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;
	echo "<script>alert('Anda Berhasil Login!'); document.location='hal_admin.php';</script>";
} else {
	echo "<script>alert('Anda Gagal Login!'); document.location='login.php';</script>";
}
?>