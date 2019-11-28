<header class="header">
    <div class="header_overlay"></div>
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo">
            <a href="<?= base_url() ?>">
                <div class="d-flex flex-row align-items-center justify-content-start">
                    <div><img src="<?= base_url('assets/depan/') ?>images/round.png" alt="home"></div>
                    <div>DMIQA PARFUM</div>
                </div>
            </a>
        </div>
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="<?= base_url('category') ?>">Category</a></li>
                <li><a href="<?= base_url('member') ?>">Membership </a></li>
                <li><a href="<?= base_url('howto') ?>">how to order</a></li>
                <li><a href="<?= base_url('auth') ?>">Login</a></li>
            </ul>
        </nav>
        <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
            <!-- Search -->
            <div class="header_search">
                <form action="#" id="header_search_form">
                    <input type="text" class="search_input" placeholder="Cari Produk.." required="required">
                    <button class="header_search_button"><img src="<?= base_url('assets/depan/') ?><?= base_url('assets/depan/') ?>images/search.png" alt=""></button>
                </form>
            </div>
            <div class="cart">
                <a href="<?= base_url('pengiriman') ?>">
                    <div>
                        <img src="<?= base_url('assets/depan/') ?>images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
                        <div>
                            0
                        </div>
                    </div>
                </a>
            </div>
            <!-- Phone -->
            <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                <div>
                    <div><img src="<?= base_url('assets/depan/') ?>images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                </div>
                <div>0812-6910-6688</div>
            </div>
        </div>
    </div>
</header>