<div class="content-main">
    <div class="main-header">
        <div class="column-main">
<h4></h4>
</div>


<div class="add-data">
    
    <a class="tambah-data" href="<?php echo base_url(); ?>C_Lomba/addCompetition">TAMBAH DATA</a>

</div>

</div>



        <div class="main-content">
            <table class="tabel-siswa" border="1">
                <tr>
                    <th>ID</th>
                    <th>NAMA LOMBA</th>
                    <th>PENYELENGGARA</th>
                    <th colspan="2">AKSI</th>
                </tr>
                <?php foreach ($competition as $compe) : ?>
                <tr>
                    <td><?= $compe['id'] ?></td>
                    <td><?= $compe['nama_lomba'] ?></td>
                    <td><?= $compe['penyelenggara'] ?></td>
                    <td><a href="<?= base_url(); ?>C_Lomba/edit/<?= $compe['id'] ?>">edit</a></td>
                    <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>C_Lomba/hapus/<?= $compe['id']
                    ?>">hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

