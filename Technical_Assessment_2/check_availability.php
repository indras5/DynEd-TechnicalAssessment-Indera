<?php
include "koneksi.php";

if(!empty($_POST["kode"])) {
	
	// Mengambil data siswa sesuai kode siswa
	$result = mysqli_query($koneksi,"SELECT count(*) FROM siswa WHERE kode_siswa='".$_POST["kode"]."'");
	$row = mysqli_fetch_row($result);
	$user_count = $row[0];
	
	// Mengambil data siswa yang telah menyelesaikan quiz
	$sql_kode = "select count(*) from nilai where kode_siswa='".$_POST["kode"]."'";
	$query_kode = mysqli_query($koneksi, $sql_kode);
	$row_kode = mysqli_fetch_row($query_kode);
	$nilai_count = $row_kode[0];
	
	// Jika siswa telah menyelesaikan quiz
	if($nilai_count>0){
		$result = array(
					"status" => false,
					"text" => "Anda Telah Menyelesaikan Quiz");
	}
	else {
		// Jika siswa telah terdaftar dan memiliki kode unik
		if($user_count>0) {
			$result = array(
					"status" => true,
					"text" => "Anda Terdaftar");
		}else{
			$result = array(
					"status" => false,
					"text" => "Anda Belum Terdaftar");
		}
	}
	
	echo json_encode($result);
}
?>