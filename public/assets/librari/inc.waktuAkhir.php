<?php
include "inc.waktuAwal.php";
$tanggal2= date("j");
$bulan2	 = date("m");
$tahun2	 = date("Y");
$jam2    = date("H");
$menit2  = date("i");
$detik2  = date("s");
$akhir   = mktime($jam2,$menit2,$detik2,$bulan2,$tanggal2,$tahun2);
$total_waktu = sprintf("%0.0f",($akhir-$_SESSION['sekarang'])/60	);
$sisa_waktu  = $hslCount['waktu']-$total_waktu;
?>
