<?php
include "admin/php/main.php";
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Hayalinizdeki Ev Başar Emlak ile Gerçeğe Dönüşüyor</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- Image Uploader -->
    <link rel="stylesheet" href="assets/css/image-uploader.min.css">
    <!-- jQuery Ui Css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="index.php" class="mobile-menu__logo">
                <img src="assets/images/logo/emlakLogo.png" alt="Logo">
            </a>
            <div class="mobile-menu__menu">

                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item">
                        <a href="index.php" class="nav-menu__link">Anasayfa</a>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Hakkımızda</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="branch.php" class="nav-submenu__link"> Şubeleri</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="about.php" class="nav-submenu__link"> Hakkımızda </a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="faq.php" class="nav-submenu__link"> FAQs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="property.php" class="nav-menu__link">Mülkler</a>
                    </li>
                    <li class="nav-menu__item ">
                        <a href="blog-classic.php" class="nav-menu__link">Blog</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.php" class="nav-menu__link">İletişim</a>
                    </li>
                </ul>
                <a href="property.php" class="btn btn-outline-light d-lg-none d-block mt-4">Satılık Mülkler <span class="icon-right text-gradient"> <i class="fas fa-arrow-right"></i> </span> </a>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ==================== Right Offcanvas Start Here ==================== -->
    <div class="common-offcanvas d-lg-block d-none">
        <div class="flx-between">
            <a href="index.php" class="mobile-menu__logo">
                <img src="assets/images/logo/white-emlaklogo.png" style="width: 192px;" alt="Logo">
            </a>
            <button type="button" class="close-button d-flex position-relative top-0 end-0"> <i class="las la-times"></i> </button>
        </div>

        <div class="search-box mt-5">
            <form action="#">
                <input type="text" class="common-input common-input--light" placeholder="Search...">
                <button type="submit" class="icon"> <i class="fas fa-search"></i> </button>
            </form>
        </div>

        <ul class="address-list mt-5">
            <li class="address-list__item flx-align">
                <span class="address-list__icon"><i class="fas fa-map-marker-alt"></i></span>
                <div class="address-list__content">
                    <p class="address-list__text">Yavuz Selim Mahallesi, Eyübi Caddesi <br> İstanbul/Sultanbeyli</p>
                </div>
            </li>
            <li class="address-list__item flx-align">
                <span class="address-list__icon"> <i class="fas fa-phone"></i></span>
                <div class="address-list__content">
                    <a href="tel:05398386310" class="address-list__text">0539 838 6310</a>
                </div>
            </li>
            <li class="address-list__item flx-align">
                <span class="address-list__icon"> <i class="fas fa-envelope"></i></span>
                <div class="address-list__content">
                    <a href="mailto:info@basaremlak.com" class="address-list__text"> info@basaremlak.com</a>
                    <a href="mailto:support@basaremlak.com" class="address-list__text"> support@basaremlak.com</a>
                </div>
            </li>
        </ul>

        <div class="google-map mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1511.2499674845235!2d-73.99553882767792!3d40.75102778252164!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1686536419224!5m2!1sen!2sbd" loading="lazy" class="w-100 h-100"></iframe>
        </div>

        <ul class="social-list">
            <li class="social-list__item"><a href="https://www.facebook.com" class="social-list__link flx-center"><i class="fab fa-facebook-f"></i></a> </li>
            <li class="social-list__item"><a href="https://www.twitter.com" class="social-list__link flx-center"> <i class="fab fa-twitter"></i></a></li>
            <li class="social-list__item"><a href="https://www.linkedin.com" class="social-list__link flx-center"> <i class="fab fa-linkedin-in"></i></a></li>
            <li class="social-list__item"><a href="https://www.pinterest.com" class="social-list__link flx-center"> <i class="fab fa-instagram"></i></a></li>
        </ul>

    </div>
    <!-- ==================== Right Offcanvas End Here ==================== -->



    <main class="">
        <!-- ==================== Header Start Here ==================== -->
        <header class="header">
            <div class="container container-two">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.php" class="link">
                            <img src="assets/images/logo/emlakLogo.png" style="width: 192px;" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">

                        <ul class="nav-menu flx-align ">
                            <li class="nav-menu__item">
                                <a href="index.php" class="nav-menu__link">Anasayfa</a>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Hakkımızda</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="branch.php" class="nav-submenu__link">Şubeler</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="about.php" class="nav-submenu__link"> Hakkımızda</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="faq.php" class="nav-submenu__link"> FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="property.php" class="nav-menu__link">Mülkler</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="blog-classic.php" class="nav-menu__link">Blog</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="contact.php" class="nav-menu__link">İletişim</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">
                        <button type="button" class="offcanvas-btn d-lg-block d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="none">
                                <line x1="0.0078125" y1="12.293" x2="30.0078" y2="12.293" stroke="#181616" stroke-width="3" />
                                <path d="M5.00781 22.293H30.0078" stroke="#181616" stroke-width="3" />
                                <path d="M10.0078 2.29297H30.0078" stroke="#181616" stroke-width="3" />
                            </svg>
                        </button>
                        <a href="property.php" class="btn btn-outline-light d-lg-block d-none">Satılık Mülkler
                            <span class="icon-right text-gradient icon">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                        <button type="button" class="toggle-mobileMenu d-lg-none ms-3"> <i class="las la-bars"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->

        <!--========================== Banner Section Start ==========================-->
        <section class="banner">
            <div class="container container-two">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-inner position-relative">
                                <div class="banner-content">
                                    <span class="banner-content__subtitle text-uppercase font-14">Başar Emlak: Hayalinizdeki Ev Burada!</span>
                                    <h1 class="banner-content__title">Ev Aramak Hiç <span class="text-gradient">Bu Kadar Keyifli</span> Olmamıştı! </h1>
                                    <p class="banner-content__desc font-18">Hayatınızı değiştirecek evi bulmanın heyecanı Başar Emlak ile yaşayın! Uzman ekibimiz, size özel hizmetleriyle ev arama sürecini bir maceraya dönüştürüyor. Şimdi, evinizin kapılarını aralayın ve yeni bir hayata adım atın!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-0 order-1">
                            <div class="banner-thumb">
                                <img src="assets/images/thumbs/banner-img.png" alt="">
                                <img src="assets/images/shapes/shape-triangle.png" alt="" class="shape-element one">
                                <img src="assets/images/shapes/shape-circle.png" alt="" class="shape-element two">
                                <img src="assets/images/shapes/shape-moon.png" alt="" class="shape-element three">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="common-tab nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-rent-tab" data-bs-toggle="pill" data-bs-target="#pills-rent" type="button" role="tab" aria-controls="pills-rent" aria-selected="true">Kiralık</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-sell-tab" data-bs-toggle="pill" data-bs-target="#pills-sell" type="button" role="tab" aria-controls="pills-sell" aria-selected="false">Satılık</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-rent" role="tabpanel" aria-labelledby="pills-rent-tab" tabindex="0">

                                    <div class="filter">
                                        <form action="#">
                                            <div class="row gy-sm-4 gy-3">
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <input type="text" class="common-input" placeholder="Anahtar Kelime">
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <div class="select-has-icon icon-black">
                                                        <select class="select common-input">
                                                            <option value="1" enable>Emlak Tipi</option>
                                                            <option value="Apartman">Apartman</option>
                                                            <option value="Villa">Villa</option>
                                                            <option value="Dublex">Dublex</option>
                                                            <option value="Triplex">Triplex</option>
                                                            <option value="Loft">Loft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <div class="select-has-icon icon-black">
                                                        <select class="select common-input">
                                                            <option value="1" enable>Konum</option>
                                                            <option value="Adana">Adana</option>
                                                            <option value="Adıyaman">Adıyaman</option>
                                                            <option value="Afyonkarahisar">Afyonkarahisar</option>
                                                            <option value="Ağrı">Ağrı</option>
                                                            <option value="Aksaray">Aksaray</option>
                                                            <option value="Amasya">Amasya</option>
                                                            <option value="Ankara">Ankara</option>
                                                            <option value="Antalya">Antalya</option>
                                                            <option value="Ardahan">Ardahan</option>
                                                            <option value="Artvin">Artvin</option>
                                                            <option value="Aydın">Aydın</option>
                                                            <option value="Balıkesir">Balıkesir</option>
                                                            <option value="Bartın">Bartın</option>
                                                            <option value="Batman">Batman</option>
                                                            <option value="Bayburt">Bayburt</option>
                                                            <option value="Bilecik">Bilecik</option>
                                                            <option value="Bingöl">Bingöl</option>
                                                            <option value="Bitlis">Bitlis</option>
                                                            <option value="Bolu">Bolu</option>
                                                            <option value="Burdur">Burdur</option>
                                                            <option value="Bursa">Bursa</option>
                                                            <option value="Çanakkale">Çanakkale</option>
                                                            <option value="Çankırı">Çankırı</option>
                                                            <option value="Çorum">Çorum</option>
                                                            <option value="Denizli">Denizli</option>
                                                            <option value="Diyarbakır">Diyarbakır</option>
                                                            <option value="Düzce">Düzce</option>
                                                            <option value="Edirne">Edirne</option>
                                                            <option value="Elazığ">Elazığ</option>
                                                            <option value="Erzincan">Erzincan</option>
                                                            <option value="Erzurum">Erzurum</option>
                                                            <option value="Eskişehir">Eskişehir</option>
                                                            <option value="Gaziantep">Gaziantep</option>
                                                            <option value="Giresun">Giresun</option>
                                                            <option value="Gümüşhane">Gümüşhane</option>
                                                            <option value="Hakkâri">Hakkâri</option>
                                                            <option value="Hatay">Hatay</option>
                                                            <option value="Iğdır">Iğdır</option>
                                                            <option value="Isparta">Isparta</option>
                                                            <option value="İstanbul">İstanbul</option>
                                                            <option value="İzmir">İzmir</option>
                                                            <option value="Kahramanmaraş">Kahramanmaraş</option>
                                                            <option value="Karabük">Karabük</option>
                                                            <option value="Karaman">Karaman</option>
                                                            <option value="Kars">Kars</option>
                                                            <option value="Kastamonu">Kastamonu</option>
                                                            <option value="Kayseri">Kayseri</option>
                                                            <option value="Kırıkkale">Kırıkkale</option>
                                                            <option value="Kırklareli">Kırklareli</option>
                                                            <option value="Kırşehir">Kırşehir</option>
                                                            <option value="Kilis">Kilis</option>
                                                            <option value="Kocaeli">Kocaeli</option>
                                                            <option value="Konya">Konya</option>
                                                            <option value="Kütahya">Kütahya</option>
                                                            <option value="Malatya">Malatya</option>
                                                            <option value="Manisa">Manisa</option>
                                                            <option value="Mardin">Mardin</option>
                                                            <option value="Mersin">Mersin</option>
                                                            <option value="Muğla">Muğla</option>
                                                            <option value="Muş">Muş</option>
                                                            <option value="Nevşehir">Nevşehir</option>
                                                            <option value="Niğde">Niğde</option>
                                                            <option value="Ordu">Ordu</option>
                                                            <option value="Osmaniye">Osmaniye</option>
                                                            <option value="Rize">Rize</option>
                                                            <option value="Sakarya">Sakarya</option>
                                                            <option value="Samsun">Samsun</option>
                                                            <option value="Şanlıurfa">Şanlıurfa</option>
                                                            <option value="Siirt">Siirt</option>
                                                            <option value="Sinop">Sinop</option>
                                                            <option value="Şırnak">Şırnak</option>
                                                            <option value="Sivas">Sivas</option>
                                                            <option value="Tekirdağ">Tekirdağ</option>
                                                            <option value="Tokat">Tokat</option>
                                                            <option value="Trabzon">Trabzon</option>
                                                            <option value="Tunceli">Tunceli</option>
                                                            <option value="Uşak">Uşak</option>
                                                            <option value="Van">Van</option>
                                                            <option value="Yalova">Yalova</option>
                                                            <option value="Yozgat">Yozgat</option>
                                                            <option value="Zonguldak">Zonguldak</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <button type="submit" class="btn btn-main w-100">Şimdi Bul!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab" tabindex="0">

                                    <div class="filter">
                                        <form action="#">
                                            <div class="row gy-sm-4 gy-3">
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <input type="text" class="common-input" placeholder="Anahtar Kelime">
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <div class="select-has-icon icon-black">
                                                        <select class="select common-input">
                                                            <option value="1" enable>Emlak Tipi</option>
                                                            <option value="Apartman">Apartman</option>
                                                            <option value="Villa">Villa</option>
                                                            <option value="Dublex">Dublex</option>
                                                            <option value="Triplex">Triplex</option>
                                                            <option value="Loft">Loft</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <div class="select-has-icon icon-black">
                                                        <select class="select common-input">
                                                            <option value="1" enable>Konum</option>
                                                            <option value="Adana">Adana</option>
                                                            <option value="Adıyaman">Adıyaman</option>
                                                            <option value="Afyonkarahisar">Afyonkarahisar</option>
                                                            <option value="Ağrı">Ağrı</option>
                                                            <option value="Aksaray">Aksaray</option>
                                                            <option value="Amasya">Amasya</option>
                                                            <option value="Ankara">Ankara</option>
                                                            <option value="Antalya">Antalya</option>
                                                            <option value="Ardahan">Ardahan</option>
                                                            <option value="Artvin">Artvin</option>
                                                            <option value="Aydın">Aydın</option>
                                                            <option value="Balıkesir">Balıkesir</option>
                                                            <option value="Bartın">Bartın</option>
                                                            <option value="Batman">Batman</option>
                                                            <option value="Bayburt">Bayburt</option>
                                                            <option value="Bilecik">Bilecik</option>
                                                            <option value="Bingöl">Bingöl</option>
                                                            <option value="Bitlis">Bitlis</option>
                                                            <option value="Bolu">Bolu</option>
                                                            <option value="Burdur">Burdur</option>
                                                            <option value="Bursa">Bursa</option>
                                                            <option value="Çanakkale">Çanakkale</option>
                                                            <option value="Çankırı">Çankırı</option>
                                                            <option value="Çorum">Çorum</option>
                                                            <option value="Denizli">Denizli</option>
                                                            <option value="Diyarbakır">Diyarbakır</option>
                                                            <option value="Düzce">Düzce</option>
                                                            <option value="Edirne">Edirne</option>
                                                            <option value="Elazığ">Elazığ</option>
                                                            <option value="Erzincan">Erzincan</option>
                                                            <option value="Erzurum">Erzurum</option>
                                                            <option value="Eskişehir">Eskişehir</option>
                                                            <option value="Gaziantep">Gaziantep</option>
                                                            <option value="Giresun">Giresun</option>
                                                            <option value="Gümüşhane">Gümüşhane</option>
                                                            <option value="Hakkâri">Hakkâri</option>
                                                            <option value="Hatay">Hatay</option>
                                                            <option value="Iğdır">Iğdır</option>
                                                            <option value="Isparta">Isparta</option>
                                                            <option value="İstanbul">İstanbul</option>
                                                            <option value="İzmir">İzmir</option>
                                                            <option value="Kahramanmaraş">Kahramanmaraş</option>
                                                            <option value="Karabük">Karabük</option>
                                                            <option value="Karaman">Karaman</option>
                                                            <option value="Kars">Kars</option>
                                                            <option value="Kastamonu">Kastamonu</option>
                                                            <option value="Kayseri">Kayseri</option>
                                                            <option value="Kırıkkale">Kırıkkale</option>
                                                            <option value="Kırklareli">Kırklareli</option>
                                                            <option value="Kırşehir">Kırşehir</option>
                                                            <option value="Kilis">Kilis</option>
                                                            <option value="Kocaeli">Kocaeli</option>
                                                            <option value="Konya">Konya</option>
                                                            <option value="Kütahya">Kütahya</option>
                                                            <option value="Malatya">Malatya</option>
                                                            <option value="Manisa">Manisa</option>
                                                            <option value="Mardin">Mardin</option>
                                                            <option value="Mersin">Mersin</option>
                                                            <option value="Muğla">Muğla</option>
                                                            <option value="Muş">Muş</option>
                                                            <option value="Nevşehir">Nevşehir</option>
                                                            <option value="Niğde">Niğde</option>
                                                            <option value="Ordu">Ordu</option>
                                                            <option value="Osmaniye">Osmaniye</option>
                                                            <option value="Rize">Rize</option>
                                                            <option value="Sakarya">Sakarya</option>
                                                            <option value="Samsun">Samsun</option>
                                                            <option value="Şanlıurfa">Şanlıurfa</option>
                                                            <option value="Siirt">Siirt</option>
                                                            <option value="Sinop">Sinop</option>
                                                            <option value="Şırnak">Şırnak</option>
                                                            <option value="Sivas">Sivas</option>
                                                            <option value="Tekirdağ">Tekirdağ</option>
                                                            <option value="Tokat">Tokat</option>
                                                            <option value="Trabzon">Trabzon</option>
                                                            <option value="Tunceli">Tunceli</option>
                                                            <option value="Uşak">Uşak</option>
                                                            <option value="Van">Van</option>
                                                            <option value="Yalova">Yalova</option>
                                                            <option value="Yozgat">Yozgat</option>
                                                            <option value="Zonguldak">Zonguldak</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-xs-6">
                                                    <button type="submit" class="btn btn-main w-100">Şimdi Bul!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== Banner Section End ==========================-->

        <!-- ======================== About Section Start ========================== -->
        <section class="about padding-y-120">
            <div class="container container-two">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-thumb">
                            <img src="assets/images/thumbs/about-img.png" alt="">
                            <div class="client-statistics flx-align">
                                <span class="client-statistics__icon">
                                    <i class="fas fa-users text-gradient"></i>
                                </span>
                                <div class="client-statistics__content">
                                    <h5 class="client-statistics__number statisticsCounter">4,000+</h5>
                                    <span class="client-statistics__text fs-18">Memnun Müşteriler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-heading style-left">
                                <span class="section-heading__subtitle"> <span class="text-gradient fw-semibold">Hakkımızda</span> </span>
                                <h2 class="section-heading__title">Güvenilirlik ve Profesyonellikte Lider: Başar Emlak Ofisi</h2>
                                <p class="section-heading__desc">Başar Emlak ofisi, sektördeki uzun yıllara dayanan deneyimiyle tanınır. Müşteri odaklı yaklaşımımızla, her adımda sizin yanınızda olmaktan gurur duyuyoruz. Modern ve samimi bir ortamda, ev arayışlarınızı keyifli bir deneyime dönüştürüyoruz. Sizler için en uygun evi bulmak ve size huzurlu bir yaşam sunmak için buradayız.</p>
                            </div>
                            <div class="about-box d-flex">
                                <div class="about-box__icon">
                                    <img src="assets/images/icons/about-icon.svg" alt="">
                                </div>
                                <div class="about-box__content">
                                    <h6 class="about-box__title">Sizin İçin Çalışan Profesyonel Bir Ekip</h6>
                                    <p class="about-box__desc font-13">Başar Emlak ofisinde çalışan uzman ekibimiz, sektördeki en deneyimli ve tutkulu kişilerden oluşur. Her biri, müşterilerimize en iyi hizmeti sunmak için sürekli olarak kendini geliştirmekte ve size özel çözümler üretmektedir. Sizin hayalleriniz bizim önceliğimizdir. Evinizi bulmak için buradayız!</p>
                                </div>
                            </div>
                            <div class="about-button">
                                <a href="about.php" class="btn btn-main">Daha Fazla <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================== About Section End ========================== -->



        <!-- ======================== Property Section Start ============================ -->
        <section class="property-two bg-gray-100 padding-t-60 padding-b-120">
            <div class="container container-two">
                <div class="section-heading">
                    <span class="section-heading__subtitle bg-white">
                        <span class="text-gradient fw-semibold">Keşfedin: Başar Emlak'tan Seçkin Mülkler</span>
                    </span>
                    <h2 class="section-heading__title">Hayalinizdeki Ev Burada Sizi Bekliyor</h2>
                </div>

                <ul class="common-tab nav nav-pills justify-content-center mb-40" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-transparent active" id="all" data-bs-toggle="pill" data-bs-target="#all_id" type="button" role="tab" aria-controls="all_id" aria-selected="true">Hepsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-transparent" id="sale" data-bs-toggle="pill" data-bs-target="#sale_id" type="button" role="tab" aria-controls="sale_id" aria-selected="true">Satılık</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-transparent" id="rent" data-bs-toggle="pill" data-bs-target="#rent_id" type="button" role="tab" aria-controls="rent_id" aria-selected="false">Kiralık</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="all_id" role="tabpanel" aria-labelledby="all" tabindex="0">
                        <div class="row gy-4">
                            <?php
                            if (is_array($fetchDataPropertyAttributes)) {
                                $sn = 1;
                                foreach ($fetchDataPropertyAttributes as $data) {

                                    $for_other_property_table_id = $data['property_id'];
                                    $fetchDataPropertyPhotos = fetch_data_property_photos($db, $tableNamePropertyPhotos, $columnsPropertyPhotos, $for_other_property_table_id);

                                    $property_name_url = $data['property_name'];
                                    $property_id_url = $data['property_id'];

                                    $seo_name = cleanTurkishCharacters($property_name_url);

                                    // SEO uyumlu URL'yi oluştur
                                    $url = "/$seo_name" . "/$property_id_url";
                            ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="property-item style-two">
                                            <div class="property-item__thumb">
                                                <a href="property-details.php?<?php echo $url ?>" class="link">
                                                    <img src="admin/<?php echo $fetchDataPropertyPhotos['property_main_photo'] ?>" alt="" class="cover-img">
                                                </a>
                                            </div>
                                            <div class="property-item__content">
                                                <h6 class="property-item__title">
                                                    <a href="property-details.php?<?php echo $url ?>" class="link"> <?php echo $data['property_name'] ?></a>
                                                </h6>
                                                <ul class="amenities-list flx-align">

                                                    <?php if ($data['property_size'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fa fa-expand"></i></span>
                                                            <span class="text"><?php echo $data['property_size'] ?> mt2</span>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($data['property_bedroom_count'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fa fa-bed"></i></span>
                                                            <span class="text"><?php echo $data['property_bedroom_count'] ?></span>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($data['property_bathroom_count'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fas fa-bath"></i></span>
                                                            <span class="text"><?php echo $data['property_bathroom_count'] ?></span>
                                                        </li>
                                                    <?php endif; ?>

                                                </ul>

                                                <?php
                                                if ($data['property_status'] == 'Rent') {
                                                    echo '<h6 class="property-item__price"> ' . $data["property_rental_price"] . ' 
                                            ₺<span class="day">/per month</span>
                                        </h6>';
                                                } elseif ($data['property_status'] == 'Sale') {
                                                    echo '<h6 class="property-item__price"> ' . $data["property_sales_price"] . ' 
                                        ₺ </h6>';
                                                }
                                                ?>
                                                <p class="property-item__location d-flex gap-2">
                                                    <span class="icon text-gradient"> <i class="fas fa-map-marker-alt"></i></span>
                                                    <?php echo ($data['property_province'] . "/" . $data['property_district'] . " " . $data['property_neighbourhood'])   ?>
                                                </p>
                                                <a href="property-details.php?<?php echo $url ?>" class="simple-btn text-gradient fw-semibold font-14">İncele <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span> </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    $sn++;
                                }
                            } else {
                                echo $fetchDataPropertyAttributes;
                            } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sale_id" role="tabpanel" aria-labelledby="sale" tabindex="0">
                        <div class="row gy-4">
                            <?php
                            if (is_array($fetchDataPropertyAttributesSale)) {
                                $sn = 1;
                                foreach ($fetchDataPropertyAttributesSale as $data) {

                                    $for_other_property_table_id = $data['property_id'];
                                    $fetchDataPropertyPhotos = fetch_data_property_photos($db, $tableNamePropertyPhotos, $columnsPropertyPhotos, $for_other_property_table_id);

                                    $property_name_url = $data['property_name'];
                                    $property_id_url = $data['property_id'];

                                    $seo_name = cleanTurkishCharacters($property_name_url);

                                    // SEO uyumlu URL'yi oluştur
                                    $url = "/$seo_name" . "/$property_id_url";
                            ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="property-item style-two">
                                            <div class="property-item__thumb">
                                                <a href="property-details.php?<?php echo $url ?>" class="link">
                                                    <img src="admin/<?php echo $fetchDataPropertyPhotos['property_main_photo'] ?>" alt="" class="cover-img">
                                                </a>
                                            </div>
                                            <div class="property-item__content">
                                                <h6 class="property-item__title">
                                                    <a href="property-details.php?<?php echo $url ?>" class="link"> <?php echo $data['property_name'] ?></a>
                                                </h6>
                                                <ul class="amenities-list flx-align">

                                                    <?php if ($data['property_size'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fa fa-expand"></i></span>
                                                            <span class="text"><?php echo $data['property_size'] ?> mt2</span>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($data['property_bedroom_count'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fa fa-bed"></i></span>
                                                            <span class="text"><?php echo $data['property_bedroom_count'] ?></span>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($data['property_bathroom_count'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fas fa-bath"></i></span>
                                                            <span class="text"><?php echo $data['property_bathroom_count'] ?></span>
                                                        </li>
                                                    <?php endif; ?>

                                                </ul>

                                                <h6 class="property-item__price"> <?php echo $data['property_sales_price'] ?>
                                                    ₺
                                                </h6>
                                                <p class="property-item__location d-flex gap-2">
                                                    <span class="icon text-gradient"> <i class="fas fa-map-marker-alt"></i></span>
                                                    <?php echo ($data['property_province'] . "/" . $data['property_district'] . " " . $data['property_neighbourhood'])   ?>
                                                </p>
                                                <a href="property-details.php?<?php echo $url ?>" class="simple-btn text-gradient fw-semibold font-14">İncele <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span> </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    $sn++;
                                }
                            } else {
                                echo $fetchDataPropertyAttributesSale;
                            } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rent_id" role="tabpanel" aria-labelledby="rent" tabindex="0">
                        <div class="row gy-4">
                            <?php
                            if (is_array($fetchDataPropertyAttributesRent)) {
                                $sn = 1;
                                foreach ($fetchDataPropertyAttributesRent as $data) {

                                    $for_other_property_table_id = $data['property_id'];
                                    $fetchDataPropertyPhotos = fetch_data_property_photos($db, $tableNamePropertyPhotos, $columnsPropertyPhotos, $for_other_property_table_id);

                                    $property_name_url = $data['property_name'];
                                    $property_id_url = $data['property_id'];

                                    $seo_name = cleanTurkishCharacters($property_name_url);

                                    // SEO uyumlu URL'yi oluştur
                                    $url = "/$seo_name" . "/$property_id_url";
                            ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="property-item style-two">
                                            <div class="property-item__thumb">
                                                <a href="property-details.php?<?php echo $url ?>" class="link">
                                                    <img src="admin/<?php echo $fetchDataPropertyPhotos['property_main_photo'] ?>" alt="" class="cover-img">
                                                </a>
                                            </div>
                                            <div class="property-item__content">
                                                <h6 class="property-item__title">
                                                    <a href="property-details.php?<?php echo $url ?>" class="link"> <?php echo $data['property_name'] ?></a>
                                                </h6>
                                                <ul class="amenities-list flx-align">

                                                    <?php if ($data['property_size'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fa fa-expand"></i></span>
                                                            <span class="text"><?php echo $data['property_size'] ?> mt2</span>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($data['property_bedroom_count'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fa fa-bed"></i></span>
                                                            <span class="text"><?php echo $data['property_bedroom_count'] ?></span>
                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if ($data['property_bathroom_count'] !== null) : ?>
                                                        <li class="amenities-list__item flx-align">
                                                            <span class="icon text-gradient"><i class="fas fa-bath"></i></span>
                                                            <span class="text"><?php echo $data['property_bathroom_count'] ?></span>
                                                        </li>
                                                    <?php endif; ?>

                                                </ul>
                                                <h6 class="property-item__price"> <?php echo $data['property_rental_price'] ?>
                                                    ₺ <span class="day">/per month</span>

                                                </h6>
                                                <p class="property-item__location d-flex gap-2">
                                                    <span class="icon text-gradient"> <i class="fas fa-map-marker-alt"></i></span>
                                                    <?php echo ($data['property_province'] . "/" . $data['property_district'] . " " . $data['property_neighbourhood'])   ?>
                                                </p>
                                                <a href="property-details.php?<?php echo $url ?>" class="simple-btn text-gradient fw-semibold font-14">Book Now <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span> </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    $sn++;
                                }
                            } else {
                                echo $fetchDataPropertyAttributesRent;
                            } ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======================== Property Section End ============================ -->

        <!-- ======================= Property Section Start ================================== -->
        <section class="property-type padding-y-120">
            <div class="container container-two">
                <div class="section-heading">
                    <span class="section-heading__subtitle bg-gray-100"> <span class="text-gradient fw-semibold">Farklı İhtiyaçlara Uygun Mülk Seçenekleri</span> </span>
                    <h2 class="section-heading__title">Konutlarınızı Keşfedin ve Satın Alın!</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="property-type-item">
                            <span class="property-type-item__icon">
                                <img src="assets/images/icons/property-type-icon1.svg" alt="">
                            </span>
                            <h6 class="property-type-item__title"> Daireler ve Apartmanlar </h6>
                            <p class="property-type-item__desc font-18">Şehrin merkezinde veya sakin semtlerde, modern tasarımlı ve geniş daire seçenekleri. Konforlu yaşam alanları ve sunduğu olanaklarla, hayalinizdeki eve bir adım daha yaklaşın.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="property-type-item">
                            <span class="property-type-item__icon">
                                <img src="assets/images/icons/property-type-icon2.svg" alt="">
                            </span>
                            <h6 class="property-type-item__title"> Müstakil Evler </h6>
                            <p class="property-type-item__desc font-18">Bahçeli veya bahçesiz, geniş ve konforlu müstakil ev seçenekleri. Ailenize uygun modern ve şık evler, huzurlu bir yaşam için ideal seçenekler sunuyor.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="property-type-item">
                            <span class="property-type-item__icon">
                                <img src="assets/images/icons/property-type-icon3.svg" alt="">
                            </span>
                            <h6 class="property-type-item__title"> Villalar ve Lüks Konutlar </h6>
                            <p class="property-type-item__desc font-18">Eşsiz manzaralar, özel havuzlar ve geniş bahçelerle donatılmış, lüks ve konforun bir araya geldiği özel villalar. Ayrıcalıklı bir yaşamın tadını çıkarın.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Property Section End ================================== -->

        <!-- ======================== Video popup Section Start =================== -->
        <div class="video-popup ">
            <div class="container container-two">
                <div class="video-popup__thumb">
                    <img src="assets/images/thumbs/video-popup.png" alt="" class="cover-img">
                    <a href="https://www.youtube.com/watch?v=pPl3ZZdTP3g" class="popup-video-link video-popup__button">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- ======================== Video popup Section End =================== -->

        <!-- ============================= Counter Section Start ======================= -->
        <section class="counter padding-y-120">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-sm-3 col-6">
                        <div class="counter-item position-relative">
                            <h2 class="counter-item__number counter"> 4000 </h2>
                            <span class="counter-item__text"> Huzurlu Müşteri </span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="counter-item position-relative">
                            <h2 class="counter-item__number counter"> 5 </h2>
                            <span class="counter-item__text"> Yıl Deneyim </span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="counter-item position-relative">
                            <h2 class="counter-item__number counter"> 42 </h2>
                            <span class="counter-item__text"> Güvenilir İş Ortaklığı </span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="counter-item position-relative">
                            <h2 class="counter-item__number counter"> 21 </h2>
                            <span class="counter-item__text"> Uzmanlık Alanı </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================= Counter Section End ======================= -->

        <!-- ========================= Message Section Start ======================== -->
        <section class="message">
            <div class="container container-two">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="message-thumb">
                            <img src="assets/images/thumbs/message-img.png" alt="" class="cover-img">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-box">
                            <h2 class="form-box__title">Ev Arayışınızı Başlatın! </h2>
                            <form action="#">
                                <div class="row gy-30">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="position-relative">
                                            <input type="text" class="common-input common-input--withIcon" placeholder="İsim">
                                            <span class="input-icon"><i class="fas fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="position-relative">
                                            <input type="tel" class="common-input common-input--withIcon" placeholder="Telefon Numarası">
                                            <span class="input-icon"><i class="fas fa-phone"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="position-relative">
                                            <input type="email" class="common-input common-input--withIcon" placeholder="Email">
                                            <span class="input-icon"><i class="fas fa-paper-plane"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="position-relative">
                                            <input type="text" class="common-input common-input--withIcon" placeholder="Adres">
                                            <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <textarea class="common-input common-input--withIcon" placeholder="Mesaj"></textarea>
                                            <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-main w-100"> Mesaj Gönder! </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= Message Section End ======================== -->

        <!-- ==================== Testimonials Section Start ==================== -->
        <section class="testimonial padding-y-60">
            <div class="container container-two">
                <div class="section-heading style-left style-flex">
                    <div class="section-heading__inner">
                        <span class="section-heading__subtitle"> <span class="text-gradient fw-semibold">üşterilerimizin Gözünden Başar Emlak Deneyimi</span> </span>
                        <h2 class="section-heading__title">Gerçek Müşterilerin & Gerçek Yorumları</h2>
                    </div>
                    <p class="section-heading__desc">Başar Emlak hizmetlerimizi deneyimleyen müşterilerimizin samimi yorumlarına göz atın. Bizimle yaşadıkları deneyimler hakkında ne düşündüklerini keşfedin ve siz de bize katılın!</p>
                </div>
                <div class="testimonial__inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="testimonial-box">
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Ayşe Yılmaz</h6>
                                            <span class="testimonial-item__designation">Öğretmen</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak, ev arayışımda bana inanılmaz bir destek sağladı. Profesyonel yaklaşımları ve geniş portföyleriyle herkesin ihtiyacına uygun bir ev bulabileceğinizden emin olabilirsiniz.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Ahmet Demir</h6>
                                            <span class="testimonial-item__designation">Mühendis</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak ekibi, ev satın almak konusundaki endişelerimi giderdi. Sabırlı ve bilgili çalışanlarıyla işlem sürecini çok kolaylaştırdılar. Kesinlikle tavsiye ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Fatma Kaya</h6>
                                            <span class="testimonial-item__designation">Avukat</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak'ın hizmetleri beni çok etkiledi. Profesyonel ve güvenilir bir ekiple çalışmak, ev arayışınızı keyifli hale getiriyor. Kendilerine teşekkür ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Mehmet Yıldız</h6>
                                            <span class="testimonial-item__designation">Bankacı</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak, mükemmel müşteri hizmetiyle öne çıkıyor. İhtiyaçlarımı tam olarak anladılar ve bana en uygun evi bulmamda yardımcı oldular. Kesinlikle tekrar tercih ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Zeynep Aksoy</h6>
                                            <span class="testimonial-item__designation">Grafik Tasarımcı</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak ekibi, evimi bulmamda bana harika bir destek sağladı. Profesyonel yaklaşımları ve samimi iletişimleriyle her adımda beni bilgilendirdiler. Şiddetle tavsiye ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Ali Can</h6>
                                            <span class="testimonial-item__designation">Doktor</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak, ev arayışımda bana büyük kolaylık sağladı. Geniş portföyleri sayesinde ihtiyaçlarımı karşılayacak bir ev bulmam çok kısa sürdü. Teşekkür ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Selma Arslan</h6>
                                            <span class="testimonial-item__designation">Yazar</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak, profesyonel ve etkili hizmetleriyle beni çok etkiledi. Ev arayışımda bana tam olarak ihtiyacım olan desteği sağladılar. Herkese tavsiye ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Hasan Korkmaz</h6>
                                            <span class="testimonial-item__designation">Muhasebeci</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak ekibi, ev alım sürecimde her adımda yanımda oldu. Güvenilir ve samimi yaklaşımlarıyla işlemi çok kolaylaştırdılar. Teşekkür ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Emine Şahin</h6>
                                            <span class="testimonial-item__designation">Eczacı</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak, ev arayışımda bana büyük destek sağladı. Profesyonel ekip, beni doğru evle buluşturdu ve işlem sürecini çok kolay hale getirdi.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-item__top flx-between">
                                        <div class="testimonial-item__info">
                                            <h6 class="testimonial-item__name">Yusuf Karadağ</h6>
                                            <span class="testimonial-item__designation">Yönetici</span>
                                        </div>
                                        <img src="assets/images/icons/quote.svg" alt="">
                                    </div>
                                    <p class="testimonial-item__desc">Başar Emlak, ev alım sürecimde beni çok rahatlattı. Profesyonel yaklaşımları ve samimi iletişimleriyle işlemi çok kolaylaştırdılar. Teşekkür ederim.</p>
                                    <ul class="star-rating flx-align justify-content-end">
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item unabled"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-thumb">
                                <img src="assets/images/thumbs/testimonial-img.png" alt="" class="cover-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Testimonials Section End ==================== -->

        <!-- ==================== Footer Two Start Here ==================== -->
        <footer class="footer footer-two padding-y-120">
            <div class="container container-two">
                <div class="row gy-5">
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-item">
                            <div class="footer-item__logo">
                                <a href="index.php"> <img src="assets/images/logo/white-emlaklogo.png" alt=""></a>
                            </div>
                            <p class="footer-item__desc">Başar Emlak, uzman ekibi ve geniş portföyüyle, ev arayışınızı keyifli bir deneyime dönüştürmek için burada. Profesyonel hizmet anlayışıyla, sizin için en uygun evi bulmanıza yardımcı oluyoruz. Hayalinizdeki eve ulaşmanız için biz buradayız.</p>

                            <h6 class="footer-item__title mt-4 mt-lg-5">İletişim Bilgilerimiz</h6>
                            <div class="row gy-4">
                                <div class="col-6">
                                    <div class="contact-info d-flex gap-2">
                                        <span class="contact-info__icon text-gradient"><i class="fas fa-map-marker-alt"></i></span>
                                        <div class="contact-info__content">
                                            <span class="contact-info__text text-white">Adres</span>
                                            <span class="contact-info__address text-white">Yavuz Selim Mahallesi, Eyübi Caddesi
                                                İstanbul/Sultanbeyli</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="contact-info d-flex gap-2">
                                        <span class="contact-info__icon text-gradient"><i class="fas fa-phone"></i></span>
                                        <div class="contact-info__content">
                                            <span class="contact-info__text text-white">Telefon Numarası</span>
                                            <span class="contact-info__address text-white">0539 838 6310</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-1 d-xl-block d-none"></div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="footer-item">
                            <h6 class="footer-item__title">Mülklerimiz</h6>
                            <ul class="footer-menu">
                                <?php
                                if (is_array($fetchDataPropertyAttributesLimit8)) {
                                    $sn = 1;
                                    foreach ($fetchDataPropertyAttributesLimit8 as $data) {

                                        $for_other_property_table_id = $data['property_id'];
                                        $fetchDataPropertyPhotos = fetch_data_property_photos($db, $tableNamePropertyPhotos, $columnsPropertyPhotos, $for_other_property_table_id);

                                        $property_name_url = $data['property_name'];
                                        $property_id_url = $data['property_id'];

                                        $seo_name = cleanTurkishCharacters($property_name_url);

                                        // SEO uyumlu URL'yi oluştur
                                        $url = "/$seo_name" . "/$property_id_url";
                                ?>
                                        <li class="footer-menu__item"><a href="property-details.php?<?php echo $url ?>" class="footer-menu__link"><?php echo $data['property_name'] ?> </a></li>
                                <?php
                                        $sn++;
                                    }
                                } else {
                                    echo $fetchDataPropertyAttributesLimit8;
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-1 d-xl-block d-none"></div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="footer-item">
                            <h6 class="footer-item__title">Haber Bültenimize Abone Olun</h6>
                            <p class="footer-item__desc">En yeni emlak fırsatları ve güncellemeleri hakkında bilgi almak için haber bültenimize abone olun. İlk siz haberdar olun!</p>

                            <form action="#" class="mt-4 subscribe-box">
                                <div class="input-group">
                                    <input type="text" class="form-control common-input common-input--md text-white" placeholder="Email">
                                    <button type="submit" class="px-4 input-group-text bg--gradient border-0 text-white"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>

                            <ul class="social-list">
                                <li class="social-list__item"><a href="https://www.facebook.com" class="social-list__link flx-center"><i class="fab fa-facebook-f"></i></a> </li>
                                <li class="social-list__item"><a href="https://www.twitter.com" class="social-list__link flx-center"> <i class="fab fa-twitter"></i></a></li>
                                <li class="social-list__item"><a href="https://www.linkedin.com" class="social-list__link flx-center"> <i class="fab fa-linkedin-in"></i></a></li>
                                <li class="social-list__item"><a href="https://www.pinterest.com" class="social-list__link flx-center"> <i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- bottom Footer -->
        <div class="bottom-footer">
            <div class="container container-two">
                <div class="bottom-footer__inner flx-between gap-3">
                    <p class="bottom-footer__text"> &copy; Treeb 2024 | Tüm Hakları Saklıdır.</p>
                    <div class="footer-links">
                        <a href="#" class="footer-link">Kullanım Şartları</a>
                        <a href="#" class="footer-link">Gizlilik Politikası</a>
                        <a href="iletisim.php" class="footer-link">Bize Ulaşın</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== Footer Two End Here ==================== -->

    </main>

    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Counter Up Js -->
    <script src="assets/js/counterup.min.js"></script>
    <!-- Marquee text slider -->
    <script src="assets/js/jquery.marquee.min.js"></script>
    <!-- Image Uploader -->
    <script src="assets/js/image-uploader.min.js"></script>
    <!-- jQuery Ui Css -->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>