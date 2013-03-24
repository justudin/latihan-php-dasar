<?php
include "koneksi.php";
$nama=$_POST['nama'];
$username=$_POST['username'];
$pass=md5($_POST['pass']);
$alamat=$_POST['alamat'];
$id=$_POST['id'];

$sql="update tbl_user set nama='$nama',
	username='$username',
	password='$pass',
	alamat='$alamat' where id_user='$id'";
$query=mysql_query($sql);
if($query){
	echo "Data berhasil diupdate";
} else echo "data gagal diupdate";
?>