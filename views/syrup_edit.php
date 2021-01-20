<?php
$kode=$_GET['kode'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_syrup WHERE kode='$kode'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Syrup</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode</label>
                             <div class="col-sm-9">
								<input type="text" name="kode" value="<?=$data['kode']?>"class="form-control" id="inputEmail3" placeholder="kode" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_syrup" class="col-sm-3 control-label">Nama Syrup</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_syrup" value="<?=$data['nama_syrup']?>"class="form-control" id="inputEmail3" placeholder="Nama Syrup">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Harga">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" value="<?=$data['stok']?>"class="form-control" id="inputEmail3" placeholder="Stok">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exp_date" class="col-sm-3 control-label">Exp Date</label>
                            <div class="col-sm-9">
                                <input type="text" name="exp_date" value="<?=$data['exp_date']?>"class="form-control" id="inputEmail3" placeholder="Exp Date">
                            </div>
                        </div>
						
						 <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Syrup</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=syrup&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Syrup
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    $kode=$_POST['kode'];
    $nama_syrup =$_POST['nama_syrup'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $exp_date   =$_POST['exp_date'];
    //buat sql
    $sql="UPDATE tbl_syrup   SET kode = '$kode', nama_syrup='$nama_syrup', harga='$harga', stok='$stok', exp_date='$exp_date' WHERE kode='$kode'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=syrup&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



