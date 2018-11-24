
<body>

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
<!-- ... end Main Header Account -->


<!-- Profile Settings Responsive -->

<div class="profile-settings-responsive">

	<a href="#" class="js-profile-settings-open profile-settings-open">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="ui-block">
			<div class="your-profile">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">프로필</h6>
				</div>

				<div id="accordion1" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne1">
							<h6 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									프로필 설정
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
								</a>
							</h6>
						</div>

						<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<ul class="your-profile-menu">
                                <li>
                                    <a href="/ProfileEdit/profile1">개인정보</a>
                                </li>
                                <li>
                                    <a href="/ProfileEdit/profile2">비밀번호 변경</a>
                                </li>
                                <li>
                                    <a href="/ProfileEdit/profile3">직군과 기술</a>
                                </li>
                                <li>
                                    <a href="/ProfileEdit/profile4">경력 및 학력</a>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Profile Settings Responsive -->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
        <div class="col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Account Settings</h6>
                </div>
                <div class="ui-block-content">


                    <!-- Personal Account Settings Form -->

                    <form>
                        <div class="row">
<!---->
<!--                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
<!--                                <div class="form-group label-floating is-select">-->
<!--                                    <label class="control-label">Who Can Friend You?</label>-->
<!--                                    <select class="selectpicker form-control">-->
<!--                                        <option value="EO">Everyone</option>-->
<!--                                        <option value="NO">No One</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
<!--                                <div class="form-group label-floating is-select">-->
<!--                                    <label class="control-label">Who Can View Your Posts</label>-->
<!--                                    <select class="selectpicker form-control">-->
<!--                                        <option value="US">Friends Only</option>-->
<!--                                        <option value="EO">Everyone</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="description-toggle">
                                    <div class="description-toggle-content">
                                        <div class="h6">이 회사 또는 팀의 정보를 보겠습니까?</div>
                                        <p>해제를 하신다면 검색을 통해서만 볼 수 있습니다.</p>
                                    </div>

                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox" checked="">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-secondary btn-lg full-width">취소하기</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-seoulblue btn-lg full-width">저장하기</button>
                            </div>
                        </div>
                    </form>

                    <!-- ... end Personal Account Settings Form  -->

                </div>
            </div>
        </div>

	</div>
</div>

<!-- ... end Your Account Personal Information -->




<a class="back-to-top" href="#">
	<img src="<? echo base_url();?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

</body>
</html>
