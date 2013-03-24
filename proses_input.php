<?php
include "koneksi.php";
$nama=$_POST['nama'];
$username=$_POST['username'];
$pass=md5($_POST['pass']);
$alamat=$_POST['alamat'];
$sql="insert into tbl_user values('','$nama','$username','$pass','$alamat')";
$query=mysql_query($sql);
if($query){
	echo "Data berhasil disimpan";
} else echo "data gagal disimpan";
?>