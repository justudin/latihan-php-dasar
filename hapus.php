<?php
include "koneksi.php";
$id=$_GET['id'];
$sql="delete from tbl_user where id_user='$id'";
$hapus=mysql_query($sql);
if($hapus){
	echo "Data berhasil dihapus";
} else echo "data gagal dihapus";

?>