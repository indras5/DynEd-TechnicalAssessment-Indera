<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "quiz";
	
	// Koneksi ke database
	$koneksi = mysqli_connect($host, $user, $pass, $database) or die ("koneksi gagal".mysqli_error());

?>