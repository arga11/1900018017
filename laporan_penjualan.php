<link rel="stylesheet" type="text/css" href="style.css">
<?php  
	echo"<form>";
	echo "<h1 align=center>Laporan</h1>";
	$file = "simpan.txt";
	$fp= fopen($file, "a+");

	while ($nilai=fgets($fp,100)) {
		$hasil = explode("|", $nilai);
		echo "<table border=1 align=center>";
		echo "<tr>
				<td colspan=10 align=center><h2>Laporan Penjualan</h2></td>
			 </tr>";
		echo "<tr>
				<td>No</td>
				<td>Nama Barang : $hasil[0]</td>
				<td>Jenis Barang: $hasil[1]</td>
				<td>Harga Satuan: $hasil[2]</td>
				<td>Jumlah Beli : $hasil[3]</td>
				<td>Total Bayar : $hasil[4]</td>
				<td>Diskon      : $hasil[5]</td>
				<td>Harga 		: $hasil[6]</td>
				<td>Total Setelah Diskon : $hasil[7]</td>
				<td>Bayar 		: $hasil[8]</td>
				<td>Kembalian   : $hasil[9]</td>
			</tr>";
		echo "<tr>
		 		<td colspan=10 align=right><a href=index.php>Data Baru</a></td>
		 	</tr>";
		echo "</table>";
		echo"</form>";
	}

?>
