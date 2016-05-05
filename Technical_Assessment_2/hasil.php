<html>
<head>
</head>
<body>

	<?php
	
		include "koneksi.php";
		
		$kode = $_POST['kode'];
		
		if(!empty($_POST['jawaban'])){
			$jawaban = $_POST['jawaban'];
			
			// Mengambil data siswa
			$sql_nama = "select * from siswa where kode_siswa='$kode'";
			$query_nama = mysqli_query($koneksi, $sql_nama);
			$data_siswa = mysqli_fetch_array($query_nama);
			$nama = $data_siswa['nama'];
			
			// Hitung jawaban benar dan salah
			$benar = 0;
			
			$sql_jlh_soal = "select count(*) from soal";
			$query_jlh_soal = mysqli_query($koneksi, $sql_jlh_soal);
			$data_jlh_soal = mysqli_fetch_row($query_jlh_soal);
			$jlh_soal = $data_jlh_soal[0];
			
			foreach($jawaban as $indeks=>$pilihan) {
				$sql = "select * from soal where id_kuis='$indeks'";
				$query = mysqli_query($koneksi, $sql);
				$data = mysqli_fetch_array($query);
			
				if ($data['kunci'] == $pilihan) {
					$benar++;
				}
			}
		
			$salah = $jlh_soal - $benar;

			// Simpan nilai siswa
			$sql_nilai = "insert into nilai(kode_siswa, jumlah_benar) values ('$kode','$benar')";
			$query_nilai = mysqli_query($koneksi, $sql_nilai);
		
			echo "<h1>Hasil Quiz Anda</h1>";
			echo "Nama : $nama <br />";
			echo "Jumlah Soal : $jlh_soal <br />";
			echo "Jumlah Jawaban Benar : $benar <br />";
			echo "Jumlah Jawaban Salah : $salah";
		}
		else {
			echo "Anda Belum Menjawab Apapun";
		}
	
	?>

</body>
</html>