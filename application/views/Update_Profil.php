
<div class="form-container">
    
<h2>Edit Profil</h2>

<!-- <a class="kembali-btn" href="<?= base_url('Profil') ?>">Kembali</a> -->

<?php if(isset($user)) : ?>

<form action="<?= base_url(); ?>C_Profile/updateUser" method="post">
    
    <input type="hidden" name="id" value="<?= $user['id'] ?>">

    <input type="text" placeholder="Username" name="username" value="<?= $user['username'] ?>"> <br><br>

    <input type="text" placeholder="Nama" name="nama" value="<?= $user['name'] ?>"> <br><br>

    <input type="password" placeholder="password" name="password" value="<?= $user['password'] ?>"> <br><br>

    <button class="submit-btn" type="submit">Simpan</button>

</form>

<?php else : ?>
    <p>Data Pengguna tidak di temukan</p>
<?php endif ; ?>

</div>