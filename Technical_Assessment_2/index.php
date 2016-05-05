<html>
<head>
<script src="jquery.min.js" type="text/javascript"></script>
<script>
	// Cek apakah kode siswa telah terdaftar atau telah menyelesaikan quiz
	function checkAvailability() {
		jQuery.ajax({
		url: "check_availability.php",
		data:'kode='+$("#kode").val(),
		type: "POST",
		dataType:"JSON",
		success:function(data){
			$("#kode-availability-status").html(data.text);
			if(data.status==true){
				$("#submit").attr("disabled", false);
			}
			else {
				$("#submit").attr("disabled", true);
			}
		},
		error:function (){}
		});
	}
</script>
</head>
<body>
	<h1>Quiz Biologi</h1>

	<?php
		include "koneksi.php";
		
		// Mengambil data soal
		$sql = "select * from soal order by id_kuis";
		$query = mysqli_query($koneksi, $sql);
		
		$no = 0;
		echo "<form name='form_quiz' method='post' action='hasil.php'> ";
		echo "Kode Siswa : <input name='kode' type='text' id='kode' onBlur='checkAvailability()'> <span id='kode-availability-status'></span><br /><br />";
		
		while ($data=mysqli_fetch_array($query)) {
		
			$no++;
			
			echo "$no. $data[soal] <br />";
			echo "A.<input type='radio' value='A' name='jawaban[$data[id_kuis]]'>";
				echo "$data[pilihan_a] <br />";
				
			echo "B.<input type='radio' value='B' name='jawaban[$data[id_kuis]]'>";
				echo "$data[pilihan_b] <br />";
				
			echo "C.<input type='radio' value='C' name='jawaban[$data[id_kuis]]'>";
				echo "$data[pilihan_c] <br />";
				
			echo "D.<input type='radio' value='D' name='jawaban[$data[id_kuis]]'>";
				echo "$data[pilihan_d] <br /><br />";				
		}
		
		echo "<input id='submit' type='submit' name='submit' value='Selesai' disabled>";
		echo "</form>";
	?>
</body>

</html>