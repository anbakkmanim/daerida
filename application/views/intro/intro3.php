<!DOCTYPE html>
<html lang="en">
<head>

    <title>Company Page - Contacts</title>

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
                        <h6 class="logo-title">DAERIDA</h6>
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
        <h1 class="stunning-header-title">소통하기</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item active">
                <span>개발자들과 소통</span>
            </li>
        </ul>
    </div>

    <div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="mt-0">
    <div class="section">
        <div id="map" style="height: 480px"></div>
        <script>
            var map;

            function initMap() {

                var myLatLng = {lat: 35.663106, lng: 128.412086};

                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 17,

                    styles: [
                        {"elementType": "geometry", "stylers": [{"color": "#f5f5f5"}]},
                        {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
                        {"elementType": "labels.text.fill", "stylers": [{"color": "#616161"}]},
                        {"elementType": "labels.text.stroke", "stylers": [{"color": "#f5f5f5"}]},
                        {
                            "featureType": "administrative.land_parcel",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#bdbdbd"}]
                        },
                        {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#eeeeee"}]},
                        {"featureType": "poi", "elementType": "labels.text.fill", "stylers": [{"color": "#757575"}]},
                        {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#e5e5e5"}]},
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#9e9e9e"}]
                        },
                        {"featureType": "road", "elementType": "geometry", "stylers": [{"color": "#ffffff"}]},
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#757575"}]
                        },
                        {"featureType": "road.highway", "elementType": "geometry", "stylers": [{"color": "#dadada"}]},
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#616161"}]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#9e9e9e"}]
                        },
                        {"featureType": "transit.line", "elementType": "geometry", "stylers": [{"color": "#e5e5e5"}]},
                        {
                            "featureType": "transit.station",
                            "elementType": "geometry",
                            "stylers": [{"color": "#eeeeee"}]
                        },
                        {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#c9c9c9"}]},
                        {"featureType": "water", "elementType": "labels.text.fill", "stylers": [{"color": "#9e9e9e"}]}
                    ],

                    scrollwheel: false//set to true to enable mouse scrolling while inside the map area
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: {
                        url: "img/map-marker.png",
                        scaledSize: new google.maps.Size(36, 54)
                    }

                });

            }


        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&callback=initMap"
                async defer>
        </script>
    </div>
</section>


<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                <!-- Contact Item -->

                <div class="contact-item-wrap">
                    <h3 class="contact-title">위치정보</h3>
                    <div class="contact-item">
                        <h6 class="sub-title">Address:</h6>
                        <a href="#">대구광역시 달성군 구지면 창리로11길 93</a>
                    </div>
                    <div class="contact-item">
                        <h6 class="sub-title">General Inquiries:</h6>
                        <a href="mailto:">daerida-help@daerida.com</a>
                    </div>
                </div>

                <!-- ... end Contact Item -->
            </div>

            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                <!-- Contact Item -->

                <div class="contact-item-wrap">
                    <h3 class="contact-title">일반문의</h3>
                    <div class="contact-item">
                        <h6 class="sub-title">Daerida-helper:</h6>
                        <a href="mailto:">daerida-helper@daerida.com</a>
                    </div>
                    <div class="contact-item">
                        <h6 class="sub-title">Skype:</h6>
                        <a href="#">Daerida</a>
                    </div>
                </div>

                <!-- ... end Contact Item -->

            </div>
            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                <!-- Contact Item -->

                <div class="contact-item-wrap">
                    <h3 class="contact-title">사업문의</h3>
                    <div class="contact-item">
                        <h6 class="sub-title">Helper:</h6>
                        <a href="mailto:">Daerida-infos@Daerida.com</a>
                    </div>
                    <div class="contact-item">
                        <h6 class="sub-title">Skype:</h6>
                        <a href="#">Daerida</a>
                    </div>
                </div>

                <!-- ... end Contact Item -->

            </div>
            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                <!-- Contact Item -->

                <div class="contact-item-wrap">
                    <h3 class="contact-title">기술문의</h3>
                    <div class="contact-item">
                        <h6 class="sub-title">YJ:</h6>
                        <a href="mailto:">daerida-skill-info@daerida.com</a>
                    </div>
                    <div class="contact-item">
                        <h6 class="sub-title">Skype:</h6>
                        <a href="#">ByjDck</a>
                    </div>
                </div>

                <!-- ... end Contact Item -->

            </div>
        </div>
    </div>
