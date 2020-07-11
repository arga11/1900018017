<link rel="stylesheet" type="text/css" href="style.css">
<?php
	$fp			= fopen("simpan.txt","a+"); 
	$nama_barang 	= $_POST['nama_barang'];
	$jenis_barang 	= $_POST['jenis_barang'];
	$harga_satuan 	= $_POST['harga_satuan'];
	$jumlah_beli 	= $_POST['jumlah_beli'];
	$total_bayar 	= $_POST['total_bayar'];
	$diskon 		= substr($_POST['diskon'],6);
	$setelah_diskon = $_POST['setelah_diskon'];
	$bayar 			= $_POST['bayar'];
	$kembalian 		= $_POST['kembalian'];

	fputs($fp, "$nama_barang|$jenis_barang|$harga_satuan|$jumlah_beli|$diskon|$setelah_diskon|$bayar|$kembalian");
	fclose($fp);
	echo "<center>";
	echo "<h2>Menyimpan data BERHASIL</h2>";
	echo '<a href=index.php>Kembali ke Form</a>';
	echo "</center>";
 ?>
