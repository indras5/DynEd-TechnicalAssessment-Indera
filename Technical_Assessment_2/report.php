<html>
<head>

</head>
<body>

	<?php
	
		include "koneksi.php";
		
		// Jumlah siswa yang menyelesaikan quiz
		$sql_jlh_siswa = "select count(*) from nilai";
		$query_jlh_siswa = mysqli_query($koneksi, $sql_jlh_siswa);
		$data_jlh_siswa = mysqli_fetch_row($query_jlh_siswa);
		$jlh_siswa = $data_jlh_siswa[0];
		
		// Rata - Rata jawaban benar
		$sql_rata_benar = "select round(avg(jumlah_benar)) from nilai";
		$query_rata_benar = mysqli_query($koneksi, $sql_rata_benar);
		$data_rata_benar = mysqli_fetch_row($query_rata_benar);
		$jlh_rata_benar = $data_rata_benar[0];
		
		// Siswa nilai terkecil
		$sql_siswa_min = "SELECT siswa.nama, nilai.jumlah_benar from siswa, nilai where nilai.kode_siswa=siswa.kode_siswa AND nilai.jumlah_benar=(SELECT min(jumlah_benar) from nilai)";
		$query_siswa_min = mysqli_query($koneksi, $sql_siswa_min);
		$data_siswa_min = mysqli_fetch_array($query_siswa_min);
		$siswa_min = $data_siswa_min['nama'];
		$nilai_siswa_min = $data_siswa_min['jumlah_benar'];
		
		// Siswa nilai terbesar
		$sql_siswa_max = "SELECT siswa.nama, nilai.jumlah_benar from siswa, nilai where nilai.kode_siswa=siswa.kode_siswa AND nilai.jumlah_benar=(SELECT max(jumlah_benar) from nilai)";
		$query_siswa_max = mysqli_query($koneksi, $sql_siswa_max);
		$data_siswa_max = mysqli_fetch_array($query_siswa_max);
		$siswa_max = $data_siswa_max['nama'];
		$nilai_siswa_max = $data_siswa_max['jumlah_benar'];
		
		// Nilai standard deviasi
		$sql_std_dev = "select stddev(jumlah_benar) from nilai";
		$query_std_dev = mysqli_query($koneksi, $sql_std_dev);
		$data_std_dev = mysqli_fetch_row($query_std_dev);
		$nilai_std_dev = $data_std_dev[0];
		
		echo "<h1>Report Quiz Biologi</h1>";
		
		echo "Jumlah Siswa : $jlh_siswa <br />";
		echo "Nilai Rata - Rata Benar : $jlh_rata_benar <br />";
		echo "Siswa Nilai Terkecil : $siswa_min (Jumlah Benar = $nilai_siswa_min)<br />";
		echo "Siswa Nilai Terbesar : $siswa_max (Jumlah Benar = $nilai_siswa_max)<br />";
		echo "Nilai Standard deviasi : $nilai_std_dev";
	
	?>

</body>
</html>