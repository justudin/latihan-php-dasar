<?php
include "koneksi.php";
$sql=mysql_query("select * from tbl_user");
$data=mysql_fetch_array($sql);
?>
<form method="post" action="proses_update.php">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo $data['nama']?>"/>
<input type="hidden" name="id" value="<?php echo $data['id_user']?>"/></td>
</tr>
<tr>
<td>username</td>
<td><input type="text" name="username" value="<?php echo $data['username']?>"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" value="<?php echo $data['password']?>"/></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value="simpan"/></td>
</tr>

</table>
</form>