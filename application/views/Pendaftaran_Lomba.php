<div class="content-main">
    <div class="main-header">
    <h4></h4>
<div class="add-data">
    
    <a href="<?php echo base_url('C_tambahPendaftaran'); ?>"
    class="tambah-data">TAMBAH DATA</a>

</div>

</div>

<div class="main-content">
    <table class="table" border="1">
        <tr>
            <th>ID</th>
            <th>NAMA LOMBA</th>
            <th>NAMA PENDAFTAR</th>
            <th>KELAS</th>
            <th>NO HP</th>
            <th>TANGGAL DAFTAR</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($p as $lb) : ?>
        <tr>
            <td><?= $lb['id_pendaftaran'] ?></td>
            <td><?= $lb['nama_lomba'] ?></td>
            <td><?= $lb['nama_pendaftar'] ?></td>
            <td><?= $lb['kelas'] ?></td>
            <td><?= $lb['no_hp'] ?></td>
            <td><?= format_indo($lb['tgl_daftar']) ?></td>
            
            <td><a href="<?= base_url(); ?>C_Pendaftaran/edit/<?= $lb['id_pendaftaran'] ?>">edit</a></td>
            
            <td><a onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>C_Pendaftaran/delete/<?= $lb['id_pendaftaran'] ?>">hapus</a></td>
        </tr>
        <?php endforeach; ?>

</table>
</div>
</div>
</div>
