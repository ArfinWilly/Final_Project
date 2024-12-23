<div class="login-container">

    <h2>Sign Up</h2>

    <form action="<?= base_url() ?>Sign/simpan" method="POST">

        <input type="text" name="username" placeholder="Masukan Username"><br>
        
        <input type="text" name="name" placeholder="Masukan Nama"><br>

        <input type="password" name="password" placeholder="Masukan Password" ><br>

        <input type="submit" value="Simpan">
        
    </form>

    <div class="footer">
        <p>Sudah punya akun? ayo <a href="<?= base_url() ?>Login">Login</a> </p>
    </div>

</div>