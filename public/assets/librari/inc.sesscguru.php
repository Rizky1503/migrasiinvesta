<?php
session_start();
if(! $_SESSION['SES_CGURU'] ) {
	echo "<div align=center><b> Perhatian! </b><br>";
	echo "Akses ditolak, Anda belum Login </div>";
	include "../adminTryOut/login.php";
	exit;
}
?>
