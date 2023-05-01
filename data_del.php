<?php
//HAPUS
include "3_1_koneksi.php";
$id_pg    = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM tabel_pegawai WHERE id_pg = '$id_pg'");
if ($result){ ?>
	<script language="javascript">
		alert('Berhasil Dihapus');
		document.location.href="3_2_index.php";
	</script>
	<?php
}else {
	trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>