<!DOCTYPE html>
<html>
<head>
 <!-- TABLE STYLES-->
 <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
 <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
    <br><br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="alert alert-warning">
                <a href="3_2_index.php" class="btn btn-danger"><i class="glyphicon glyphicon-file"></i> Lihat Data</a>
            </div>
        </div>
        <?php
        include '3_1_koneksi.php';
        $id_pg    = $_GET['id_pg'];
        $result = mysqli_query($koneksi, "SELECT * FROM tabel_pegawai WHERE id_pg='$id_pg'");
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="panel-body">
            <form method="post" action="data_edit_s.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id</label>
                    <input class="form-control" name='id_pg' value="<?php echo $row['id_pg'];?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name='nama_pg' value="<?php echo $row['nama_pg'];?>" placeholder="Contoh: Budi" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name='email_pg' value="<?php echo $row['email_pg'];?>"  required>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" name='no_pg' value="<?php echo $row['no_pg'];?>"  required>
                </div>
                     <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input class="form-control" name='jk_pg' value="<?php echo $row['jk_pg'];?>"  required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name='alamat_pg' value="<?php echo $row['alamat_pg'];?>"  required>
                </div>
                   <div class="form-group">
                    <label>Jabatan</label>
                    <input class="form-control" name='jabatan' value="<?php echo $row['jabatan'];?>"  required>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-default"><i class="fa fa-file-text"></i> Bersih</button>
            </form>
        </div>  
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>