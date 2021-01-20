<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Syrup</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_syrup WHERE kode='" . $_GET ['kode'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Stok Obat Apotik Pane Farma Kisaran </h2>
                        <h4>Jl. Prof.H.M. Yamin No.173, Kisaran Timur. Kab.Asahan. Sumatra Utara 21222</h4>
                        <h4>No.Izin Apotek : 503/APOTEK/BPPPM/1269/VII/2015</h4>
                        <h4>No.Izin Praktek Apotek : 441/SIPA-12.08/VI/2.009/2015</h4>
                        <hr>
                        <h3>Data Alkes</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                               
								<tr>
                                    <td>kode</td> <td><?= $data['kode'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Syrup</td> <td><?= $data['nama_syrup'] ?></td>
                                </tr>
								<tr>
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
								<tr>
                                    <td>Stok</td> <td><?= $data['stok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Exp Date</td> <td><?= $data['exp_date'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Nopita Pahlevi,S.Farm,Apt<strong></u><br>

									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>