</section>


<section class="medium-padding120 bg-body contact-form-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12  m-auto">


                <!-- Contacts Form -->

                <div class="contact-form-wrap">
                    <div class="contact-form-thumb">
                        <h2 class="title">이메일로 <span>소통하기</span></h2>
                        <p>데리다에 대한 일반적인 질문이 있습니까? 이메일을 보내 주시면 최대한 빨리 대답해 드리겠습니다!</p>
                        <img src="<? echo base_url(); ?>assets/img/crew.png" alt="crew" class="crew">
                    </div>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">성</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">이름</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" type="email">
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">사유</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">내용</label>
                                    <textarea class="form-control"></textarea>
                                </div>

                                <button class="btn btn-purple btn-lg full-width">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- ... end Contacts Form -->

            </div>
        </div>
    </div>

    <div class="half-height-bg bg-white"></div>
</section>


<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
                <a href="<?= site_url('main/login') ?>" class="btn btn-primary btn-lg">소중한 사람들을 데리다!</a>
            </div>
        </div>
    </div>
    <img class="first-img" alt="guy" src="<? echo base_url(); ?>assets/img/guy.png">
    <img class="second-img" alt="rocket" src="<? echo base_url(); ?>assets/img/rocket1.png">
    <div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->

<!-- Footer Full Width -->

<!-- ... end Footer Full Width -->


<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo"
     aria-hidden="true">

    <div class="modal-content">
        <div class="modal-header">
            <span class="icon-status online"></span>
            <h6 class="title">Chat</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon">
                    <use xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                </svg>
                <svg class="olymp-little-delete js-chat-open">
                    <use xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use>
                </svg>
            </div>
        </div>
        <div class="modal-body">
            <div class="mCustomScrollbar">
                <ul class="notification-list chat-message chat-message-field">
                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url(); ?>assets/img/avatar14-sm.jpg" alt="author"
                                 class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                            <span class="notification-date"><time class="entry-date updated"
                                                                  datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url(); ?>assets/img/author-page.jpg" alt="author"
                                 class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">Don’t worry Mathilda!</span>
                            <span class="chat-message-item">I already bought everything</span>
                            <span class="notification-date"><time class="entry-date updated"
                                                                  datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url(); ?>assets/img/avatar14-sm.jpg" alt="author"
                                 class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                            <span class="notification-date"><time class="entry-date updated"
                                                                  datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                        </div>
                    </li>
                </ul>
            </div>

            <form class="need-validation">

                <div class="form-group label-floating is-empty">
                    <label class="control-label">Press enter to post...</label>
                    <textarea class="form-control" placeholder=""></textarea>
                    <div class="add-options-message">
                        <a href="#" class="options-message">
                            <svg class="olymp-computer-icon">
                                <use xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg#olymp-computer-icon"></use>
                            </svg>
                        </a>
                        <div class="options-message smile-block">

                            <svg class="olymp-happy-sticker-icon">
                                <use xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg#olymp-happy-sticker-icon"></use>
                            </svg>

                            <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat1.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat2.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat3.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat4.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat5.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat6.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat7.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat8.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat9.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat10.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat11.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat12.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat13.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat14.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat15.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat16.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat17.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat18.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat19.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat20.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat21.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat22.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat23.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat24.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat25.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat26.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<? echo base_url(); ?>assets/img/icon-chat27.png" alt="icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

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
    <a class="back-to-top" href="#">
        <img src="<? echo base_url(); ?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
    </a>


</body>
</html>