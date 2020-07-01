<?php
session_start();
if(! session_is_registered(SES_UIDUSER)) {
	echo "<div align=center><b> Perhatian! </b><br>";
	echo "Akses ditolak, Anda belum Login </div>";
	include "../inc.login.php";
	exit;
}
?>