<!DOCTYPE html>
<html lang="en">
<head>

    <title>Company Page - About Us</title>

</head>
<body class="body-bg-white">


<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">


    <!-- Header Standard Landing  -->

    <div class="header--standard header--standard-landing" id="header--standard">
        <div class="container">
            <div class="header--standard-wrap">

                <a href="#" class="logo">
                    <div class="img-wrap">
                        <img src="<? echo base_url(); ?>assets/img/logo.png" alt="Olympus">
                        <img src="<? echo base_url(); ?>assets/img/logo-colored-small.png" alt="Olympus"
                             class="logo-colored">
                    </div>
                    <div class="title-block">
                        <h6 class="logo-title">Daerida</h6>
                        <div class="sub-title">스타트업 정보제공 서비스</div>
                    </div>
                </a>

                <a href="#" class="open-responsive-menu js-open-responsive-menu">
                    <svg class="olymp-menu-icon">
                        <use xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg#olymp-menu-icon"></use>
                    </svg>
                </a>

                <div class="nav nav-pills nav1 header-menu expanded-menu">
                    <div class="mCustomScrollbar">
                        <ul>
                            <li class="nav-item">
                                <a href="<?= site_url('intro/main') ?>" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('intro/profile') ?>" class="nav-link">Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('intro/company') ?>" class="nav-link">Company</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('intro/contactUs') ?>" class="nav-link">Contace us</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('main/login') ?>" class="nav-link">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

    <div class="stunning-header-content">
        <h1 class="stunning-header-title">팀 소개</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="#">Home</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>
            <li class="breadcrumbs-item active">
                <span>팀 소개</span>
            </li>
        </ul>
    </div>

    <div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="pt120">
    <div class="container">
        <div class="row mb60">
            <div class="col col-xl-5 col-lg-5 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading align-center">
                    <div class="heading-sup-title">프로젝트 데리다</div>
                    <h2 class="heading-title">THE TEAM 239</h2>
                    <p class="heading-text">대구소프트웨어고등학교 & 푸른들소프트 산학협력 프로젝트</p>
                </div>
            </div>
        </div>

        <div class="info-box-wrap">
            <div class="row">
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box" data-mh="box--classic">
                        <div class="info-box-image">
                            <img src="<? echo base_url(); ?>assets/img/screen01.png">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">프로젝트 기획</h3>
                            <p class="info-box-text">대구지역의 스타트업 네트워크, 창업 생태계 조성, 활성화의 목적으로 하여 학생들의 도전정신과 아이디어를 통한 프로젝트
                                기획</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box" data-mh="box--classic">
                        <div class="info-box-image">
                            <img src="<? echo base_url(); ?>assets/img/screen02.png">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">프레임워크 구축</h3>
                            <p class="info-box-text">MVC 디자인 패턴, 소프트웨어의 개발방법 공식화 CodeIgniter (PHP 7.0)를 통한 실제 MVC패턴 프로젝트
                                구축 실습</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box" data-mh="box--classic">
                        <div class="info-box-image">
                            <img src="<? echo base_url(); ?>assets/img/screen04.png">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">소스 / 기능 개발</h3>
                            <p class="info-box-text">웹 프로젝트 기획 및 설계부터 형상관리, 기능 개발, 모듈 개발, 테스트 및 이행까지 웹 개발 전반의 흐름에 대한
                                실습</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>

            </div>
        </div>

    </div>
</section>


<section class="medium-padding180 bg-body">
    <div class="container">
        <div class="row">
            <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12  m-auto">
                <div class="crumina-module crumina-heading">
                    <div class="heading-sup-title">프로젝트 데리다</div>
                    <h2 class="heading-title">팀명이 왜 <span class="c-primary">239</span> 인가요?</h2>
                    <p class="heading-text">우리의 프로젝트 리더의 이름이 이상구입니다. 이상구 이상구 이상구 이삼구 이삼구 239 239가 되었습니다.
                    </p>
                </div>
            </div>

            <div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12  align-right">
                <img src="<? echo base_url(); ?>assets/img/screen03.png" alt="screen" class="negative-margin-right150">
            </div>
        </div>

    </div>
</section>


<!-- Footer Full Width -->
<div class="footer footer-full-width" id="footer">
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-6 col-6">


                <!-- Widget About -->

                <div class="widget w-about">

                    <a href="02-ProfilePage.html" class="logo">
                        <div class="img-wrap">
                            <img src="<? echo base_url(); ?>assets/img/logo-colored-small.png" alt="Daerida">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">Daerida</h6>
                        </div>
                    </a>
                    <p>소중한 당신을 위한 스타트업 정보 서비스 데리다!</p>
                    <ul class="socials">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>

                </div>

                <!-- ... end Widget About -->

            </div>

            <div class="nav nav-pills nav1 header-menu expanded-menu">
                <div class="mCustomScrollbar">
                    <ul>
                        <li class="nav-item">
                            <a href="<?= site_url('intro/main') ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('intro/profile') ?>" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('intro/company') ?>" class="nav-link">Company</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('intro/contactUs') ?>" class="nav-link">Contace us</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('main/login') ?>" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- SUB Footer -->

                <div class="sub-footer-copyright">
					<span>
						Copyright <a href="index.html">Daerida Buddypress + WP</a> All Rights Reserved 2017
					</span>
                </div>

                <!-- ... end SUB Footer -->

            </div>
        </div>
    </div>
</div>

<!-- ... end Footer Full Width -->
<a class="back-to-top" href="#">
    <img src="<? echo base_url(); ?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

</body>
</html>