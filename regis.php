<?php 
	require_once "koneksi.php"


	if (isset($_POST['register'])) {
		if (regis($_POST) > 0) {
			echo "<script>
					alert('User baru berhasi ditambah!);
					</script>";
		} else {
			echo mysql_error($conn);
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	
	<h1>Registrasi</h1>

	<form action=""  method="post">
		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi Password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">Register!</button>
			</li>
		</ul>
	</form>
</body>
</html>