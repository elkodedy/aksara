<?php 

	$koneksi->query("DELETE FROM pembimbing WHERE id_pembimbing = '$_GET[id]'");

	echo "<script>alert('BERHASIL, Data Telah di Hapus');</script>";
	echo "<script>location='index.php?halaman=pembimbing';</script>";

 ?>