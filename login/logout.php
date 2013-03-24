<?php
session_start();
session_destroy();
session_unset($_SESSION['user'], $_SESSION['pass']);
echo "<script>alert('Anda Berhasil Logout!'); document.location='login.php';</script>";
?>
