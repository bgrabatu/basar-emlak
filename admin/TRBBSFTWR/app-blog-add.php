<?php
include '../php/adminpanel.php';
include "../php/sessionControl.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Blog Ekle | Başar Emlak - Yönetim Paneli </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico" />
    <link href="../layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/modern-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/plugins/src/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">

    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/light/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/light/apps/invoice-add.css" rel="stylesheet" type="text/css" />

    <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/dark/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/dark/apps/invoice-add.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

</head>

<body class="layout-boxed">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <a href="javascript:void(0);" class="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </a>

            <div class="search-animated toggle-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Arama...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </form>
                <span class="badge badge-secondary">Ctrl + /</span>
            </div>

            <ul class="navbar-item flex-row ms-lg-auto ms-0">


                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </a>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>Shaun Park</h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user-profile.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span>Profil</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth-boxed-signin.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Çıkış Yap</span>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.php">
                                <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.php" class="nav-link"> BAŞAR </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                                <polyline points="11 17 6 12 11 7"></polyline>
                                <polyline points="18 17 13 12 18 7"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="profile-info">
                    <div class="user-info">
                        <div class="profile-img">
                            <img src="../src/assets/img/profile-30.png" alt="avatar">
                        </div>
                        <div class="profile-content">
                            <h6 class=""><?php echo ($_SESSION['personnel_name'] . " " . $_SESSION['personnel_surname'])  ?></h6>
                            <p class="">Admin</p>
                        </div>
                    </div>
                </div>

                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Yönetim Paneli</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled " id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./index.php"> Analitik </a>
                            </li>
                            <li>
                                <a href="./index2.php"> Satış </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>UYGULAMALAR</span></div>
                    </li>


                    <li class="menu">
                        <a href="./app-personnel.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>Personel</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#branch" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="currentColor" d="M192 128v704h384V128H192zm-32-64h448a32 32 0 0 1 32 32v768a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V96a32 32 0 0 1 32-32z">
                                        </path>
                                        <path fill="currentColor" d="M256 256h256v64H256v-64zm0 192h256v64H256v-64zm0 192h256v64H256v-64zm384-128h128v64H640v-64zm0 128h128v64H640v-64zM64 832h896v64H64v-64z">
                                        </path>
                                        <path fill="currentColor" d="M640 384v448h192V384H640zm-32-64h256a32 32 0 0 1 32 32v512a32 32 0 0 1-32 32H608a32 32 0 0 1-32-32V352a32 32 0 0 1 32-32z">
                                        </path>
                                    </g>
                                </svg>
                                <span>Şube</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="branch" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-branch-list.php"> Şubeler </a>
                            </li>
                            <li>
                                <a href="./app-branch-add.php"> Şube Ekle </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#property" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span>Mülkler</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="property" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-property-list.php"> Mülk Listesi </a>
                            </li>
                            <li>
                                <a href="./app-property-add.php"> Mülk Ekle </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu active">
                        <a href="#blog" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: none;
                                                    stroke: currentColor;
                                                    stroke-miterlimit: 10;
                                                    stroke-width: 1.92px;
                                                }
                                            </style>
                                        </defs>
                                        <g id="roll_brush" data-name="roll brush">
                                            <line class="cls-1" x1="5.24" y1="11.08" x2="18.66" y2="11.08"></line>
                                            <line class="cls-1" x1="5.24" y1="18.76" x2="18.66" y2="18.76"></line>
                                            <line class="cls-1" x1="5.24" y1="14.92" x2="18.66" y2="14.92"></line>
                                            <rect class="cls-1" x="1.4" y="1.49" width="21.1" height="21.1"></rect>
                                            <polygon class="cls-1" points="22.5 7.25 16.23 7.25 14.31 7.25 1.4 7.25 1.4 1.49 22.5 1.49 22.5 7.25"></polygon>
                                            <line class="cls-1" x1="4.28" y1="4.37" x2="6.2" y2="4.37"></line>
                                            <line class="cls-1" x1="8.11" y1="4.37" x2="10.03" y2="4.37"></line>
                                            <line class="cls-1" x1="11.95" y1="4.37" x2="13.87" y2="4.37"></line>
                                        </g>
                                    </g>
                                </svg>
                                <span>Blog</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="blog" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-blog-list.php"> Blog Listesi </a>
                            </li>
                            <li class="active">
                                <a href="./app-blog-add.php"> Blog Ekle </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#comment" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>comment-2</title>
                                        <desc>Created with Sketch Beta.</desc>
                                        <defs> </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-152.000000, -255.000000)" fill="currentColor">
                                                <path d="M168,281 C166.832,281 165.704,280.864 164.62,280.633 L159.912,283.463 L159.975,278.824 C156.366,276.654 154,273.066 154,269 C154,262.373 160.268,257 168,257 C175.732,257 182,262.373 182,269 C182,275.628 175.732,281 168,281 L168,281 Z M168,255 C159.164,255 152,261.269 152,269 C152,273.419 154.345,277.354 158,279.919 L158,287 L165.009,282.747 C165.979,282.907 166.977,283 168,283 C176.836,283 184,276.732 184,269 C184,261.269 176.836,255 168,255 L168,255 Z M175,266 L161,266 C160.448,266 160,266.448 160,267 C160,267.553 160.448,268 161,268 L175,268 C175.552,268 176,267.553 176,267 C176,266.448 175.552,266 175,266 L175,266 Z M173,272 L163,272 C162.448,272 162,272.447 162,273 C162,273.553 162.448,274 163,274 L173,274 C173.552,274 174,273.553 174,273 C174,272.447 173.552,272 173,272 L173,272 Z" id="comment-2" sketch:type="MSShapeGroup"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>Yorumlar</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="comment" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-comment-list.php"> Yorum Listesi </a>
                            </li>
                        </ul>
                    </li>



                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row invoice layout-top-spacing layout-spacing">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="doc-container">
                                <form action="app-blog-add.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-xl-9">

                                            <div class="invoice-content">
                                                <div class="invoice-detail-body">
                                                    <div class="invoice-detail-header">

                                                        <div class="row justify-content-between">
                                                            <div class="col-xl-12 invoice-address-company">
                                                                <h4>Blog Bilgileri:-</h4>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="invoice-detail-terms">

                                                        <div class="row justify-content-between">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="personnel_id" class="mb-2">Personel ID</label>
                                                                    <input type="text" name="personnel_id" class="form-control form-control-sm" id="personnel_id" value="<?php echo $_SESSION['personnel_id'] ?>" readonly>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="personnel_name" class="mb-2">Personel Adi Soyadi</label>
                                                                    <input type="text" class="form-control form-control-sm" name="personnel_name" id="personnel_name" value="<?php echo $_SESSION['personnel_name'] ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="invoice-detail-terms">

                                                        <div class="row justify-content-between">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-group">
                                                                    <label for="blog_post_title" class="mb-2">Blog Post Basligi</label>
                                                                    <input type="text" name="blog_post_title" class="form-control form-control-sm" id="blog_post_title">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-12 align-self-center mb-3">
                                                                <div class="form-group row invoice-note">
                                                                    <label for="blog_post_short_description" class="col-sm-12 col-form-label col-form-label-sm">Blog Post Kisa Aciklama</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea class="form-control" id="blog_post_short_description" name="blog_post_short_description" style="height: 88px;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="invoice-detail-terms">

                                                        <div class="row justify-content-between">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-group mb-6">
                                                                    <label for="blog_content_first_title" class="mb-2">Blog Icerigi Ilk Basligi</label>
                                                                    <input type="text" name="blog_content_first_title" class="form-control form-control-sm" id="blog_content_first_title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 align-self-center mb-3">
                                                                <div class="form-group row invoice-note">
                                                                    <label for="blog_content_first_description" class="col-sm-12 col-form-label col-form-label-sm">Blog Icerigi Ilk Aciklama</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea class="form-control" id="blog_content_first_description" name="blog_content_first_description" style="height: 88px;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-group mb-6">
                                                                    <label for="blog_content_second_title" class="mb-2">Blog Icerigi Ikinci Basligi</label>
                                                                    <input type="text" name="blog_content_second_title" class="form-control form-control-sm" id="blog_content_second_title">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 align-self-center mb-3">
                                                                <div class="form-group row invoice-note">
                                                                    <label for="blog_content_second_description" class="col-sm-12 col-form-label col-form-label-sm">Blog Icerigi Ikinci Aciklama</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea class="form-control" id="blog_content_second_description" name="blog_content_second_description" style="height: 88px;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_content_items_1" class="mb-2">Birinci Icerik Maddesi</label>
                                                                    <input type="text" class="form-control form-control-sm" name="blog_content_items_1" id="blog_content_items_1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_content_items_2" class="mb-2">Ikinci Icerik Maddesi</label>
                                                                    <input type="text" class="form-control form-control-sm" name="blog_content_items_2" id="blog_content_items_2">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_content_items_3" class="mb-2">Ucuncu Icerik Maddesi</label>
                                                                    <input type="text" class="form-control form-control-sm" name="blog_content_items_3" id="blog_content_items_3">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_content_items_4" class="mb-2">Dorduncu Icerik Maddesi</label>
                                                                    <input type="text" class="form-control form-control-sm" name="blog_content_items_4" id="blog_content_items_4">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 align-self-center mb-3">
                                                                <div class="form-group row invoice-note">
                                                                    <label for="blog_content_third_description" class="col-sm-12 col-form-label col-form-label-sm">Blog Icerigi Ucuncu Aciklama</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea class="form-control" id="blog_content_third_description" name="blog_content_third_description" style="height: 88px;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="invoice-detail-terms">

                                                        <div class="row justify-content-between">
                                                            <div class="col-md-12 mb-4">

                                                                <div class="form-group mb-6">
                                                                    <label for="blog_quote" class="mb-2">Blog Alinti Yorumu</label>
                                                                    <input type="text" name="blog_quote" class="form-control form-control-sm" id="blog_quote">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-12">

                                                                <div class="form-group mb-3">
                                                                    <label for="blog_quote_owner" class="mb-2">Blog Alinti Sahibi</label>
                                                                    <input type="text" class="form-control form-control-sm" name="blog_quote_owner" id="blog_quote_owner">
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="invoice-detail-terms">

                                                        <div class="row justify-content-between">
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_270x406" class="mb-2">Blog Sayfasi Ana Fotografi
                                                                        270x406</label>
                                                                    <input type="file" class="form-control form-control-sm" id="blog_270x406" name="blog_270x406">
                                                                </div>
                                                            </div>

                                                            <hr>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_82x112" class="mb-2">Blog Sayfasi Son Bloglar Thumb
                                                                        82x112</label>
                                                                    <input type="file" class="form-control form-control-sm" id="blog_82x112" name="blog_82x112">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_850x546" class="mb-2">Blog Detay Sayfasi Ana Fotografi
                                                                        850x546</label>
                                                                    <input type="file" class="form-control form-control-sm" id="blog_850x546" name="blog_850x546">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <hr>

                                                        <div class="row justify-content-between">
                                                            <div class="col-md-12">
                                                                <div class="form-group mb-3">
                                                                    <label for="blog_300x213" class="mb-2">Blog Detay Sayfasi Ikinci Fotograf 300x213</label>
                                                                    <input type="file" class="form-control form-control-sm" id="blog_300x213" name="blog_300x213">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xl-3">

                                            <div class="invoice-actions">

                                                <div class="invoice-action-tax">

                                                    <h5>Blog Kategorisi</h5>

                                                    <div class="invoice-action-tax-fields">

                                                        <div class="row">

                                                            <div class="col-12">
                                                                <div class="form-group row invoice-created-by">
                                                                    <label for="blog_post_category" class="col-sm-3 col-form-label col-form-label-sm">Kategoriler:</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="blog_post_category" class="form-select country_code  form-control-sm" id="blog_post_category">
                                                                            <option value="">Seciniz</option>
                                                                            <option value="Ev Dekorasyonu">Ev Dekorasyonu</option>
                                                                            <option value="Emlak Piyasası Trendleri">Emlak Piyasası Trendleri</option>
                                                                            <option value="Yatırım İpuçları">Yatırım İpuçları</option>
                                                                            <option value="Ev Satın Alma Rehberi">Ev Satın Alma Rehberi</option>
                                                                            <option value="Kentsel Dönüşüm Haberleri">Kentsel Dönüşüm Haberleri</option>
                                                                            <option value="Taşınma İpuçları">Taşınma İpuçları</option>
                                                                            <option value="Emlak Hukuku ve Yasal Konular">Emlak Hukuku ve Yasal Konular</option>
                                                                            <option value="Bölgesel Emlak Analizleri">Bölgesel Emlak Analizleri</option>
                                                                            <option value="Emlak Sektöründeki Yenilikler">Emlak Sektöründeki Yenilikler</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>



                                                <div class="invoice-action-tax">

                                                    <h5>Mulk Anahtar Kelimeleri</h5>

                                                    <div class="invoice-action-tax-fields">

                                                        <div class="row">

                                                            <div class="col-md-12">

                                                                <div class="form-group mb-3">
                                                                    <input type="text" class="form-control form-control-sm" name="blog_keywords" id="blog_keywords">
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="invoice-action-tax">

                                                    <h5>Blog Durumlari</h5>

                                                    <div class="invoice-action-tax-fields">

                                                        <div class="row">

                                                            <div class="col-12">
                                                                <div class="form-group row invoice-created-by">
                                                                    <label for="blog_publicy" class="col-sm-6 col-form-label col-form-label-sm">
                                                                        Blog Aktiflik:</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-check form-check-primary form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="blog_publicy" checked="" name="blog_publicy">
                                                                            <label class="form-check-label" for="blog_publicy">
                                                                                Checked
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row invoice-created-by">
                                                                    <label for="blog_comment_status" class="col-sm-6 col-form-label col-form-label-sm">
                                                                        Blog Yorum:</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-check form-check-primary form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="blog_comment_status" checked="" name="blog_comment_status">
                                                                            <label class="form-check-label" for="blog_comment_status">
                                                                                Checked
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="invoice-actions-btn">
                                                <div class="invoice-action-btn">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-4">
                                                            <button class="btn btn-primary btn-send" name="blog-add">Blog Add</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/modern-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="../src/plugins/src/flatpickr/flatpickr.js"></script>
    <script src="../src/assets/js/apps/invoice-add.js"></script>
</body>

</html>