
<body>
<div class="main-header">
    <div class="content-bg-wrap bg-badges"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                <div class="main-header-content">
                    <h1>회원정보 수정</h1>
                    <p>
                        회원정보 수정 페이지에 어서오세요! 여기는 당신의 정보를 수정 할 수 있을 것입니다. 사용가능한 기술, 개인 정보, 비밀번호, 여러 정보들! 당신의 회원정보를 수정하여 좋은 팀을 만나 즐겁게 일을 하세요. 좋은 하루되세요!
                    </p>
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
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="assets/svg_icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
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
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">개인 정보</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Information Form  -->

                    <form class="content" action="<? echo base_url(); ?>ProfileEdit/updateCustomer" method="post" id="gender">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">이름</label>
									<input class="form-control" placeholder="" type="text" name="custName" value=<? echo $custdata['0']['custName'] ?>>
								</div>

								<div class="form-group date-time-picker label-floating">
									<label class="control-label">생년월일</label>
									<input name="datetimepicker"  value="<? echo $custdata['0']['custbirth'] ?>"readonly >
                                    <span class="input-group-addon">
                                            <svg class="olymp-calendar-icon"><use
                                                        xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg/#olymp-calendar-icon"></use></svg>
                                        </span>
								</div>
							</div>
					
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">연락할 이메일</label>
									<input class="form-control" name="custContactEmail" placeholder="" type="email" value=<? echo $custdata['0']['custContactEmail'] ?>>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">전화번호</label>
									<input class="form-control" name="custTel" placeholder="" type="text" value=<? echo $custdata['0']['custTel'] ?>>
								</div>
							</div>
					
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="form-group label-floating ">
									<label class="control-label">거주지</label>
									<input class="form-control" name="custAddr" placeholder="" type="text" value=<? echo $custdata['0']['custAddr'] ?>>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">자기소개</label>
									<input class="form-control" name="introUser" value="<? echo $intro['0']['introUser'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

								<div class="form-group label-floating">
                                    <fieldset class="form-group">
                                        <select class="selectpicker form-control" name="userjopType">
                                            <option value="Web" selected>Web</option>
                                            <option value="Android">Android</option>
                                            <option value="IOS">IOS</option>
                                            <option value="Database">Database</option>
                                            <option value="디자이너">디자이너</option>
                                            <option value="기획자">기획자</option>
                                            <option value="기타">기타</option>
                                        </select>
                                    </fieldset>
								</div>
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">성별</label>
                                    <select class="selectpicker form-control" name="custGender">
                                        <option value="남자" selected>남자</option>
                                        <option value="여자">여자</option>
                                        <!--                                        bootstrap-select-->
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">

                                    <label class="control-label">홈페이지 주소</label>
                                    <input class="form-control" name="homepage" type="text" value=<? echo $custdata['0']['homepage'] ?>>
                                </div>
							</div>
<!--							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
<!--								<button class="btn btn-secondary btn-lg full-width" name="cansle">취소하기</button>-->
<!--							</div>-->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-seoulblue btn-lg full-width" name="save" value="저장하기"/>
							</div>
						</div>
					</form>
					
					<!-- ... end Personal Information Form  -->
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
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
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

				<!-- ... end Your Profile  -->
				

			</div>
		</div>
	</div>
</div>
<a class="back-to-top" href="#">
	<img src="<? echo base_url();?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>



</body>
</html>
