<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dmiqa perfume</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dmiqa perfume">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="<?= base_url() ?>assets/portal/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/portal/styles/responsive.css">
    <link rel="shortcut icon" type="<?= base_url() ?>assets/portal/image/x-icon" href="dmiqa.ico">
</head>

<body>
    <?php echo $menu; ?>
    <?php echo $header; ?>

    <?php
    if ($this->uri->segment(1) != 'portal' && $this->uri->segment(1) != 'category' && $this->uri->segment(1) != 'cart' && $this->uri->segment(1) != 'underconstruction' && $title != 'Page Not Found') {
        echo $slider;
    }
    ?>
    <?php echo $content; ?>
    <?php
    if ($this->uri->segment(1) != 'portal' && $this->uri->segment(1) != 'category' && $this->uri->segment(1) != 'cart' && $this->uri->segment(1) != 'underconstruction' && $title != 'Page Not Found') {
        echo $boxes;
        echo $features;
    }
    ?>
    <?php echo $footer; ?>


    </div>
    </div>

    <script src="<?= base_url() ?>assets/portal/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/styles/bootstrap-4.1.2/popper.js"></script>
    <script src="<?= base_url() ?>assets/portal/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/greensock/TweenMax.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/easing/easing.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/progressbar/progressbar.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/portal/plugins/Isotope/fitcolumns.js"></script>
    <script src="<?= base_url() ?>assets/portal/js/category.js"></script>
</body>

</html>