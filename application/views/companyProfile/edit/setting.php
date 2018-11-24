
<body>

<div class="main-header">
    <div class="content-bg-wrap bg-badges"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                <div class="main-header-content">
                    <h1>정보 수정</h1>
                    <p>
                        정보 수정 페이지에 어서오세요! 여기는 그룹의 정보를 수정 할 수 있을 것입니다. 사용하는 기술, 팀 정보와 같은 여러 정보들! 그룹의 정보를 수정하여 좋은 사람들을 만나 즐겁게 일을 하세요. 좋은 하루되세요!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
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
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<? echo base_url();?>assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
								</a>
							</h6>
						</div>

						<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<ul class="your-profile-menu">
                                <li>
                                    <a href="/CompanyProfileEdit/main">정보</a>
                                </li>
                                <li>
                                    <a href="/ProfileEdit/profile2">비밀번호 변경</a>
                                </li>
                                <li>
                                    <a href="/ProfileEdit/profile3">직종과 기술</a>
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
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">경력</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Employement History Form -->
					
					<form>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">회사 또는 팀 이름</label>
									<input class="form-control" placeholder="" type="text" name="GroupName">
								</div>
							</div>
					
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">기간</label>
									<input class="form-control" placeholder="" type="text" name="GroupTerm">
								</div>
							</div>
					
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">비고</label>
									<textarea class="form-control" placeholder=""  name="GroupRemarks"></textarea>
								</div>
							</div>
					


							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
								<a href="#" class="add-field" onclick="">
									<svg class="olymp-plus-icon"><use xlink:href="<? echo base_url();?>assets/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
									<span>경력 추가하기</span>
								</a>
							</div>
					
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-secondary btn-lg full-width">취소</button>
							</div>
					
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-seoulblue btn-lg full-width" name="SaveGroup">저장하기</button>
							</div>
						</div>
					</form>
					
					<!-- ... end Employement History Form -->

				</div>
			</div>
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">프로젝트</h6>
                </div>
                <div class="ui-block-content">


                    <!-- Employement History Form -->

                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">이름</label>
                                    <input class="form-control" placeholder="" type="text"  name="EducationName">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">기간</label>
                                    <input class="form-control" placeholder="" type="text" name="EduTerm">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">설명</label>
                                    <textarea class="form-control" placeholder=""  name="EduRemarks"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <a href="#" class="add-field" onclick="">
                                    <svg class="olymp-plus-icon"><use xlink:href="<? echo base_url();?>assets/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                                    <span>학력 추가하기</span>
                                </a>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-secondary btn-lg full-width">취소</button>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-seoulblue btn-lg full-width" name="SaveEdu">저장하기</button>
                            </div>
                        </div>
                    </form>

                    <!-- ... end Employement History Form -->

                </div>
            </div>
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">학력</h6>
				</div>
				<div class="ui-block-content">


					<!-- Employement History Form -->

					<form>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">교육기관</label>
									<input class="form-control" placeholder="" type="text"  name="EducationName">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">기간</label>
									<input class="form-control" placeholder="" type="text" name="EduTerm">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">비고</label>
									<textarea class="form-control" placeholder=""  name="EduRemarks"></textarea>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

								<a href="#" class="add-field" onclick="">
									<svg class="olymp-plus-icon"><use xlink:href="<? echo base_url();?>assets/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
									<span>학력 추가하기</span>
								</a>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-secondary btn-lg full-width">취소</button>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-seoulblue btn-lg full-width" name="SaveEdu">저장하기</button>
							</div>
						</div>
					</form>

					<!-- ... end Employement History Form -->

				</div>
			</div>

		</div>

		<div class="col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12 responsive-display-none">
			<div class="ui-block">



				<!-- Your Profile  -->

				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">프로필</h6>
					</div>

					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										프로필 설정
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<? echo base_url();?>assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
                                    <li>
                                        <a href="/ProfileEdit/profile1">개인정보</a>
                                    </li>
                                    <li>
                                        <a href="/ProfileEdit/profile2">비밀번호 변경</a>
                                    </li>
                                    <li>
                                        <a href="/ProfileEdit/profile3">직종과 기술</a>
                                    </li>
                                    <li>
                                        <a href="/ProfileEdit/profile4">경력 및 학력</a>
                                    </li>
								</ul>
							</div>
						</div>
					</div>


				</div>

				<!-- ... end Your Profile  -->
				

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
