<?php
function kdauto($tabel, $inisial){
	include "inc.koneksidb.php";

	$struktur	= mysql_query("SELECT * FROM $tabel", $koneksi);
	$field		= mysql_field_name($struktur,0);
	$panjang	= mysql_field_len($struktur,0);

 	$qry	= mysql_query("SELECT max(".$field.") FROM ".$tabel, $koneksi);
 	$row	= mysql_fetch_array($qry);
 	if ($row[0]=="") {
 		$angka=0;
	}
 	else {
 		$angka		= substr($row[0], strlen($inisial));
 	}

 	$angka++;
 	$angka	=strval($angka);
 	$tmp	="";
 	for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";
	}
 	return $inisial.$tmp.$angka;
}

function kdsoalStatisAuto($inisial){
	include "inc.koneksidb.php";
	$Result = mysql_query("select COUNT(kd_soal_statis) as kdSoalStatis FROM soal
								  where LEFT(kd_soal_statis,3) = '".$inisial."'
								  order by kdSoalStatis desc
								  limit 1
								 ", $koneksi);

	$struktur	= mysql_query("SELECT kd_soal_statis FROM soal limit 1", $koneksi);
	$field		= mysql_field_name($struktur,0);
	$panjang		= mysql_field_len($struktur,0);

	$Data1 = mysql_fetch_array($Result);

	$angka = $Data1['kdSoalStatis'];

 	$angka++;

 	$angka	=strval($angka);
 	$tmp	="";
 	for($ji=1; $ji<=($panjang-strlen($inisial)-strlen($angka)); $ji++) {
		$tmp=$tmp."0";
	}

	return $inisial.$tmp.$angka;

}


// Konvesi dd-mm-yyyy -> yyyy-mm-dd
function tgl_ind_to_eng() {
	$tgl_eng=substr($tgl,6,4)."-".substr($tgl,3,2)."-".substr($tgl,0,2);
	return $tgl_eng;
}

// Konvesi yyyy-mm-dd -> dd-mm-yyyy
function tgl_eng_to_ind($tgl) {
	$tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
	return $tgl_ind;
}

// Konvesi yyyy-mm-dd -> dd-mm-yyyy
function tgl_eng_to_ind2($tgl) {
	$bulan['01'] = "Januari";
	$bulan['02'] = "Februari";
	$bulan['03'] = "Maret";
	$bulan['04'] = "April";
	$bulan['05'] = "Mei";
	$bulan['06'] = "Juni";
	$bulan['07'] = "Juli";
	$bulan['08'] = "Agustus";
	$bulan['09'] = "September";
	$bulan['01'] = "Oktober";
	$bulan['11'] = "November";
	$bulan['12'] = "Desember";

	$bln = substr($tgl,5,2);
	$tgl_ind=substr($tgl,8,2)."  ".$bulan[$bln]."  ".substr($tgl,0,4);
	return $tgl_ind;
}

function format_angka($angka) {
	$hasil =  number_format($angka,0, ",",".");
	return $hasil;
}

class saring_data{
	function dataInput($str){
////		$str = Strip_Tags($str);
//			$str = str_replace('"','&quot;',$str);
//			$str = str_replace("'",'&acute;',$str);

		$str = Strip_Tags(mysql_escape_string($str));
		return $str;
	}
	function dataInputSession($str,$name){
		$_SESSION[$name] = $str;
		$str = Strip_Tags(mysql_escape_string($str));
		return $str;
	}
	function dataTerlarang($str){
		$found = ereg("[(*.+?)|']", $str); // will be true
		if ($found){
			header("LOCATION:?errcode=2");
			exit();
		}
	}
	function dataEmpty($str,$arg){
		if ($str == ''){
			echo "Sorry $arg is empty";
			exit();
		}
	}
	function IsInt($i){
		$i = str_replace(",","",$i);
		$i = str_replace(".","",$i);
		return $i;
	}
	function ubahData($i,$j){
		if ($i == ''){
			$i = $j;
		}
		return $i;
	}
	function checkEmail($email){
    	return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);
	}

}
class random_string{
	function randomIT(){
		$keychars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$length = rand(13,40);
		// RANDOM KEY GENERATOR
		$randkey = "";
		for ($ii=0;$ii<$length;$ii++){
			$randkey .= substr($keychars, rand(1, strlen($keychars) ), 1);
		}
//			$randkey1 = strtolower(substr($randkey, 0, 10));
		$randkey1 = substr($randkey, 0, 10);
		return $randkey1;
	}
}

