<!-- <a class="kembali-btn" href="<?= base_url('C_Pendaftaran') ?>">Kembali</a> -->

<div class="form-container">
    
<h2>TAMBAH DATA SISWA</h2>


<form action="C_tambahPendaftaran/tambah" method="post">

        <select name="id_lomba">
            <option value="">-- Pilih --</option>
            <?php foreach ($registration as $al) : ?>
                <option value="<?= $al['id'] ?>"> <?= $al['nama_lomba'] ?> </option>
            <?php endforeach; ?>
        </select> <br> <br>

        <input placeholder="Nama" type="text" name="name" required> <br> <br>

        <input placeholder="Kelas" type="text" name="class" required> <br> <br>
 
       <input placeholder="No Tlp" type="text" name="no_hp" required> <br> <br>

        <input placeholder="Date" type="date" name="tgl_daftar" required> <br> <br>

        <button class="submit-btn" type="submit">Simpan</button>

</form>

</div>