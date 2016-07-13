<!DOCTYPE html>

<html>
    <head>
        <title>Voceria | Promo Voucher Kuliner dan Produk No 1 di Surabaya</title>
        
        <link rel="stylesheet" href="<?= asset('frontend/css/app.css')?>">
        <link rel="stylesheet" href="<?= asset('frontend/css/intlTelInput.css')?>">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>
    <body>
        <div class="top-bar changealertingrefresh ubahputih">
            <div class="container">
                    <div class="col-xs-4">
                        <img src="<?= asset('frontend/images/cs_white.png') ?>" alt="Hot Line" class="hotline-icon"> 
                        <span class="top-phone">089672400820</span>
                    </div>

                    <form action="#" method="post" accept-charset="utf-8">
                        <div class="col-xs-5" class="search-group">
                            <button id="search-button"><img src="<?= asset('frontend/images/search-icon.png') ?>" alt="search-icon"></button>
                            <input type="text" class="form-control search-control pull-left" placeholder="Cari Promo/Lokasi" name="keywords" required>
                        </div>
                    </form>
                    <div class="col-xs-3 login-section">
                        <?php if($session->get('user')) :?>
                            <a href="<?= url('auth/logout')?>" class="account" data-dropdown="account-dropdown"><p class="pull-right"> Logout </p></a><div class="login-icon pull-right"></div>
                            <a href="<?= url('auth/logout')?>" class="account" data-dropdown="account-dropdown"><p class="pull-right"> Transaction </p></a><div class="login-icon pull-right"></div>
                        <?php else: ?>
                            <a href="<?= url('auth/login')?>" class="account" data-dropdown="account-dropdown"><p class="pull-right"> Login </p></a><div class="login-icon pull-right"></div>
                            <a href="<?= url('auth/register')?>" class="account" data-dropdown="account-dropdown"><p class="pull-right"> Register</p></a><div class="login-icon pull-right"></div>
                       <?php endif; ?>       
                </div>
            </div>
        </div>

        <div class="top"></div>
        <span itemscope itemtype="http://schema.org/LocalBusiness">
        <div class="menu changealertingrefresh">
            <div class="container">
                <div class="container dropdown-container">
                    <div class="dropdown-wrapper" id="voucher-dropdown">    
                </ul>

                <div class="pull-right">
                </div>

                <div class="clearfix"></div>
            </div>
        </div>


    </div>

        <div class="col-xs-3 logo"><a href="<?= url('/')?>">
            <h1 class="head-title">Voceria</h1>
            <img itemprop="image" src="<?= asset('frontend/images/logo.png') ?>" alt="Dealjava.com" width="150"></a></div>

            <div class="col-xs-7">
                <ul class="nav-menu pull-right">
                    <li class="nav-list"><a href="<?= url('')?>">Semua Deal</a></li>
                    <li class="nav-list"><a href="#">Voucher</a></li>
                    <li class="nav-list"><a href="<?= url('cart/index')?>">Chart</a></li>
                </ul>
            </div>
        </div>

    <div class="menu-features changealertingrefresh">
        <div class="container features-container">
                <div id="instant-confirmation" class="pull-left">
                    <a href="faq/instan_konfirmasi.html"><div class="menu-feature" ><img src="<?= asset('frontend/images/konfirmasi.png') ?>" alt="Konfirmasi Instan" class="img-features pull-left">
                        <p class="features pull-left">Konfirmasi Instan*</p></div></a>                  
                </div>
                <div id="<?= asset('free-shipping') ?>" class="pull-left">
                    <a href="faq/free_shipping.html"><div class="menu-feature" id="<?= asset('free-shipping') ?>"><img src="<?= asset('frontend/images/pengiriman-gratis.png') ?>" alt="Pengiriman Gratis" class="img-features pull-left">
                        <p class="features pull-left">Pengiriman Gratis*</p></div></a>
                </div>
                <div id="customer-service" class="pull-left">
                    <a href="faq/layanan_pelanggan.html"><div class="menu-feature" id="customer-service"><img src="<?= asset('frontend/images/layanan.png') ?>" alt="Layanan Pelanggan" class="img-features pull-left">
                        <p class="features pull-left">Hubungi Kami 031 547 6886</p></div></a>
                </div>
        </div>
    </div>