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
    <title> Blog | Başar Emlak</title>
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



    <!-- ========================= Blog Classic Section Start ======================== -->
    <div class="blog-classic padding-y-120">
        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <?php
                    if (is_array($fetchDataBlogDetails)) {
                        $sn = 1;
                        foreach ($fetchDataBlogDetails as $data) {

                            $for_other_blog_table_id = $data['blog_id'];
                            $fetchDataBlogPhotos = fetch_data_blog_photos($db, $tableNameBlogPhotos, $columnsBlogPhotos, $for_other_blog_table_id);

                            $blog_category = $data['blog_post_category'];
                            $blog_name_url = $data['blog_post_title'];
                            $blog_id_url = $data['blog_id'];

                            $blog_category = cleanTurkishCharacters($blog_category);
                            $seo_name = cleanTurkishCharacters($blog_name_url);

                            // SEO uyumlu URL'yi oluştur
                            $url = "/$blog_category" . "/$seo_name" . "/$blog_id_url";
                    ?>
                            <div class="blog-item blog-classic-item d-flex">
                                <div class="blog-item__thumb d-flex position-relative">
                                    <a href="blog-details.php?<?php echo $url ?>" class="blog-item__thumb-link">
                                        <img src="admin/<?php echo $fetchDataBlogPhotos['blog_270x406'] ?>" class="cover-img" alt="">
                                    </a>
                                    <span class="blog-item__date font-12"> <?php echo $data['blog_date'] ?></span>
                                </div>
                                <div class="blog-item__content">
                                    <ul class="text-list border-0 p-0 flx-align">
                                        <li class="text-list__item font-12">
                                            <span class="icon text-gradient"><i class="far fa-user"></i></span>
                                            <a href="#" class="link"><?php echo $data['personnel_name'] ?></a>
                                        </li>
                                        <li class="text-list__item font-12">
                                            <span class="icon text-gradient"><i class="far fa-comments"></i></span>
                                            <a href="#" class="link">Yorum (05)</a>
                                        </li>
                                    </ul>
                                    <h5 class="blog-item__title">
                                        <a href="blog-details.php?<?php echo $url ?>" class="blog-item__title-link"> <?php echo $data['blog_post_title'] ?> </a>
                                    </h5>
                                    <p class="blog-item__desc font-18"> <?php echo $data['blog_post_short_description'] ?> </p>
                                    <a href="blog-details.php?<?php echo $url ?>" class="btn btn-outline-main btn-outline-main-white">Daha Fazla!
                                        <span class="icon-right icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                    <?php
                            $sn++;
                        }
                    } else {
                        echo $fetchDataBlogDetails;
                    } ?>
                </div>
                <div class="col-lg-4">
                    <!-- ============================= Blog Sidebar Start ======================== -->
                    <div class="common-sidebar-wrapper">
                        <div class="common-sidebar p-0">
                            <form action="#" autocomplete="off">
                                <div class="search-box style-two w-100">
                                    <input type="text" class="common-input" placeholder="Ara!">
                                    <button type="submit" class="icon"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> Kategori </h6>
                            <ul class="category-list">
                                <?php
                                if (is_array($categories)) {
                                    foreach ($categories as $category) {
                                ?>
                                        <li class="category-list__item">
                                            <a href="blog-classic.php?category_name=<?php echo $category ?>" class="category-list__link flx-between">
                                                <span class="text"><?php echo $category ?></span>
                                            </a>
                                        </li>
                                <?php
                                    }
                                } else {
                                    echo $categories;
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> Son Bloglar </h6>
                            <?php
                            if (is_array($fetchDataBlogDetailsLimit3)) {
                                $sn = 1;
                                foreach ($fetchDataBlogDetailsLimit3 as $data) {

                                    $for_other_blog_table_id = $data['blog_id'];
                                    $fetchDataBlogPhotos = fetch_data_blog_photos($db, $tableNameBlogPhotos, $columnsBlogPhotos, $for_other_blog_table_id);

                                    $blog_category = $data['blog_post_category'];
                                    $blog_name_url = $data['blog_post_title'];
                                    $blog_id_url = $data['blog_id'];

                                    $blog_category = cleanTurkishCharacters($blog_category);
                                    $seo_name = cleanTurkishCharacters($blog_name_url);

                                    // SEO uyumlu URL'yi oluştur
                                    $url = "/$blog_category" . "/$seo_name" . "/$blog_id_url";
                            ?>
                                    <div class="latest-blog">
                                        <div class="latest-blog__thumb">
                                            <a href="blog-details.php?<?php echo $url ?>"> <img src="admin/<?php echo $fetchDataBlogPhotos['blog_82x112'] ?>" class="cover-img" alt=""></a>
                                        </div>
                                        <div class="latest-blog__content">
                                            <span class="latest-blog__category font-12 flx-align gap-1">
                                                <span class="icon text-gradient"><i class="fas fa-folder-open"></i></span>
                                                <?php echo $data['blog_post_category'] ?></span>
                                            <h6 class="latest-blog__title">
                                                <a href="blog-details.php?<?php echo $url ?>"><?php echo $data['blog_post_title'] ?></a>
                                            </h6>
                                        </div>
                                    </div>
                            <?php
                                    $sn++;
                                }
                            } else {
                                echo $fetchDataBlogDetailsLimit3;
                            } ?>

                        </div>
                    </div>
                    <!-- ============================= Blog Sidebar End ======================== -->
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= Blog Classic Section End ======================== -->




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