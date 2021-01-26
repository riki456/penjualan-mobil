<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Mobil</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM mobil WHERE id_mobil ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td >Nama Mobil</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Buat</td> <td><?= $data['tgl_buat'] ?></td>
                        </tr>
                        <tr>
                            <td>Merek</td> <td><?= $data['merek'] ?></td>
                        </tr>
						<tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                     
                
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=mobil&actions=tampil" class="btn btn-success btn-sm">
                        Kembali  </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

