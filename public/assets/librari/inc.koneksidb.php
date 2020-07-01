<?php
// $my['host'] 	= "localhost";
// $my['user']	= "investa_user";
// $my['pass']	= "&*AS-learn%$";
// $my['dbs']	= "investa_dblearning";

// //$koneksi	= mysql_connect($my['host'], $my['user'], $my['pass']);
// $koneksi	= mysql_connect('localhost', 'root', '');
// if (! $koneksi) {
//   echo "Gagal Koneksi ";
//   mysql_error();
// }
// // memilih database pda server
// mysql_select_db($my['dbs'])  or die ("Database Tidak Ada".mysql_error());

$koneksi = mysqli_connect("localhost","root","","investa_dblearning");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
