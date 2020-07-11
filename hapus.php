<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Hapus nilai Member</title>
</head>
<body>
	<div class="dalam">
	<form method="POST">
		<center>
		<table>
			<h1>Hapus Laporam</h1>
			<tr>
				<td>Apakah Anda Ingin Menghapus Laporan?</td>
			</tr>
			<tr>
				<td align="center"><button type="submit" value="Ya" name="Ya">Ya</button></td><br>
			</tr>
			<tr>
				<td align="center"><a href="index.php">Tidak</a></td>
			</tr>
		</table>
		<br/>
		<?php
			if (isset($_POST['Ya'])) {
			$submit = $_POST['Ya'];

			if ($submit=="Ya") {
				$file = "simpan.txt";
				$fl = fopen($file, "r+");

				$fl = fopen($file, "w+");
				$nilai=null;

				fwrite($fl, $nilai, strlen($nilai));
				fclose($fl);
			}
			echo "Data Sudah Terhapus<br>";
			echo '<a href=index.php>Kembali Ke Form</a>';
			}
		?>
		</center>
	</form>

</body>
</html>
</div>
