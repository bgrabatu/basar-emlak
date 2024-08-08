<?php
include "admin/php/main.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Mülkler | Başar Emlak</title>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48201.613205787056!2d29.237114839402796!3d40.96832271686445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cad05ff4c5d567%3A0xb011010aa2dc68c0!2sSultanbeyli%2C%20%C4%B0stanbul!5e0!3m2!1str!2str!4v1715547823851!5m2!1str!2str" loading="lazy" class="w-100 h-100"></iframe>
        </div>

        <ul class="social-list">
            <li class="social-list__item"><a href="https://www.facebook.com" class="social-list__link flx-center"><i class="fab fa-facebook-f"></i></a> </li>
            <li class="social-list__item"><a href="https://www.twitter.com" class="social-list__link flx-center"> <i class="fab fa-twitter"></i></a></li>
            <li class="social-list__item"><a href="https://www.linkedin.com" class="social-list__link flx-center"> <i class="fab fa-linkedin-in"></i></a></li>
            <li class="social-list__item"><a href="https://www.pinterest.com" class="social-list__link flx-center"> <i class="fab fa-instagram"></i></a></li>
        </ul>

    </div>
    <!-- ==================== Right Offcanvas End Here ==================== -->

    <main class="body-bg">
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

        <!-- ==================== Breadcrumb Start Here ==================== -->
        <section class="breadcrumb padding-y-120">
            <img src="assets/images/thumbs/breadcrumb-img.png" alt="" class="breadcrumb__img">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb__wrapper">
                            <h2 class="breadcrumb__title"> Aradığınız Mükemmel Mülkü Burada Bulun!</h2>
                            <ul class="breadcrumb__list">
                                <li class="breadcrumb__item"><a href="index.php" class="breadcrumb__link"> <i class="las la-home"></i> Home</a> </li>
                                <li class="breadcrumb__item"><i class="fas fa-angle-right"></i></li>
                                <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> Mülklerimiz </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Breadcrumb End Here ==================== -->

        <!-- ======================== Property Section Start ============================ -->
        <section class="property bg-gray-100 padding-y-120">
            <div class="container container-two">
                <div class="property-filter">
                    <form action="#">
                        <div class="row gy-4">
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
                                <div class="select-has-icon">
                                    <select class="form-select common-input common-input--withLeftIcon pill text-gray-800">
                                        <option value="Status" disabled selected>Durumu</option>
                                        <option value="All">Hepsi</option>
                                        <option value="Buy">Satılık</option>
                                        <option value="Rent">Kiralık</option>
                                    </select>
                                    <span class="input-icon input-icon--left text-gradient">
                                        <img src="assets/images/icons/status.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="select-has-icon">
                                    <select class="form-select common-input common-input--withLeftIcon pill text-gray-800">
                                        <option value="Type" disabled selected>Mülk Tipi</option>
                                        <option value="All">Hepsi</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Dublex">Dublex</option>
                                        <option value="Triplex">Triplex</option>
                                        <option value="Loft">Loft</option>
                                    </select>
                                    <span class="input-icon input-icon--left text-gradient">
                                        <img src="assets/images/icons/type.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
                                <div class="select-has-icon">
                                    <select class="form-select common-input common-input--withLeftIcon pill text-gray-800">
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
                                    <span class="input-icon input-icon--left text-gradient">
                                        <img src="assets/images/icons/location.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="position-relative">
                                    <input type="text" class="common-input common-input--withLeftIcon pill text-gray-800" placeholder="Gelişmiş Filtre">
                                    <span class="input-icon input-icon--left text-gradient">
                                        <img src="assets/images/icons/filter.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="property-filter__bottom flx-between gap-2">
                        <span class="property-filter__text font-18 text-gray-800">Gösterilen 1-10 de 23</span>
                        <div class="d-flex align-items-center gap-2">
                            <div class="list-grid d-flex align-items-center gap-2 me-4">
                                <button class="list-grid__button grid-button active text-body"><i class="las la-border-all"></i></button>
                                <button class="list-grid__button list-button text-body"><i class="las la-list"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="list-grid-item-wrapper show-two-item row gy-4">
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
                                            ₺<span class="day">/per day</span>
                                        </h6>';
                                        } elseif ($data['property_status'] == 'Sale') {
                                            echo '<h6 class="property-item__price"> ' . $data["property_sales_price"] . ' 
                                        ₺ </h6>';
                                        }
                                        ?>
                                        <p class="property-item__location d-flex gap-2">
                                            <span class="icon text-gradient"> <i class="fas fa-map-marker-alt"></i></span>
                                            <?php echo ($data['property_province'] . "/" . $data['property_district'] . "/" . $data['property_neighbourhood'])   ?>
                                        </p>
                                        <a href="property-details.php?<?php echo $url ?>" class="simple-btn text-gradient fw-semibold font-14">İncele! <span class="icon-right"> <i class="fas fa-arrow-right"></i> </span> </a>
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
        </section>
        <!-- ======================== Property Section End ============================ -->

        <!-- ============================= CTA section Start ===================== -->
        <section class="cta padding-b-120">
            <div class="container container-two">
                <div class="cta-box flx-between gap-2">
                    <div class="cta-content">
                        <h2 class="cta-content__title">Emlak Haberlerinden <span class="text-gradient">Haberdar Olun!</span> </h2>
                        <p class="cta-content__desc">En yeni emlak fırsatları ve güncellemeleri hakkında bilgi almak için haber bültenimize abone olun. İlk siz haberdar olun!</p>
                        <form action="#" class="cta-content__form d-flex align-items-center gap-2">
                            <div class="position-relative w-100">
                                <input type="text" class="common-input common-input--withLeftIcon w-100" placeholder="Email Adresiniz">
                                <span class="input-icon input-icon--left text-gradient font-20 line-height-1"><i class="far fa-envelope"></i></span>
                            </div>
                            <button type="submit" class="btn btn-main text-uppercase flex-shrink-0"> Abone <span class="text">Ol</span> </button>
                        </form>
                    </div>
                    <div class="cta-content__thumb d-xl-block d-none">
                        <img src="assets/images/thumbs/cta-img.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================= CTA section End ===================== -->


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