<div class="form-container">
    
    <h2>Edit Data</h2>

    <!-- <a class="kembali-btn" href="<?= base_url('C_Pendaftaran') ?>">Kembali</a> -->

    <form action="<?= base_url() ?>C_Pendaftaran/update" method="POST">

    <input type="hidden" name="id_pendaftaran" value="<?= $edit['id_pendaftaran'] ?>">    

    <select name="id_lomba">

        <option value=""> --Pilih Lomba-- </option>
            <?php foreach( $lomba as $lb ) : ?>
                <option value="<?= $lb['id'] ?>"> <?= $lb['nama_lomba'] ?> </option>
            <?php endforeach; ?>
    </select>
    <br><br> 

    <input type="text" placeholder="Nama Pendaftar" name="nama_pendaftar" value="<?= $edit['nama_pendaftar'] ?>"> <br><br>

    <input type="text" placeholder="Kelas" name="kelas" value="<?= $edit['kelas'] ?>"> <br><br>

    <input type="text" placeholder="NO Hp" name="no_hp" value="<?= $edit['no_hp'] ?>"> <br><br>

    <input type="date" placeholder="Tgl Daftar" name="tgl_daftar" value="<?= $edit['tgl_daftar'] ?>"> <br><br>

    <button class="submit-btn" type="submit">Simpan</button>

    
</form>

</div>