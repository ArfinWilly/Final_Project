<!-- <a class="kembali-btn" href="<?= base_url('C_Lomba') ?>">Kembali</a> -->

<div class="form-container">
        
<h2>TAMBAH DATA LOMBA</h2>

<form action="<?= base_url() ?>C_Lomba/simpan" method="post">

        <input placeholder="Lomba" type="text" name="lomba" required> <br> <br>

        <input placeholder="Nama Penyelenggara" type="text" name="name" required> <br> <br>

        <button class="submit-btn" type="submit">Simpan</button>

</form>

</div>