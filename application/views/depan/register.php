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
                <h2 class="title"> Hi! </h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Name</h5>
                        <input type="text" class="input" required="required">
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="div">
                        <h5>telephone</h5>
                        <input type="number" class="input" required="required">
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="div">
                        <h5>Address</h5>
                        <input type="text" class="input" required="required">
                    </div>
                </div>

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
                        <input type="password" class="input" required="required">
                    </div>
                </div>
                <a href="forget.html">Forgot Password?</a>
                <a href="login.html" style="float: left; margin-top:-20px;">Login</a>
                <input type="submit" class="btn" value="Sign up">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/depan/login/') ?>js/main.js"></script>
</body>

</html>