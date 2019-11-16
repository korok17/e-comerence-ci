<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dmiqa Perfume</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dmiqa Perfume">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="<?= base_url('assets/depan/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
    <?php if ($this->uri->segment(1) == 'category') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/category.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/category_responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'account') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/account.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'cart') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/cart.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'comfirmation') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/confirmation.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'howto') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/howto.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'member') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/member.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'contact') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'pengiriman') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/pengiriman.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'bibit') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/bibit.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'product') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/product.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/product_responsive.css">
    <?php endif; ?>
    <?php if ($this->uri->segment(1) == 'checkout') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/checkout.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/depan/') ?>styles/checkout_responsive.css">
    <?php endif; ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/depan/') ?>dmiqa.ico">
</head>

<body>

    <!-- menu -->
    <?= $menu; ?>
    <!-- end menu -->
    <!-- header -->
    <?= $header; ?>
    <!-- end header -->
    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->
        <!-- end home -->
        <!-- Products -->
        <?= $content; ?>
        <!-- end produk -->
        <!-- footer -->
        <?= $footer; ?>
        <!-- end footer -->

    </div>

    </div>

    <script src="<?= base_url('assets/depan/') ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>styles/bootstrap-4.1.2/popper.js"></script>
    <script src="<?= base_url('assets/depan/') ?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/greensock/TweenMax.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/easing/easing.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/progressbar/progressbar.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/parallax-js-master/parallax.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/depan/') ?>plugins/Isotope/fitcolumns.js"></script>
    <script src="<?= base_url('assets/depan/') ?>js/category.js"></script>
    <?php if ($this->uri->segment(2) != 'category') : ?>

        <script src="<?= base_url('assets/depan/') ?>js/custom.js"></script>
        <script src="<?= base_url('assets/depan/') ?>js/cart.js"></script>
        <script src="<?= base_url('assets/depan/') ?>js/product.js"></script>
        <script src="<?= base_url('assets/depan/') ?>js/checkout.js"></script>


    <?php endif; ?>
</body>

</html>