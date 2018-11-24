<body>



<!-- Top Header-Profile -->

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="top-header">
                    <div class="top-header-thumb profile-background">
                        <img src="<? echo base_url();?>assets/img/background.jpg" alt="nature">
                    </div>
                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5  col-sm-5 col-5">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="/companyProfile/main">정보</a>
                                    </li>

                                    <li>
                                        <a href="/companyProfile/empl">팀원 또는 직원</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 ml-auto col-md-5 col-sm-5 col-5">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="/companyProfile/jobOffer">구직 정보</a>
                                    </li>
                                    <li>
                                        <a href="/companyProfile/setting">설정</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="control-block-button">


                            <div class="btn btn-control bg-purple more">
                                <svg class="olymp-chat---messages-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <!--                                    <li>-->
                                    <!--                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">팀빌딩 신청</a>-->
                                    <!--                                    </li>-->
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">쪽지 보내기</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn btn-control bg-primary more">
                                <svg class="olymp-settings-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">프로필 사진 업로드</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">배경 사진 업로드</a>
                                    </li>
                                    <li>
                                        <a href="/profile/edit/profile1">설정</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-header-author">
                        <a href="<? echo $this->session->userImage ?>" class="author-thumb">
                            <img src="<? echo $this->session->userImage ?>" style="width: 124px; height: 124px;"alt="author">
                        </a>
                        <div class="author-content">
                            <a href="/profile/main" class="h4 author-name"><? echo $this->session->custName ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Top Header-Profile -->
<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <form class="w-search">
                        <div class="form-group with-button">
                            <input class="form-control" type="text" placeholder="Search Friends...">
                            <button>
                                <svg class="olymp-magnifying-glass-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-magnifying-glass-icon')?>"></use></svg>
                            </button>
                        </div>
                    </form>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Friends -->

<div class="container">
    <div class="row">
        <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">

                <!-- Friend Item -->

                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<?= site_url('assets/img/friend2.jpg')?>" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Report Profile</a>
                                </li>
                                <li>
                                    <a href="#">Block Profile</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="<?= site_url('assets/img/user5.jpg')?>" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/profile1')?>" class="h5 author-name">이현호</a>
                                <div class="country">대구광역시 달성군</div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">

                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        구직 중입니다! 사업PM 찾으시는 분들 연락주세요!
                                    </p>

                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>Friends Since:</span>
                                        <div class="h6">December 2014</div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item -->			</div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">

                <!-- Friend Item -->

                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<?= site_url('assets/img/friend2.jpg')?>" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Report Profile</a>
                                </li>
                                <li>
                                    <a href="#">Block Profile</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="<?= site_url('assets/img/user5.jpg')?>" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/profile1')?>" class="h5 author-name">이현호</a>
                                <div class="country">대구광역시 달성군</div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">

                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        구직 중입니다! 사업PM 찾으시는 분들 연락주세요!
                                    </p>

                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>Friends Since:</span>
                                        <div class="h6">December 2014</div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item -->			</div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">

                <!-- Friend Item -->

                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<?= site_url('assets/img/friend2.jpg')?>" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Report Profile</a>
                                </li>
                                <li>
                                    <a href="#">Block Profile</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="<?= site_url('assets/img/user5.jpg')?>" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/profile1')?>" class="h5 author-name">이현호</a>
                                <div class="country">대구광역시 달성군</div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">

                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        구직 중입니다! 사업PM 찾으시는 분들 연락주세요!
                                    </p>

                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>Friends Since:</span>
                                        <div class="h6">December 2014</div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item -->			</div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">

                <!-- Friend Item -->

                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<?= site_url('assets/img/friend2.jpg')?>" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Report Profile</a>
                                </li>
                                <li>
                                    <a href="#">Block Profile</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="<?= site_url('assets/img/user5.jpg')?>" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/profile1')?>" class="h5 author-name">이현호</a>
                                <div class="country">대구광역시 달성군</div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">

                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        구직 중입니다! 사업PM 찾으시는 분들 연락주세요!
                                    </p>

                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>Friends Since:</span>
                                        <div class="h6">December 2014</div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item -->			</div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">

                <!-- Friend Item -->

                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<?= site_url('assets/img/friend2.jpg')?>" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Report Profile</a>
                                </li>
                                <li>
                                    <a href="#">Block Profile</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="<?= site_url('assets/img/user5.jpg')?>" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/profile1')?>" class="h5 author-name">이현호</a>
                                <div class="country">대구광역시 달성군</div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">

                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        구직 중입니다! 사업PM 찾으시는 분들 연락주세요!
                                    </p>

                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>Friends Since:</span>
                                        <div class="h6">December 2014</div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item -->			</div>
        </div>
        <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">

                <!-- Friend Item -->

                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<?= site_url('assets/img/friend2.jpg')?>" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Report Profile</a>
                                </li>
                                <li>
                                    <a href="#">Block Profile</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                            </ul>
                        </div>
                        <div class="friend-avatar">
                            <div class="author-thumb">
                                <img src="<?= site_url('assets/img/user5.jpg')?>" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/profile1')?>" class="h5 author-name">이현호</a>
                                <div class="country">대구광역시 달성군</div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">

                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <a href="#" class="btn btn-control bg-blue">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        구직 중입니다! 사업PM 찾으시는 분들 연락주세요!
                                    </p>

                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>Friends Since:</span>
                                        <div class="h6">December 2014</div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item -->			</div>
        </div>
    </div>
</div>

<!-- ... end Friends -->




<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
    <div class="modal-dialog window-popup update-header-photo" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <div class="modal-body">
                <a href="#" class="upload-photo-item">
                    <svg class="olymp-computer-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-computer-icon')?>"></use></svg>

                    <h6>Upload Photo</h6>
                    <span>Browse your computer.</span>
                </a>


            </div>
        </div>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<!-- ... end Window-popup Choose from my Photo -->


<a class="back-to-top" href="#">
    <img src="<?= site_url('assets/svg_icons/back-to-top.svg')?>" alt="arrow" class="back-icon">
</a>





</body>
</html>