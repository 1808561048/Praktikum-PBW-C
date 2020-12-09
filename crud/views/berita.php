<?php
    include "../crud/system/koneksi.php";
?>
<h2 style="margin-top: 0;margin-bottom: 0;">Data</h2>
<div class="clearfix"></div>
<hr/>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $no = 1;
                    $tampil = mysqli_query($host, "SELECT * FROM data order by id asc");
                    while ($data = mysqli_fetch_array($tampil)):
            ?>
            <tr>
                <!--Tabel Data-->
                <td><?=$no++?></td>
                <td><?=$data['judul']?></td>
                <td><?=$data['deskripsi']?></td>
                <td><?=$data['tanggal']?></td>
                <td>
                    <a href="data base.php?hal=edit&id=<?=$data['nim']?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <?php
                    // Cek role user
                    if($_SESSION['role'] == 'admin'){ // Jika role-nya admin
                        ?>
                        <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                        <?php
                    }
                    ?>
                </td>
            </tr>
                <?php endwhile; //Penutup While ?> 
        </tbody>
    </table>
</div>
