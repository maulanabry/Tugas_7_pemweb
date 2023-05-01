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
        <div class="panel-body">
            
            <form method="post" action="data_add_s.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name='nama_pg' required placeholder="Contoh: Budi" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name='email_pg' required>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" name='no_pg' required>
                </div>
                     <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input class="form-control" name='jk_pg' required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name='alamat_pg' required>
                </div>
                   <div class="form-group">
                    <label>Jabatan</label>
                    <input class="form-control" name='jabatan' required>
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
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

</body>
</html>