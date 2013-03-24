<?php
include "koneksi.php";
$sql=mysql_query("select * from tbl_user");
echo "<table border=1 width=80%>
	<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Username</td>
	<td>Password</td>
	<td>Alamat</td>
	<td>Aksi</td>
	</tr>";
$no=1;
while($data=mysql_fetch_array($sql)){
	echo "<tr>
		<td>$no</td>
		<td>$data[nama]</td>
		<td>$data[username]</td>
		<td>$data[password]</td>
		<td>$data[alamat]</td>
		<td><a href=edit.php?id=$data[id_user]> Edit </a> - <a href=hapus.php?id=$data[id_user]> Hapus </a> - </td>
	</tr>";
$no++;
}
echo "</table>";
?>