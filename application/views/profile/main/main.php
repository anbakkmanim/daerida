
<body>
<div class="header-spacer"></div>



<!-- Top Header-Profile -->

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="top-header">
                    <div class="top-header-thumb profile-background">
                        <img src="<? echo $customerdata['0']['backgroundImage'] ?>" alt="nature">
                    </div>
                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-5 col-5">
                                <ul class="profile-menu">
									<li>
										<a href="/profile/main">나에 대하여</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-5 ml-auto col-md-5 col-sm-5 col-5">
								<ul class="profile-menu">
                                    <li>
                                        <a href="/profile/teamCom">회사 및 팀 정보</a>
                                    </li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">


                            <div class="btn btn-control bg-purple more">
								<svg class="olymp-chat---messages-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">팀빌딩 신청</a>
                                    </li>
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
										<a href="/profileEdit/profile1">계정 설정</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top-header-author">
						<a href="<? echo $customerdata['0']['userImage'] ?>" class="author-thumb">
							<img src="<? echo $customerdata['0']['userImage'] ?>" style="width: 124px; height: 124px;"alt="author">
						</a>
						<div class="author-content">
							<a href="/profile/main" class="h4 author-name"><? echo $customerdata['0']['custName'] ?></a>
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
        <div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">

            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">경력</h6>
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
                                            <?php
                                            $starttime[$i] = strtotime($careerdata[$i]['startDate']);
                                            $myFormatDateStart[$i] = date("Y.n.j",$starttime[$i]);

                                            $endtime[$i] = strtotime($careerdata[$i]['endDate']);
                                            $myFormatDateEnd[$i] = date("Y.n.j",$endtime[$i]);
                                            ?>
                                            <span class="title"><? echo $careerdata[$i]['content'] ?></span>
                                            <span class="date"><? echo $myFormatDateStart[$i].' ~ '.$myFormatDateEnd[$i] ?></span>
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
                    <h6 class="title">프로젝트</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <?php for($i = 0; $i<$projectcount ; $i++){ ?>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <div class="career">
                                        <div class="img-wrapper">
                                            <img src="<? echo $projectdata[$i]['projectPicture']?>">
                                        </div>
                                        <div>
                                            <span class="title"><? echo $projectdata[$i]['projectName'] ?></span>
                                            <span class="text"><? echo $projectdata[$i]['projectIntro'] ?></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">학력</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <?php for($i=0; $i<$educationlevelcount; $i++){ ?>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <div class="career">
                                        <div class="img-wrapper">
                                            <img src="<? echo $educationleveldata[$i]['eduLevelPicture'] ?>">
                                        </div>
                                        <div>
                                            <?php
                                            $eduStartTime[$i] = strtotime($educationleveldata[$i]['startDate']);
                                            $myEduFormatDateStart[$i] = date("Y.n.j",$eduStartTime[$i]);

                                            $eduEndTime[$i] = strtotime($educationleveldata[$i]['endDate']);
                                            $myEduFormatDateEnd[$i] = date("Y.n.j",$eduEndTime[$i]);
                                            ?>
                                            <span class="title"><? echo $educationleveldata[$i]['eduName'] ?></span>
                                            <span class="text"><? echo $educationleveldata[$i]['eduContent'] ?></span>
                                            <span class="date"><? echo $myEduFormatDateStart[$i].' ~ '.$myEduFormatDateEnd[$i] ?></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">분야</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                            <!-- W-Personal-Info -->

                            <ul class="widget w-personal-info item-block field">
                                <?php for($i = 0; $i<$tagcount; $i++){ ?>
                                <li class="btn btn-blue btn-lg">
                                    <span><? echo $tagdata[$i]['tag'] ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- ... end W-Personal-Info -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">프로필</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <div class="ui-block-content">


                    <!-- W-Personal-Info -->

                    <ul class="widget w-personal-info">
                        <li>
                            <span class="title">한줄소개 :</span>
                            <span class="text"><? echo $intro['0']['introUser'] ?></span>
                        </li>
                        <li>
                            <span class="title">생년월일 :</span>
                            <span class="text"><? echo $customerdata['0']['custbirth'] ?></span>
                        </li>
                        <li>
                            <span class="title">거주지 :</span>
                            <span class="text"><? echo $customerdata['0']['custAddr'] ?></span>
                        </li>
                        <li>
                            <span class="title">직군 :</span>
                            <span class="text"><?php echo $jobtype['0']['userjobType'] ?></span>
                        </li>
                        <li>
                            <span class="title">성별 :</span>
                            <span class="text"><? echo $customerdata['0']['custGender'] ?></span>
                        </li>
                        <li>
                            <span class="title">이메일 :</span>
                            <a href="mailto:<? echo $customerdata['0']['custContactEmail'] ?>" class="text"><? echo $customerdata['0']['custContactEmail'] ?></a>
                        </li>
                        <li>
                            <span class="title">웹사이트 :</span>
                            <a href="http://<? echo $customerdata['0']['homepage'] ?>" target="_blank" class="text"><? echo $customerdata['0']['homepage'] ?></a>
                        </li>
                        <li>
                            <span class="title">전화번호 :</span>
                            <span class="text"><? echo $customerdata['0']['custTel'] ?></span>
                        </li>
                    </ul>
                    <!-- ... end W-Personal-Info -->
                    <!-- W-Socials -->
                    <!-- ... end W-Personal-Info -->
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