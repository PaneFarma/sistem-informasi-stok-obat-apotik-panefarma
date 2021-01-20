<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data tablet</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode tablet</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Inputkan Kode tablet" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_tablet" class="col-sm-3 control-label">Nama tablet</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_tablet" class="form-control" id="inputEmail3" placeholder="Inputkan Nama tablet" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok tablet</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="inputEmail3" placeholder="Inputkan Stok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exp_date" class="col-sm-3 control-label">Exp Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="exp_date" class="form-control" id="inputEmail3" placeholder="Inputkan Exp Date" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span>Simpan Data</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <div class="panel-footer">
                    <a href="?page=tablet&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data tablet
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kode=$_POST['kode'];
    $nama_tablet=$_POST['nama_tablet'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $exp_date=$_POST['exp_date'];
    //buat sql
    $sql="INSERT INTO tbl_tablet VALUES ('$kode','$nama_tablet','$harga','$stok','$exp_date')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan tablet  Error");
    if ($query){
        echo "<script>window.location.assign('?page=tablet&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