class c_function {
	function GenerateCode($intCnt, $strPrefix, $strTable, $strFieldID){
		$Year = date ("y");
		$Month = date ("m");

		$Code = $strPrefix . $Year . $Month ;

		if ($Cnt < 10) $Code = $Code . "00" . $intCnt;
		if ($Cnt >= 10 && $Cnt_po < 100) $Code = $Code . "0" . $intCnt;
		if ($Cnt >= 100 && $Cnt_po < 1000) $Code = $Code . $intCnt;

		$Result=mysql_query("SELECT * FROM $strTable WHERE $strFieldID = '$Code' ");
		$Data = mysql_fetch_array($Result);

		if ($Data[$strFieldID] != "" && $Data[$strFieldID] != " ")
		return GenerateCode($intCnt + 1, $strPrefix, $strTable, $strFieldID);
		else // cannot find other do
		return $Code;
	}
	function Qsql_data_exist($wHere, $fieLd, $tabLe){
		$Result = mysql_query("SELECT $fieLd FROM $tabLe WHERE $wHere limit 1");
		$Data1 = mysql_fetch_array($Result);
      if ($Data1){
      	return true;
      }else{
      	return false;
      }
	}
	function Qsql_increment($fieLd, $tabLe, $dtBase){
		$Result=mysql_query("SELECT max($fieLd) FROM $dtBase.$tabLe");
		$Data1 = mysql_fetch_array($Result);

		$Data2 = $Data1[0] + 1;

		return $Data2;
	}
	function Qsql_count($fieLd, $tabLe, $dtBase, $dtWhere){
		$Result=mysql_query("SELECT count($fieLd) FROM $dtBase.$tabLe $dtWhere");
		$Data1 = mysql_fetch_array($Result);

		return $Data1[0];
	}
	function cek_session(){
		if (($_SESSION['prisa_user_name']=='') || $_SESSION['prisa_user_pass']==''){
			session_destroy();
			header("LOCATION:?errcode=12");
		}
      $user = $_SESSION['prisa_user_name'];
      $pass = $_SESSION['prisa_user_pass'];

		$ceksess = mysql_query("SELECT user_id FROM prisa.t_user WHERE user_id='$user' AND password='$pass' ");
		$rowsess = mysql_fetch_array($ceksess);
		if ($rowsess[0] == ''){
			session_destroy();
			header("LOCATION:?errcode=12");
		}
	}
	function Qtable_DOM($param, $from, $where, $order, $desasc){
      $sql_ss=mysql_query("SELECT $param FROM $from $where ORDER BY $order $desasc");
      $len_ss = mysql_num_rows($sql_ss);
		$t .= '[';
		for ($ii=0;$ii<$len_ss;$ii++){
			$row_ss = mysql_fetch_array($sql_ss);
			if ($ii != ($len_ss-1)){
				$t .= "'".trim($row_ss[0])."',";
			}else{
				$t .= "'".trim($row_ss[0])."'";
			}
		}
		$t .= ']';
		return $t;
	}
	function Select($nameid,$matching,$sql,$val_first = '---',$optional = '',$onc = ''){
		echo "<select name=\"$nameid\" id=\"$nameid\" $onc>";
		if ($val_first != 1)
		echo "<option value=''>$val_first</option>";
			$sql = mysql_query($sql);
			while ($row_insurance = mysql_fetch_array($sql)){
				if ($matching == $row_insurance[0]){$sel = "selected";}else{$sel = "";}
				echo "<option value='$row_insurance[0]' $sel >$row_insurance[1]</option>";
			}
			if ($optional != ''){
				$optionals = explode("~",$optional);
				echo "<option value='$optionals[0]' >$optionals[1]</option>";
			}
		echo "</select>";
	}

	function Select_noSQL($arrJ,$arrJS,$SESSion){
		for ($i=0;$i<count($arrJ);$i++){
			if (strtolower($SESSion) == (strtolower($arrJ[$i]))){
				$sel = "selected";
			}else{
				$sel = "";
			}
			?><option label="<?=$arrJS[$i];?>" value="<?=$arrJ[$i];?>" <?=$sel;?> ><?=$arrJS[$i];?></option><?php
		}
	}
	function Option_noSQL($nameid, $str1,$str2,$SESSion){
		for ($i=0;$i<count($str2);$i++){
			if ($SESSion == $str1[$i]){
				$sel = "checked";
			}else{
				$sel = "";
			}
			echo "<label><input type=radio name=\"$nameid\" id=\"$nameid\" $sel value=\"$str1[$i]\">$str2[$i]</label>";
		}
	}
	function random_string(){
		$keychars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$length = rand(13,40);
		// RANDOM KEY GENERATOR
		$randkey = "";
		for ($ii=0;$ii<$length;$ii++){
			$randkey .= substr($keychars, rand(1, strlen($keychars) ), 1);
		}
		$randkey1 = substr($randkey, 0, 10);
		return $randkey1;
	}
	function putar_tanggal($tanggal){
		$array = split('-', $tanggal);
		if(strlen($array[0]) < 2){$array[0]='0'.$array[0];}
		if(strlen($array[1]) < 2){$array[1]='0'.$array[1];}
		return $array[2].'-'.$array[1].'-'.$array[0];
	}
	function putar_tanggal2($tanggal){
		$splita = split(' ',$tanggal);
		$array = split('-', $splita[0]);
      if($array[0]=="0000")return "";
		return $array[2].'-'.$array[1].'-'.$array[0].' '.$splita[1];
	}
	function tanggal_jam($tanggal){
		$splita = split(' ',$tanggal);
		$tmp = split('-',$splita[0]);
		$tanggal = $tmp[2].'-'.$tmp[1].'-'.$tmp[0];
   	$splitb = split(':',$splita[1]);

   	return array($tanggal, $splitb[0], $splitb[1]);
	}
	function split_tanggal_jam($tanggal){
	  $splita = split(' ',$tanggal);
	  $tmp = split('-',$splita[0]);
	  $tanggal = $tmp[2].'-'.$tmp[1].'-'.$tmp[0];
	  return $tanggal;
	}
	function callJS($n){
     //
	}
	function findfirst($str1,$str2,$str3){
	}
}

class table{
	function HeaderTable($attribute,$nameID,$BGcolor='#cccccc'){
		echo "<table $attribute >";
		echo "<tr>";
		echo "<td bgcolor=$BGcolor>";
		echo "<table cellpadding=4 cellspacing=1 width=100% border=0 $nameID > ";
		echo "<tr>";
	}
	function addField($str,$class,$args = ''){
		echo '<td class="'.$class.'" '.$args.' >';
		echo $str;
		echo '</td>';
	}
	function newRow($args = ''){
		echo "</tr><tr $args>";
	}
	function FooterTable(){
		echo "</tr>";
		echo "</table>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
}



?>