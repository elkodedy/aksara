<?php 

	$koneksi->query("DELETE FROM struktur_lembaga WHERE id_struktur = '$_GET[id]'");

	echo "<script>alert('BERHASIL, Data Telah di Hapus');</script>";
	echo "<script>location='index.php?halaman=struktur_lembaga';</script>";

 ?>