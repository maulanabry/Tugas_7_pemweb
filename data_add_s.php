<?php
//meminta jembatan koneksi ke database
include "3_1_koneksi.php";
//menerima inputan
$nama_pg           = $_POST['nama_pg'];
$email_pg            = $_POST['email_pg'];
$no_pg            = $_POST['no_pg'];
$jk_pg        = $_POST['jk_pg'];
$alamat_pg        = $_POST['alamat_pg'];
$jabatan       = $_POST['jabatan'];


//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if(  $nama_pg=="" || $email_pg=="" || $no_pg=="" || $jk_pg=="" || $alamat_pg=="" || $jabatan=="")
{
    ?>
    <script language="javascript">
        alert('Masih ada data yang kosong');
        document.location.href="data_add.php";
    </script>
    <?php
}
//input ke tabel db
else
{ //query simpan ke db
    $sql="INSERT INTO tabel_pegawai VALUES (null,'$nama_pg','$email_pg','$no_pg','$jk_pg','$alamat_pg','$jabatan')";

    if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="3_2_index.php";
        </script>
        <?php
    }
}?> <!--tutup php--->