<?= $this->session->flashdata('message') ?>

<div class="login-container">

    <h2>Login Page</h2>

    <!-- <link rel="stylesheet" href="login.css"> -->

    <form action="<?= base_url() ?>Login/verifikasi" method="POST">

        <input type="text" name="username" placeholder="Username"> <br>

        <input type="password" name="password" placeholder="Password"> <br>

        <input type="submit" value="Login">

    </form>

    <br>

    <div class="footer">
        <p>Belum punya akun? ayo <a href="<?= base_url() ?>Sign">Daftar</a> </p>
    </div>

</div>