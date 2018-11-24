
<body>
<div class="main-header">
    <div class="content-bg-wrap bg-weather"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                <div class="main-header-content">
                    <h1>구인</h1>
                    <p>
                        구인 페이지에 어서오세요! 여기는 회사가 원하는 사람을 구하는 페이지입니다. 사용가능한 기술, 설명, 여러 정보들! 인재를 데려와 함께 일을 하세요! 좋은 하루되세요!
                    </p>
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
    <!--    정처리 씨이발-->
    <?php for($i =0 ; $i<$listcount ; $i++){ ?>
    <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="ui-block">
                <div class="friend-item">
                    <div class="friend-header-thumb">
                        <img src="<? echo $listdata[$i]['backgroundImage'] ?>">
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
                                <img src="<? echo $listdata[$i]['userImage'] ?>"style="height: 93px; width: 93px;">
                            </div>
                            <div class="author-content">
                                <a href="<?= site_url( 'profile/watchprofile/idx/'.$listdata[$i]['idx'])?>" class="h5 author-name"><? echo $listdata[$i]['custName'] ?></a>
                                <div class="country"><? echo $listdata[$i]['custAddr'] ?></div>
                            </div>
                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="friend-count" data-swiper-parallax="-500">
                                    </div>
                                    <div class="control-block-button" data-swiper-parallax="-100">
                                        <!--                                        <a href="#" class="btn btn-control bg-blue">-->
                                        <!--                                            <svg class="olymp-happy-face-icon"><use xlink:href="--><?//= site_url('assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon')?><!--"></use></svg>-->
                                        <!--                                        </a>-->
                                        <!---->
                                        <!--                                        <a href="#" class="btn btn-control bg-purple">-->
                                        <!--                                            <svg class="olymp-chat---messages-icon"><use xlink:href="--><?//= site_url('assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon')?><!--"></use></svg>-->
                                        <!--                                        </a>-->
                                        <p class="friend-about data-swiper-parallax="-100">
                                        이메일 : <? echo $listdata[$i]['custContactEmail'] ?><br>
                                        홈페이지 : <? echo $listdata[$i]['homepage'] ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <p class="friend-about" data-swiper-parallax="-500">
                                        자기소개 : <? echo $profiledata[$i]['0']['introUser'] ?>
                                    </p>
                                    <div class="friend-since" data-swiper-parallax="-100">
                                        <span>생일</span>
                                        <div class="h6"><? echo $listdata[$i]['custbirth'] ?></div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <!-- ... end Friend Item --></div>
    </div>
    <?php } ?>
    <!--    야 기분조타!!-->
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

                <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                    <svg class="olymp-photos-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-photos-icon')?>"></use></svg>

                    <h6>Choose from My Photos</h6>
                    <span>Choose from your uploaded photos</span>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
    <div class="modal-dialog window-popup choose-from-my-photo" role="document">

        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-photos-icon')?>"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon"><use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-albums-icon')?>"></use></svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modal-body">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo1.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo2.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo3.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo4.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo5.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo6.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo7.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo8.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="<?= site_url('assets/img/choose-photo9.jpg')?>" alt="photo">
                                    <input type="radio" name="optionsRadios">
                                </label>
                            </div>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?= site_url('assets/img/choose-photo10.jpg')?>" alt="photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?= site_url('assets/img/choose-photo11.jpg')?>" alt="photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?= site_url('assets/img/choose-photo12.jpg')?>" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?= site_url('assets/img/choose-photo13.jpg')?>" alt="photo">
                                <figcaption>
                                    <a href="#">Graffity & Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?= site_url('assets/img/choose-photo14.jpg')?>" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item">
                            <figure>
                                <img src="<?= site_url('assets/img/choose-photo15.jpg')?>" alt="photo">
                                <figcaption>
                                    <a href="#">The Majestic Canyon</a>
                                    <span>Last Added: 57 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<a class="back-to-top" href="#">
    <img src="<?= site_url('assets/svg_icons/back-to-top.svg') ?>" alt="arrow" class="back-icon">
</a>





</body>
</html>