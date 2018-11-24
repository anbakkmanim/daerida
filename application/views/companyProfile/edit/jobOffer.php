
<body class="body-bg-white">


<!-- Top Header-Profile -->
<!--이거 중복되는 거니까 나눠-->
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
                                        <a href="/CompanyProfileEdit/main">설정</a>
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



<!--<section class="blog-post-wrap medium-padding80">-->
<div class="container" style="margin-top: 80px;">
    <div class="row">

        <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ui-block">


                <!-- Post -->

                <article class="hentry blog-post">

                    <div class="post-thumb overflow_hidden">
                        <img src="<?= site_url('assets/img/gryard.jpg') ?>" style="width:400px; height: 225px;" alt="photo" class="post_photo">
                    </div>

                    <div class="post-content">
                        <a href="#" class="post-category bg-blue-light">android</a>
                        <a href="#" class="post-category bg-blue-light">php</a>
                        <a href="#" class="post-category bg-blue-light">web css</a>
                        <a href="<?= site_url('application/views/jobOffer/detail.php'); ?>" class="h4 post-title">239 </a>
                        <p>대구소프트웨어 산학협력 팀
                            속닥속닥
                            대구 경북 지역 스타트업을 위한 팀빌딩 사이트
                        </p>
                        <div class="author-date">
                            <a class="h6 post__author-name fn">신입</a>
                            <a class="h6 post__author-name fn">경력</a>
                        </div>
                        <div class="author-date">
                            <a class="h6 post__author-thumb fn mt_3">연봉 2300 ~ 2500</a>
                        </div>

                        <div class="author-date">
                            <a href="/TeamBuilding/detail" class="btn btn-seoulblue btn-md-2">회사 보기</a>
                        </div>
                    </div>

                </article>

                <!-- ... end Post -->
            </div>
        </div>
        <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ui-block">


                <!-- Post -->

                <article class="hentry blog-post">

                    <div class="post-thumb overflow_hidden">
                        <img src="<?= site_url('assets/img/gryard.jpg') ?>" style="width:400px; height: 225px;" alt="photo" class="post_photo">
                    </div>

                    <div class="post-content">
                        <a href="#" class="post-category bg-blue-light">php</a>
                        <a href="#" class="post-category bg-blue-light">web css</a>
                        <a href="<?= site_url('application/views/jobOffer/detail.php'); ?>" class="h4 post-title">239 </a>
                        <p>대구소프트웨어 산학협력 팀
                            속닥속닥
                            대구 경북 지역 스타트업을 위한 팀빌딩 사이트
                        </p>
                        <div class="author-date">
                            <a class="h6 post__author-name fn">신입</a>
                            <a class="h6 post__author-name fn">경력</a>
                        </div>
                        <div class="author-date">
                            <a class="h6 post__author-thumb fn mt_3">연봉 2300 ~ 2500</a>
                        </div>

                        <div class="author-date">
                            <a href="/TeamBuilding/detail" class="btn btn-seoulblue btn-md-2">회사 보기</a>
                        </div>
                    </div>

                </article>

                <!-- ... end Post -->
            </div>
        </div><div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ui-block">


                <!-- Post -->

                <article class="hentry blog-post">

                    <div class="post-thumb overflow_hidden">
                        <img src="<?= site_url('assets/img/gryard.jpg') ?>" style="width:400px; height: 225px;" alt="photo" class="post_photo">
                    </div>

                    <div class="post-content">
                        <a href="#" class="post-category bg-blue-light">android</a>
                        <a href="<?= site_url('application/views/jobOffer/detail.php'); ?>" class="h4 post-title">239 </a>
                        <p>대구소프트웨어 산학협력 팀
                            속닥속닥
                            대구 경북 지역 스타트업을 위한 팀빌딩 사이트
                        </p>
                        <div class="author-date">
                            <a class="h6 post__author-name fn">신입</a>
                            <a class="h6 post__author-name fn">경력</a>
                        </div>
                        <div class="author-date">
                            <a class="h6 post__author-thumb fn mt_3">연봉 2000 ~ 2300</a>
                        </div>

                        <div class="author-date">
                            <a href="/TeamBuilding/detail" class="btn btn-seoulblue btn-md-2">회사 보기</a>
                        </div>
                    </div>

                </article>

                <!-- ... end Post -->
            </div>
        </div>


    </div>
</div>


<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1
                <div class="ripple-container">
                    <div class="ripple ripple-on ripple-out"
                         style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div>
                </div>
            </a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">12</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<!-- ... end Pagination -->

<!--</section>-->


<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="content-bg-wrap bg-section1"></div>
</section>


<a class="back-to-top" href="#">
    <img src="<?= site_url('assets/svg_icons/back-to-top.svg') ?>" alt="arrow" class="back-icon">
</a>


</body>
</html>