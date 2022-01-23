<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pembeli</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" value="<?=$data['id']?>"class="form-control" id="" placeholder="ID">
                            </div>
                        </div>
                      <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="" placeholder="Nama">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jeniskelamin" value="<?=$data['jeniskelamin']?>"class="form-control" id="" placeholder="Jenis Kelamin">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" value="<?=$data['nohp']?>"class="form-control" id="" placeholder="No HP">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="" placeholder="Alamat">
                            </div>
                        </div>
                    
                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-edit"></span> Update Data Pembeli</button>
                            </div>
                        </div>
                        </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=pembeli&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Pembeli
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
    $nama=$_POST['nama'];
	$jeniskelamin=$_POST['jeniskelamin'];
    $nohp=$_POST['nohp'];
	$alamat=$_POST['alamat'];
    
    //buat sql
    $sql="UPDATE pembeli SET id='$id',nama='$nama',jeniskelamin='$jeniskelamin',nohp='$nohp',alamat='$alamat' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembeli&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



