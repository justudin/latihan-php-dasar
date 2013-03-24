<?php
session_start();
if(isset($_SESSION['user'],$_SESSION['pass'])){
	$user=$_SESSION['user'];
	
	echo "selamat datang Admin <br/>
		Anda Login dengan Username : $user <br/>
		Klik <a href=logout.php>LOGOUT</a><br/>";
}
else {
 echo "<script>alert('Anda Belum Login!'); document.location='login.php';</script>";
}
?>