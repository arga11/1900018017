<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

<h1>FORM</h1>
<hr>
<form action="regis.php" method="POST" enctype="multipart/form-data">
	Nama: <input type="text" name="nama"><br>
	Foto: <input type="file" name="foto"><br>
	Alamat: <input type="text" name="alamat"><br>
	Kelamin: <input type="radio" name="kelamin" value="Pria">Pria
	<input type="radio" name="kelamin" value="Wanita">Wanita <br>
	Umur: <input type="text" name="umur"><br>
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	Re-Password: <input type="password" name="re_pass"><br>
	<input type="submit" value="Regis">
</form>

</body>
</html>