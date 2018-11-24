<!DOCTYPE html>
<html lang="en">
<head>

    <title>Company Page - Home</title>

</head>
<body class="body-bg-white">


<div class="main-header main-header-fullwidth main-header-has-header-standard p-b-400">


    <!-- Header Standard Landing  -->

    <div class="header--standard header--standard-landing" id="header--standard">
        <div class="container">
            <div class="header--standard-wrap">

                <a href="#" class="logo">
                    <div class="img-wrap">
                        <img src="<? echo base_url(); ?>assets/img/logo.png" alt="Daerida">
                        <img src="<? echo base_url(); ?>assets/img/logo-colored-small.png" alt="Daerida"
                             class="logo-colored">
                    </div>
                    <div class="title-block">
                        <h6 class="logo-title">데리다</h6>
                        <div class="sub-title">스타트업 정보제공 서비스
                        </div>
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

    <div class="content-bg-wrap bg-landing"></div>

    <div class="container">
        <div class="row display-flex">
            <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 item-align-center">
                <div class="landing-content p-t-180">
                    <h1>최고의 사람을 데리다!</h1>
                    <p>우리는 대구 경북 스타트업 네트워크 서비스인 데리다입니다.</br>
                        생각을 공유하고, 맴버를 모집하고 데리다를 통해 팀을 만들어 보세요!</br>
                        데리다에 오세요!
                    </p>
                    <a href="<?= site_url('main/login') ?>" class="btn btn-md btn-border c-white">회원가입</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Section Img Scale Animation -->

<section class="align-center pt80 section-move-bg-top img-scale-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
                <img class="main-img" src="<? echo base_url(); ?>assets/img/scale1.png" alt="screen">
            </div>
        </div>

        <img class="first-img1" alt="img" src="<? echo base_url(); ?>assets/img/scale2.png">
        <img class="second-img1" alt="img" src="<? echo base_url(); ?>assets/img/scale3.png">
        <img class="third-img1" alt="img" src="<? echo base_url(); ?>assets/img/scale4.png">
    </div>
    <div class="content-bg-wrap bg-section2"></div>
</section>

<!-- ... end Section Img Scale Animation -->

<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="<? echo base_url(); ?>assets/img/icon-fly.png" alt="screen">
            </div>

            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">왜 <span class="c-primary">데리다</span>를 써야할까?</h2>
                    <p class="heading-text">
                        데리다는 함께 일하는 '사람'에 초점을 맞춘 스타트업 맞춤형 서비스입니다.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">언제 어디서든지 </br><span class="c-primary">최고의 인재</span>를 데리다!
                    </h2>
                    <p class="heading-text">언제나 활성화 되어있는 데리다를 이용해 실시간으로 인재와의 만남을 가지세요!
                    </p>
                </div>
            </div>

            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="<? echo base_url(); ?>assets/img/image1.png" alt="screen">
            </div>
        </div>
    </div>
</section>


<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="<? echo base_url(); ?>assets/img/image3.png" alt="screen">
            </div>

            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">마음이 맞는 사람들과 </br><span class="c-primary">팀빌딩</span>
                    </h2>
                    <p class="heading-text">데리다에서 마음이 맞는 사람들과 팀을 만들어 보세요!</br> 그리고 프로젝트를 진행하여 완성하세요!

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section Subscribe Animation -->

<section class="medium-padding100 subscribe-animation scrollme bg-users m-t-100">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading c-white custom-color">
                    <h2 class="h1 heading-title">Daerida Newsletter</h2>
                    <p class="heading-text">Subscribe to be the first one to know about updates, new features and much
                        more!
                    </p>
                </div>


                <!-- Subscribe Form  -->

                <form class="form-inline subscribe-form" method="post">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Enter your email</label>
                        <input class="form-control bg-white" placeholder="" type="email">
                    </div>

                    <button class="btn btn-blue btn-lg">Send</button>
                </form>

                <!-- ... end Subscribe Form  -->

            </div>
        </div>

        <img src="<? echo base_url(); ?>assets/img/paper-plane.png" alt="plane" class="plane">
    </div>
</section>

<!-- ... end Section Subscribe Animation -->


<!-- Section Call To Action Animation -->

<!-- ... end Section Call To Action Animation -->

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