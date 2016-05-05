<html>
<head>
</head>
<body>
	
	<div id="container">
		<h1>LOGIN</h1>
 
		<div id="body">		
			<?php echo form_open('login/aksi') ?>
			<table>				
				<tr>
					<td>Username</td><td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Password</td><td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Login"></td>
				</tr>				
			</table>
		</form>
 
	</div>
</div>
 
 
</body>
</html>