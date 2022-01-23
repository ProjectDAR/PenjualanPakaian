<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" class="form-control" id="" placeholder="Inputkan ID">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namabarang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="namabarang" class="form-control" id="" placeholder="Inputkan Nama Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="" placeholder="Inputkan Stok">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="merk" class="col-sm-3 control-label">Merk</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" class="form-control" id="" placeholder="Inputkan Merk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="" placeholder="Inputkan Harga">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-save"></span> Simpan Data Barang</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id=$_POST['id'];
    $namabarang=$_POST['namabarang'];
    $stok=$_POST['stok'];
    $merk=$_POST['merk'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="INSERT INTO barang VALUES ('$id','$namabarang','$stok','$merk','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Barang Error");
    if ($query){
        echo "<script>window.location.assign('?page=barang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
