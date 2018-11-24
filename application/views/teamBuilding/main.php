
<body class="body-bg-white">
<!--<div class="header-spacer header-spacer-small"></div>-->
<!-- Top Header-Profile -->
<div class="main-header">
    <div class="content-bg-wrap bg-badges"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                <div class="main-header-content">
                    <h1>팀빌딩</h1>
                    <p>
                        팀빌딩 페이지에 어서오세요! 여기는 당신이 찾는 팀의 정보를 찾을 수 있을 것입니다. 필요한 기술, 조건, 설명, 여러 정보들! 당신은 좋은 팀을 만나 즐겁게 일을 하게 될 것입니다. 좋은 하루되세요!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 item-prifile-img">
            <div class="ui-block responsive-flex1200">
                <div class="ui-block-title">
                    <div class="w-select">
                        <div class="title">Filter By:</div>
                        <fieldset class="form-group">
                            <select class="selectpicker form-control">
                                <option value="NU">분야</option>
                                <option value="NU">Web</option>
                                <option value="NU">Android</option>
                                <option value="NU">IOS</option>
                                <option value="NU">Database</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="w-select">
                        <fieldset class="form-group">
                            <select class="selectpicker form-control">
                                <option value="NU">지역</option>
                                <option value="NU">대구</option>
                                <option value="NU">경북</option>
                                <option value="NU">경남</option>
                                <option value="NU">경기</option>
                                <option value="NU">강원</option>
                            </select>
                        </fieldset>
                    </div>

                    <a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Filter</a>

                    <form class="w-search">
                        <div class="form-group with-button">
                            <input class="form-control" type="text" placeholder="팀 찾기...">
                            <button>
                                <svg class="olymp-magnifying-glass-icon">
                                    <use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="blog-post-wrap medium-padding80">
    <div class="container">
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
                            <a href="/TeamBuilding/detail" class="h4 post-title">239 </a>
                            <p>대구소프트웨어 산학협력 팀
                                속닥속닥
                                대구 경북 지역 스타트업을 위한 팀빌딩 사이트</p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/dgsw.gif') ?>" style="width:400px; height: 225px;"alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">택견</a>
                            <a href="#" class="post-category bg-blue-light">성실</a>
                            <a href="#" class="post-category bg-blue-light">순종</a>
                            <a href="#" class="post-category bg-blue-light">서버</a>
                            <a href="#" class="post-category bg-blue-light">모바일</a>
                            <a href="#" class="post-category bg-blue-light">웹</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">메신저팀</a>
                            <p>대구소프트웨어 산학협력 팀
                                학교에서 사용가능한 메신저 개발중...
                                입가에 미소가 번진다.</p>
                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/mecha.jpg') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">가고싶다</a>
                            <a href="#" class="post-category bg-blue-light">3D프린터</a>
                            <a href="#" class="post-category bg-blue-light">임베디드</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">메카솔루션</a>
                            <p>대구소프트웨어 산학협력 팀
                                3D프린터 명당 1개씩 만들고있어요.
                                </p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/cowlogo.jpg') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">파이썬</a>
                            <a href="#" class="post-category bg-blue-light">C++</a>
                            <a href="#" class="post-category bg-blue-light">딥러닝</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">우경정보기술</a>
                            <p>대구소프트웨어 산학협력 팀
                                딥러닝 재미있다 허허
                                얼굴인식 재미있다 허허</p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/sinra.jpg') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">android</a>
                            <a href="#" class="post-category bg-blue-light">raspberry pi</a>
                            <a href="#" class="post-category bg-blue-light">web</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">신라시스템</a>
                            <p>대구소프트웨어 산학협력 팀
                                iot기반 애완동물 스마트 예약 시스템 만든다</p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/kai.png') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">unity</a>
                            <a href="#" class="post-category bg-blue-light">c#</a>
                            <a href="#" class="post-category bg-blue-light">진택이 우리팀 와라</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">카이엔터테인먼트 </a>
                            <p>대구소프트웨어 산학협력 팀
                                14명 ㄷㄷ 오픈마켓 출시용 모바일 게임 만드는 중</p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/infoboss.png') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">아두이노</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">인포보스 </a>
                            <p>대구소프트웨어 산학협력 팀
                                아두이노 기반 실시간 자료전송 센서 모듈 개발 및 사진 데이터 수집용 모바일 프로그램 개발</p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/gryard.jpg') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">android</a>
                            <a href="#" class="post-category bg-blue-light">php</a>
                            <a href="#" class="post-category bg-blue-light">web css</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">239 </a>
                            <p>대구소프트웨어 산학협력 팀
                                어쩌다 이렇게 된거지
                                앙터졌띠</p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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
                            <img src="<?= site_url('assets/img/jc.gif') ?>"  style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-blue-light">임베디드</a>
                            <a href="#" class="post-category bg-blue-light">레이다</a>
                            <a href="/TeamBuilding/detail" class="h4 post-title">제이씨레이다 </a>
                            <p>대구소프트웨어 산학협력 팀
                                X밴드(10.525 GHz) 침입자감시 레이다를 제어하기 위한 임베디드 소프트웨어 개발
                            </p>


                            <div class="author-date">
                                <a href="/companyProfile/main"  class="btn btn-seoulblue btn-md-2">팀 보기</a>
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

</section>


<!--<div class="modal fade" id="update-header-photo">-->
<!--    <div class="modal-dialog ui-block window-popup update-header-photo">-->
<!--        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">-->
<!--            <svg class="olymp-close-icon"><use xlink:href="--><?// echo base_url();?><!--assets/svg_icons/sprites/icons.svg#olymp-close-icon"></use></svg>-->
<!--        </a>-->
<!---->
<!--        <div class="ui-block-title">-->
<!--            <h6 class="title">팀 정보</h6>-->
<!--        </div>-->
<!--        -->
<!--    </div>-->
<!--</div>-->
<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="content-bg-wrap bg-section1"></div>
</section>


<a class="back-to-top" href="#">
    <img src="<?= site_url('assets/svg_icons/back-to-top.svg') ?>" alt="arrow" class="back-icon">
</a>


</body>
</html>