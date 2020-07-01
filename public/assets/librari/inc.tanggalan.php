<select name="cmbTgl">
<?php
$tglsekarang=date('d');
for ($tgl=1; $tgl <=31 ; $tgl++) {
	# TERPILIH
	if ($tgl==$DataTgl) {
		$cektgl = " selected";
	}
	else {
		$cektgl = "";
	}

	#2 digit
	if (strlen($tgl)==1) {
		$tgl = "0".$tgl;
	}
	else {
		$tgl = $tgl;
	}
	echo "<option value='$tgl' $cektgl>$tgl</option>";
}
?>
</select>
-
<select name="cmbBln">
<?php
$bln_sekarang=date('m');
for ($bln=1; $bln <=12 ; $bln++) {
	switch($bln){
		case '1'	: $bulan="Januari"; break;
		case '2'	: $bulan="Februari"; break;
		case '3'	: $bulan="Maret"; break;
		case '4'	: $bulan="April"; break;
		case '5'	: $bulan="Mei"; break;
		case '6'	: $bulan="Juni"; break;
		case '7'	: $bulan="Juli"; break;
		case '8'	: $bulan="Agustus"; break;
		case '9'	: $bulan="September"; break;
		case '10'	: $bulan="Oktober"; break;
		case '11'	: $bulan="November"; break;
		case '12'	: $bulan="Desember"; break;
	}

	# TERPILIH
	if ($bln==$DataBln) {
		$cekbln = " selected";
	}
	else {
		$cekbln = "";
	}

	if (strlen($bln)==1) {
		$bln = "0".$bln;
	}
	else {
		$bln = $bln;
	}
 echo "<option value='$bln' $cekbln>$bulan</option>";

}
?>
</select>
-
<select name="cmbThn">
<?php
if ($thn_maks == ''){
	$thn_maks =date('Y')-7;
}
for ($thn=1975; $thn <= $thn_maks ; $thn++){
	# TERPILIH
	if ($thn==$DataThn) {
		$cekthn = " selected";
	}
	else {
		$cekthn = "";
	}

   echo "<option value='$thn' $cekthn>$thn</option>";
}
?>
</select>
