<?php
//if (!session_is_registered(sekarang)) {
	$tanggal= date("j");
	$bulan	= date("n");
	$tahun	= date("Y");
	$jam	= date("H");
	$menit	= date("i");
	$detik	= date("s");
	$sekarang=mktime($jam,$menit,$detik,$bulan,$tanggal,$tahun);
	$_SESSION['sekarang'] = $sekarang;
//}

//$sqlCount = "SELECT SUM(waktu) AS waktu FROM pelajaran ";
$sqlCount = "SELECT waktu AS waktu FROM pelajaran WHERE kd_pelajaran='$kdPel'";
$qryCount = mysql_query($sqlCount, $koneksi) or die ("Gagal query count".mysql_error());
$hslCount = mysql_fetch_array($qryCount);
		
$batas_awal	= date("H:i",$_SESSION['sekarang']);
$batas_akhir= date("H:i",$_SESSION['sekarang']+($hslCount['waktu']*60));
$_SESSION['batas_akhir'] = $batas_akhir;
$_SESSION['batas_awal']  = $batas_awal;
?>
