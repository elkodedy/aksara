<?php 

	$koneksi->query("DELETE FROM tenaga_kependidikan WHERE id_kependidikan = '$_GET[id]'");

	echo "<script>alert('BERHASIL, Data Telah di Hapus');</script>";
	echo "<script>location='index.php?halaman=tenaga_kependidikan';</script>";

 ?>