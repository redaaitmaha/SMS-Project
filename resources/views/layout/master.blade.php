<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ URL::asset('assets/colors/color1.css') }}" />

</head>

<body class="app sidebar-mini ltr light-mode">




    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ URL::asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo"
                                alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead"
                                placeholder="Search for results..." autocomplete="off">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">English</span>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->

                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div
                                                            class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">New Application
                                                                received
                                                            </h5>
                                                            <span class="notification-subtext">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div
                                                            class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                            <i class="fe fe-check-circle"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Project has been
                                                                approved</h5>
                                                            <span class="notification-subtext">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div
                                                            class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                            <i class="fe fe-shopping-cart"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Your Product Delivered
                                                            </h5>
                                                            <span class="notification-subtext">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                            <i class="fe fe-user-plus"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Friend Requests</h5>
                                                            <span class="notification-subtext">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="notify-list.html"
                                                    class="dropdown-item text-center p-3 text-muted">View all
                                                    Notification</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                        <div class="dropdown  d-flex message">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5
                                                            Messages</h6>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0)"
                                                                class="text-muted p-0 fs-12">make all unread</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message-menu message-menu-scroll">
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/1.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Peter Theil</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    6:45 am
                                                                </small>
                                                            </div>
                                                            <span>Commented on file Guest list....</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/15.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Abagael Luth</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    10:35 am
                                                                </small>
                                                            </div>
                                                            <span>New Meetup Started......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/12.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Brizid Dawson</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    2:17 pm
                                                                </small>
                                                            </div>
                                                            <span>Brizid is in the Warehouse...</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/4.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Shannon Shaw</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>New Product Realease......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="../assets/images/users/3.jpg"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Cherry Blossom</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>You have appointment on......</span>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-item text-center p-3 text-muted">See all
                                                    Messages</a>
                                            </div>
                                        </div>
                                        <!-- MESSAGE-BOX -->

                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex">
                                                <img src="../assets/images/users/21.jpg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">

                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                                            {{ Auth::user()->name }}</h5>
                                                        <small class="text-muted">{{ Auth::user()->email }}</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                @guest
                                                    @if (Route::has('login'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                    @endif

                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i>
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{ URL::asset('assets/images/brand/logo.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ URL::asset('assets/images/brand/logo-1.png') }}"
                                class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{ URL::asset('assets/images/brand/logo-2.png') }}"
                                class="header-brand-img light-logo" alt="logo">
                            <img src="{{ URL::asset('assets/images/brand/logo-3.png') }}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('dashboard') }}"><i class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>UI Kit</h3>




                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                                        class="side-menu__icon bi-bank"></i><span
                                        class="side-menu__label">Grades</span></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Grades</a></li>
                                    <li><a href="{{ route('grades.index') }}" class="slide-item">Grades</a></li>
                                </ul>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Class rooms</a></li>
                                    <li><a href=" {{ route('classroom.index') }} " class="slide-item"> Class
                                            rooms</a></li>
                                </ul>
                            </li>






                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon icon icon-people"></i><span
                                        class="side-menu__label">Students</span></a>
                            </li>


                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon  icon icon-graduation"></i><span
                                        class="side-menu__label">Teachers</span></a>
                            </li>



                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon icon icon-calendar"></i><span
                                        class="side-menu__label">Schedule</span></a>
                            </li>


                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon icon icon-book-open"></i><span
                                        class="side-menu__label">Courses</span></a>
                            </li>



                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon icon icon-notebook"></i><span
                                        class="side-menu__label">Exams</span></a>
                            </li>




                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon icon icon-briefcase"></i><span
                                        class="side-menu__label">Administration</span></a>
                            </li>













                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->


            <!-- PAGE-HEADER -->

            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->

            <!-- ROW-1 END -->

            <!-- ROW-2 -->

            <!-- ROW-2 END -->

            <!-- ROW-3 -->

            <!-- ROW-3 END -->

            <!-- ROW-4 -->

            <!-- ROW-4 END -->


            <!-- Sidebar-right -->

            <!--/Sidebar-right-->

            <!-- Country-selector modal-->
            <div class="modal fade" id="country-selector">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content country-select-modal">
                        <div class="modal-header">
                            <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                                data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <ul class="row p-3">
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/us_flag.jpg"
                                                class="me-3 language"></span>USA
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/italy_flag.jpg"
                                                class="me-3 language"></span>Italy
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/spain_flag.jpg"
                                                class="me-3 language"></span>Spain
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/india_flag.jpg"
                                                class="me-3 language"></span>India
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/french_flag.jpg"
                                                class="me-3 language"></span>French
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/russia_flag.jpg"
                                                class="me-3 language"></span>Russia
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/germany_flag.jpg"
                                                class="me-3 language"></span>Germany
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/argentina.jpg"
                                                class="me-3 language"></span>Argentina
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/malaysia.jpg"
                                                class="me-3 language"></span>Malaysia
                                    </a>
                                </li>
                                <li class="col-lg-6 mb-2">
                                    <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                src="../assets/images/flags/turkey.jpg"
                                                class="me-3 language"></span>Turkey
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Country-selector modal-->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed
                            with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko
                            </a> All
                            rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

        </div>

        @yield('content')

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>



        @yield('ajaxScirpt')

        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
        <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/horizontal-menu.js"></script>
        <script src="app-assets/js/core/app-menu.js"></script>
        <script src="app-assets/js/core/app.js"></script>
        <script src="app-assets/js/scripts/components.js"></script>
        <script src="app-assets/js/scripts/footer.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/forms/form-repeater.js"></script>
        <!-- END: Page JS-->



        <!-- JQUERY JS -->
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <!-- BOOTSTRAS -->
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- SPARKLINS-->
        <script src="{{ URL::asset('assets/js/jquery.sparkline.min.js') }}"></script>
        <!-- Sticky j->
    <script src="assets/js/sticky.js"></script>
    <!-- CHART-CIE JS-->
        <script src="{{ URL::asset('assets/js/circle-progress.min.js') }}"></script>

        <!-- PIETY CH JS-->
        <script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
        <!-- SIDEBAR -->
        <script src="{{ URL::asset('assets/plugins/sidebar/sidebar.js') }}"></script>
        <!-- Perfect OLLBAR JS-->
        <script src="{{ URL::asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>
        <!-- INTERNALARTJS CHART JS-->
        <script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/chart/rounded-barchart.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
        <!-- INTERNALLECT2 JS -->
        <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <!-- INTERNALta tables js-->
        <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <!-- INTERNALEXCHART JS -->
        <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/apexchart/irregular-data-series.js') }}"></script>
        <!-- INTERNALot JS -->
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/dashboard.sampledata.js') }}"></script>
        <!-- INTERNALctor js -->
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- SIDE-MENS-->
        <script src="{{ URL::asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
        <!-- TypeHead -->
        <script src="{{ URL::asset('assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
        <script src="{{ URL::asset('assets/js/typehead.js') }}"></script>

        <!-- INTERNALDEX JS -->
        <script src="{{ URL::asset('assets/js/index1.js') }}"></script>
        <!-- Color Theme js -->
        <script src="{{ URL::asset('assets/js/themeColors.js') }}"></script>

        <!-- CUSTOM JS -->
        <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
