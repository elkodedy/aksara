<?php 

	$koneksi->query("DELETE FROM video_youtube WHERE id_video = '$_GET[id]'");

	echo "<script>alert('BERHASIL, Data Telah di Hapus');</script>";
	echo "<script>location='index.php?halaman=video';</script>";

 ?>