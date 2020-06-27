<?php
 	$nama		=$_POST['nama'];
 	$alamat		=$_POST['alamat'];
 	$kelamin	=$_POST['kelamin'];
 	$umur 		= isset($_POST['umur']) $_POST['umur'] : null;
 	$username	=$_POST['username'];
 	$password	=$_POST['password'];
 	$re_pass    =$_POST['re_pass'];
 	$file_foto	=$_FILES['foto']['tmp_name'];
 	$nama_foto	=$_FILES['foto']['name'];
 	$errors=array();
 	if($nama == ""){
 		$errors[]= "Nama jangan kosong bre";
 	}
 	if($alamat == ""){
 		$errors[]= "Alamat harus diisi bre";
 	}
 	if($kelamin == null){
 		$erros[]= "Kelamin mu apa woy";
 	}
 	if(is_numeric($umur) && $umur > 17){
 		$errors[]= "Umur harus 17+ (no bocil)";
 	}
 	if(strlen($username) >=7){
 		$errors[]= "Username 7 karakter lebih bre";
 	}
 	if(strlen($password) >=7){
 		$errors[]= "Password 7 karakter lebih bre";
 	}
 	if($re_pass != $password){
 		$errors[]= "Password dan repass kudu sama bre";
 	}
 	if(count($errors)>0){
 		foreach ($errors as $error) {
 			echo "<li>",$error,"<li>";
 		}
 	}else{
 		move_uploaded_file($file_foto, $nama_foto);
 		echo "Nama: ", $nama, "<br>", "Alamat: ", $alamat, "<br>";
 		echo "Kelamin: ", $kelamin, "<br>", "Umur", $umur, "<br>";
 		echo "Usename: ", $username, "<br>";
 		echo "Foto: <img src='$nama_foto'>";
 	}
 ?>