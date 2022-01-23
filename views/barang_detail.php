<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM barang WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['namabarang'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td> <td><?= $data['stok'] ?></td>
                        </tr>
						<tr>
                            <td>Merk</td> <td><?= $data['merk'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Barang </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

