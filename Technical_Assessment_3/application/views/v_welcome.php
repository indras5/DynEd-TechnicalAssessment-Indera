<html>
<head>
</head>
<body>
 
	<div id="container">
		
		<h1>
			<?php
			echo anchor('welcome/logout','Keluar');
			?>
		</h1>
 
		<div id="body">
				<?php
			if(isset($username)){
				echo "hai SELAMAT DATANG ,".$username." !! <br />
				Berikut merupakan daftar member dari beberapa institusi : <br /><br />";
				
				$institusi='';
				
				foreach($data_member as $lihat){
				
					if($lihat->institusi!=$institusi){
					
						echo "Nama Institusi : ".$lihat->institusi."<br />";
						$institusi=$lihat->institusi;
						?>
						<table border=1>
							<tr><th>Nama Member</th></tr>
						<?php
						foreach($data_member as $nama) {
							if($nama->institusi==$institusi) {
								?>
								<tr><td><?php echo $nama->nama; ?><tr></td>
								<?php
							}
						}
						?>
						</table><br /><br />
						<?php
					}
				}
			}else{
				redirect('login/');
			}
			?>
 
		</div>
 </div>
 
</body>
</html>