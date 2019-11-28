<!DOCTYPE html>
<html>

<head>
    <title>Dmiqa Perfume</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/login/') ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
    <img class="wave" src="<?= base_url('assets/depan/login/') ?>img/tes.png">
    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/depan/login/') ?>img/tes2.png">
        </div>
        <div class="login-content">
            <form action="index.html">
                <img src="<?= base_url('assets/depan/login/') ?>img/round.png">
                <h2 class="title" style="margin: 15px 0px;">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" class="input" required="required">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <a href="<?= base_url('forget-password') ?>" style="margin-top:20px;">Forgot Password?</a>
                <a href="<?= base_url('registrasi') ?>" style="float: left; margin-top:-20px;">Sign Up</a>
                <a href="../index.html" style="float: left; font-size: 20px; margin-top:15px; margin-left:-55px;">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
                <input type="submit" class="btn" value="Login" style="margin-top:50px;">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/depan/login/') ?>js/main.js"></script>
</body>

</html>