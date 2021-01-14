<?php 

	$koneksi->query("DELETE FROM pendidik WHERE id_pendidik = '$_GET[id]'");

	echo "<script>alert('BERHASIL, Data Telah di Hapus');</script>";
	echo "<script>location='index.php?halaman=tenaga_pendidik';</script>";

 ?>