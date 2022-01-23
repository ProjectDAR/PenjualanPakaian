<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Barang</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>ID</th><th>Nama Barang</th><th>Stok</th><th>Merk</th><th>Harga</th><th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM barang";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['id'] ?></td>
									<td><?= $data['namabarang'] ?></td>
									<td><?= $data['merk'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td>
                                    <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                        <a href="?page=barang&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"> Detail</span>
                                        </a>
                                        <a href="?page=barang&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"> Edit</span>
                                        </a>
                                        <a href="?page=barang&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"> Delete</span>
                                        </a>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr><?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                <td colspan="7">
                                    <a href="?page=barang&actions=tambah" class="btn btn-primary">
                                        Tambah Data Barang

                                    </a>
                                </td>
                                <?php } ?>
                            </tr>
                        </tfoot>                                               
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
