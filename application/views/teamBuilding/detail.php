
<body>
<div class="header-spacer"></div>



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

<!-- ... end Top Header-Profile -->

<div class="container">
    <div class="row">
        <div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">

            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">상세내용</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <!--                        여기까지-->
                        <?php for($i = 0; $i<$countresult; $i++){?>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- W-Personal-Info -->
                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <div class="career">
                                            <div class="img-wrapper">
                                                <img src="<? echo $careerdata[$i]['careerPicture'] ?>">
                                            </div>
                                            <div>
                                                <span class="title"><? echo $careerdata[$i]['content'] ?></span>
                                                <span class="date">2015.4. - 2017.8.</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- ... end W-Personal-Info -->
                            </div>
                        <?php } ?>
                        
                        <!--여기까지-->
                    </div>
                </div>
            </div>



            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">필요한 기술</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                            <!-- W-Personal-Info -->

                            <ul class="widget w-personal-info item-block field">
                                <li class="btn btn-blue btn-lg">
                                    <span>php</span>
                                </li>
                                <li class="btn btn-blue btn-lg">
                                    <span>Android</span>
                                </li>
                                <li class="btn btn-blue btn-lg">
                                    <span>WEB CSS</span>
                                </li>

                            </ul>

                            <!-- ... end W-Personal-Info -->
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


</div>

</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
    <div class="modal-dialog ui-block window-popup update-header-photo">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-close-icon"></use></svg>
        </a>

        <div class="ui-block-title">
            <h6 class="title">Update Header Photo</h6>
        </div>

        <a href="#" class="upload-photo-item">
            <svg class="olymp-computer-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

            <h6>Upload Photo</h6>
            <span>Browse your computer.</span>
        </a>

        <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

            <svg class="olymp-photos-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

            <h6>Choose from My Photos</h6>
            <span>Choose from your uploaded photos</span>
        </a>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo">
    <div class="modal-dialog ui-block window-popup choose-from-my-photo">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-close-icon"></use></svg>
        </a>

        <div class="ui-block-title">
            <h6 class="title">Choose from My Photos</h6>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                        <svg class="olymp-photos-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                        <svg class="olymp-albums-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
                    </a>
                </li>
            </ul>
        </div>


        <div class="ui-block-content">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo1.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo2.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo3.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>

                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo4.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo5.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo6.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>

                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo7.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo8.jpg" alt="photo">
                                <input type="radio" name="optionsRadios">
                            </label>
                        </div>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <div class="radio">
                            <label class="custom-radio">
                                <img src="<? echo base_url();?>assets/img/choose-photo9.jpg" alt="photo">
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
                            <img src="<? echo base_url();?>assets/img/choose-photo10.jpg" alt="photo">
                            <figcaption>
                                <a href="#">South America Vacations</a>
                                <span>Last Added: 2 hours ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="<? echo base_url();?>assets/img/choose-photo11.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Photoshoot Summer 2016</a>
                                <span>Last Added: 5 weeks ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="<? echo base_url();?>assets/img/choose-photo12.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Amazing Street Food</a>
                                <span>Last Added: 6 mins ago</span>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="<? echo base_url();?>assets/img/choose-photo13.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Graffity & Street Art</a>
                                <span>Last Added: 16 hours ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="<? echo base_url();?>assets/img/choose-photo14.jpg" alt="photo">
                            <figcaption>
                                <a href="#">Amazing Landscapes</a>
                                <span>Last Added: 13 mins ago</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="choose-photo-item" data-mh="choose-item">
                        <figure>
                            <img src="<? echo base_url();?>assets/img/choose-photo15.jpg" alt="photo">
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

<!-- ... end Window-popup Choose from my Photo -->

<a class="back-to-top" href="#">
    <img src="<? echo base_url();?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

</body>
</html>