<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pembeli</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pembeli WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Buku</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Penulis/Laci</td> <td><?= $data['jeniskelamin'] ?></td>
                        </tr>
						<tr>
                            <td>Penerbit</td> <td><?= $data['nohp'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pembeli&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pembeli </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

