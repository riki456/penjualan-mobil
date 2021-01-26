<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Mobil</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Mobil</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Mobil" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tgl_buat" class="col-sm-3 control-label">Tanggal Buat</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_buat" class="form-control" id="inputEmail3" placeholder="Tanggal Buat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="merek" class="col-sm-3 control-label">Merek</label>
                            <div class="col-sm-9">
                                <input type="text" name="merek" class="form-control" id="inputEmail3" placeholder="Merek" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Harga" required>
                            </div>
                        </div>

				
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=mobil&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama=$_POST['nama'];
	$jenis_mobil=$_POST['tgl_buat'];
	$merek=$_POST['merek'];
	$harga=$_POST['harga'];
 
    //buat sql
    $sql="INSERT INTO mobil VALUES ('','$nama','$jenis_mobil','$merek','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Mobil Error");
    if ($query){
        echo "<script>window.location.assign('?page=mobil&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
