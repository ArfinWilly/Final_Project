<!-- <a href="<?= base_url('C_Lomba') ?>">Kembali</a> -->

<div class="form-container">

    <h2>Edit Data</h2>

    <form action="<?= base_url() ?>C_Lomba/update" method="POST">

        <input type="hidden" name="id" value="<?= $edit['id'] ?>">

        <input type="text" placeholder="nama lomba" name="lomba" value="<?= $edit['nama_lomba'] ?>"> <br><br>

        <input type="text" placeholder="nama penyelenggara" name="name" value="<?= $edit['penyelenggara'] ?>"> <br><br>

        <button class="submit-btn" type="submit">Simpan</button>

    </form>

</div>