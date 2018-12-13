<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>
	<!-- Top Header-Profile -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block">
					<div class="top-header top-header-favorite">
						<div class="top-header-thumb">
							<!-- dummy img -->
							<img src="<?= site_url('assets/img/top-header2.jpg') ?>"  alt="nature">
							<div class="top-header-author">
								<div class="author-thumb">
									<img src="<?= "/uploads/profile/". ($me_n_profile != null ? $me_n_profile : "default.png") ?>"  alt="author">
								</div>
								<div class="author-content">
									<a href="<?= site_url('assets/#') ?>"  class="h3 author-name"><?= $me_n_name ?></a>
									<div class="country"><?= $me_n_sido . " | " . $fi_l_name . "/" . $fi_s_name ?></div>
								</div>
							</div>
						</div>
						<div class="profile-section">
							<div class="row">
								<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
									<ul class="profile-menu">
										<li>
											<a href="<?= site_url('assets/12-FavouritePage.html') ?>"  class="active">정보</a>
										</li>
										<li>
											<a href="<?= site_url('member/portfolio') ?>" >포트폴리오</a>
										</li>
										<!-- <li>
											<a href="<?= site_url('assets/07-ProfilePage-Photos.html') ?>" >이력서 관리</a>
										</li> -->
										<!-- <li>
										<a href="<?= site_url('assets/09-ProfilePage-Videos.html') ?>" >Videos</a>
									</li>
									<li>
										<a href="<?= site_url('assets/14-FavouritePage-Statistics.html') ?>" >Statistics</a>
									</li>
									<li>
										<a href="<?= site_url('assets/15-FavouritePage-Events.html') ?>" >Events</a>
									</li> -->
									</ul>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Top Header-Profile -->

	<!-- UI-Block-Title -->
	<!-- <div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">James’s Photo Gallery</div>

					<div class="block-btn align-right">
						<a href="<?= site_url('assets/#') ?>"  data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Create Album  +</a>

						<a href="<?= site_url('assets/#') ?>"  data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos</a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('assets/#photo-page') ?>"  role="tab">
								<svg class="olymp-photos-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use></svg>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('assets/#album-page') ?>"  role="tab">
								<svg class="olymp-albums-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-albums-icon') ?>" ></use></svg>
							</a>
						</li>

					</ul>
					<a href="<?= site_url('assets/#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
				</div>
			</div>
		</div>
	</div>
</div> -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
				<div class="ui-block">


					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header ui-block-title" role="tab" id="headingOne">
								<h6 class="mb-0">
									<div class="row">
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('assets/#collapseOne') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2">
											<span>경력</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('assets/#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>

										<div class="col-auto">
											<a href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-career" onclick="modalclear()">추가<div class="ripple-container"></div></a>
										</div>
									</div>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">
									<?php
									
									foreach($career as $row){
										if($row->ca_type == "career"){
										$a = "<div class='col'>
														<div class='card career'>
															<div class='card-body'>
																<div class='row'>
																	<div class='col-sm-2'>
																		<img src='/uploads/profile/".$row->ca_image."' class='rounded float-left' alt='...'>
																		</div>
																		<div class='col'>
																			<h5 class='card-title'>".$row->ca_career."</h5>
																			<ul class='widget w-personal-info'>
																		<li>
																		<span class='text'>".$row->ca_info."</span>
																		</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>";
											echo $a;
										}
									}
									?>
								</div>

							</div>

						</div>
					</div>
				</div>

				<div class="ui-block">
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header ui-block-title" role="tab" id="headingOne">
								<h6 class="mb-0">
									<div class="row">
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('assets/#collapseTwo') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2">
											<span>학력</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('assets/#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>

										<div class="col-auto">
											<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-edu">추가<div class="ripple-container"></div></a>
										</div>
									</div>
								</h6>
							</div>

							<div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">
								<?php
									
									foreach($career as $row){
										if($row->ca_type == "educate"){
										$a = "<div class='col'>
														<div class='card career'>
															<div class='card-body'>
																<div class='row'>
																	<div class='col-sm-2'>
																		<img src='/uploads/profile/".$row->ca_image."'  class='rounded float-left' alt='...'>
																		</div>
																		<div class='col'>
																			<h5 class='card-title'>".$row->ca_career."</h5>
																			<ul class='widget w-personal-info'>
																		<li>
																		<span class='text'>".$row->ca_info."</span>
																		</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>";
											echo $a;
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="ui-block">
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header ui-block-title" role="tab" id="headingOne">
								<h6 class="mb-0">
									<div class="row">
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('assets/#collapseThree') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2">
											<span>자격증</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('assets/#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>

										<div class="col-auto">
											<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-card">추가<div class="ripple-container"></div></a>
										</div>
									</div>
								</h6>
							</div>

							<div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">


								<div class="ui-block-content">
								<?php
									
									foreach($career as $row){
										if($row->ca_type == "certificate"){
										$a = "<div class='col'>
														<div class='card career'>
															<div class='card-body'>
																<div class='row'>
																	<div class='col-sm-2'>
																		<img src='/uploads/profile/".$row->ca_image."'  class='rounded float-left' alt='...'>
																		</div>
																		<div class='col'>
																			<h5 class='card-title'>".$row->ca_career."</h5>
																			<ul class='widget w-personal-info'>
																		<li>
																		<span class='text'>".$row->ca_info."</span>
																		</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>";
											echo $a;
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">프로필</h6>
						<a href="<?= site_url('assets/#') ?>"  class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
							</svg></a>
					</div>
					<div class="ui-block-content">


						<!-- W-Personal-Info -->

						<ul class="widget w-personal-info">
							<li>
								<span class="title">자기소개:</span>
              	<span class="text"><?= $me_n_info ?> </span>
							</li>
							<li>
								<span class="title">이름:</span>
								<span class="text"><?= $me_n_name ?></span>
							</li>
							<li>
								<span class="title">분야:</span>
								<span class="text"><?= $fi_l_name . "/" . $fi_s_name ?></span>
							</li>
							<li>
								<span class="title">거주지:</span>
								<span class="text"><?= $me_n_sido ?></span>
							</li>
							<li>
								<span class="title">희망연봉:</span>
								<span class="text"><?= $me_n_hopeSalary ?></span>
							</li>
							<li>
								<span class="title">나이:</span>
								<span class="text"><?= $me_n_age ?></span>
							</li>
							<li>
								<span class="title">성별:</span>
								<span class="text"><?= $me_n_gender ?></span>
							</li>
                            <li>
								<span class="title">이메일:</span>
								<a href="#"  class="text"><?= $me_n_email ?></a>
							</li>
							<li>
								<span class="title">전화번호:</span>
								<span class="text"><?= $me_n_phone ?></span>
							</li>
							<li>
								<span class="title">병역 이행 여부:</span>
								<span class="text"><?= $me_n_isMilitary ?></span>
							</li>
							<li>
								<span class="title">공개 여부:</span>
								<span class="text"><?= $me_n_isOpen ?></span>
							</li>
						</ul>
						<br>

						<!-- ... end W-Personal-Info -->
						<!-- W-Socials -->

						<div class="row ml-1">

							<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary col mr-3" data-toggle="modal" data-target="#update-profile">프로필 수정<div class="ripple-container"></div></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Window-popup Change Password Form -->

	<div class="modal fade" id="create-photo-album" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">비밀번호 변경</h6>
				</div>

				<div class="modal-body">

					<form class="form-group label-floating">
						<label class="control-label">현재 비밀번호</label>
						<input class="form-control" placeholder="" type="password">
					</form>

					<form class="form-group label-floating">
						<label class="control-label">새 비밀번호 입력</label>
						<input class="form-control" placeholder="" type="password">
					</form>

					<form>
						<div class="form-group label-floating">
							<label class="control-label">새 비밀번호 확인</label>
							<input class="form-control" placeholder="" type="password">
						</div>
					</form>


					<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">변경</a>
					<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-career" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">경력 추가</h6>
				</div>

				<div class="modal-body">
					<form action="/member/addcareer" method="post" enctype="multipart/form-data">
						<input type="hidden" name="ca_type" value="career">
						<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
						<div class="col">

							<div class="form-group label-floating">
								<label class="control-label">기업명</label>
								<input class="form-control" name="ca_career" type="text">
							</div>
						</div>

						<div class="col">
							<div class="form-group label-floating">
								<label class="control-label">간단한 소개</label>
								<textarea class="form-control" name="ca_info" id="" cols="30" rows="5"></textarea>
							</div>
						</div>

						<div class="col">
							<label class="control-label">이미지</label>
							<div class="col col-lg-3 col-md-3 col-sm-12 col-12 pl-0">
								<div class="file-upload d-inline-block">
									<label for="upload-career" class="file-upload__label">Upload Button</label>
									<input class="file-upload__input" id="upload-career" type="file" name="ca_image">
								</div>
								<div id="uploaded-file" class="d-inline-block">
									<img id="preview-career" src="">
								</div>
							</div>
						</div>

						<input type="submit"  class="btn btn-secondary btn-lg btn--half-width" value="추가">
						<input type="button"  class="btn btn-secondary btn-lg btn--half-width" value="취소">

					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-edu" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">학력 추가</h6>
				</div>

				<div class="modal-body">
					<form action="/member/addcareer" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ca_type" value="educate">
					<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
						<div class="col">
							<div class="form-group label-floating">
								<label class="control-label">학교명</label>
								<input class="form-control" name="ca_career" type="text">
							</div>
						</div>

						<div class="col">
							<div class="form-group label-floating">
								<label class="control-label">간단한 소개</label>
								<textarea class="form-control" name="ca_info" id="" cols="30" rows="5"></textarea>
							</div>
						</div>

						<div class="col">
							<label class="control-label">이미지</label>
							<div class="col col-lg-3 col-md-3 col-sm-12 col-12 pl-0">
								<div class="file-upload d-inline-block">
									<label for="upload-educate" class="file-upload__label">Upload Button</label>
									<input class="file-upload__input" id="upload-educate" type="file" name="ca_image">
								</div>
								<div id="uploaded-file" class="d-inline-block">
									<img id="preview-educate" src="">
								</div>
							</div>
						</div>

							<input type="submit"  class="btn btn-secondary btn-lg btn--half-width" value="추가">
							<input type="button"  class="btn btn-secondary btn-lg btn--half-width" value="취소">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-card" tabindex="-1" role="dialog" aria-labelledby="create-card" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">자격증 추가</h6>
				</div>

				<div class="modal-body">
				<form action="/member/addcareer" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ca_type" value="certificate">
					<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">자격증명</label>
									<input class="form-control" name="ca_career" type="text">
								</div>
							</div>
							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">취득일</label>
									<input class="form-control" name="ca_info" type="text">
								</div>
							</div>
						</div>
					</div>


					<div class="col">
						<label class="control-label">이미지</label>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12 pl-0">
							<div class="file-upload d-inline-block">
								<label for="upload-certificate" class="file-upload__label">Upload Button</label>
								<input class="file-upload__input" id="upload-certificate" type="file" name="ca_image">
							</div>
							<div id="uploaded-file" class="d-inline-block">
								<img id="preview-certificate" src="">
							</div>
						</div>
					</div>
					<input type="submit"  class="btn btn-secondary btn-lg btn--half-width" value="추가">
					<input type="button"  class="btn btn-secondary btn-lg btn--half-width" value="취소">

				</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ... end Window-popup Change Password Form -->

	<!-- Window-popup Update profile Form -->

	<div class="modal fade" id="update-profile" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">프로필 수정</h6>
				</div>

				<div class="modal-body">

					<form action="/member/setProfileNormal" method="post" enctype="multipart/form-data">
					<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
						<div class="row">

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">자기소개</label>
									<textarea class="form-control" name="me_n_info" id="" cols="30" rows="5"><?= $me_n_info ?></textarea>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이름</label>
									<input class="form-control" name="me_n_name" type="text" value="<?= $me_n_name ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이메일</label>
									<input class="form-control" name="me_n_email" type="email" value="<?= $me_n_email ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">전화번호</label>
									<input class="form-control" name="me_n_phone" type="number" value="<?= $me_n_phone ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<fieldset disabled>
									<div class="form-group label-floating has-disabled.is-empty">
										<label class="control-label">기억에 남는 추억의 장소는 어디 입니까?</label>
										<input class="form-control" type="text" >
									</div>
								</fieldset>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">답변</label>
									<input class="form-control" name="me_n_answer"  type="text" value="<?= $me_n_findpw ?>">
								</div>
							</div>

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
									<script>
										function getsfield(e) {
											$.ajax({
												type: "GET",
												url: "/member/getSmallField",
												data: {"rfield" : e.target.value},
												success (data) {
													data = JSON.parse(data);
													$("#sfield").html("");
													for(var i of data) {
														var a = $("<option></option>")
															.attr("value",i.fi_s_idx)
															.text(i.fi_s_name);
														$("#sfield").append(a); 
													}
													$("#sfield").selectpicker("refresh"); 
												}
											})
										}
										</script>
											<select class="selectpicker form-control" tabindex="-98" onchange="getsfield(event)" name="me_rfield">
													<?php
														foreach($rfield as $row){
															if($row['fi_l_name'] == $fi_l_name)
																echo "<option name='me_rfield' value=".$row['fi_l_idx']." selected>".$row['fi_l_name']."</option>";
															else
																echo "<option name='me_rfield' value=".$row['fi_l_idx'].">".$row['fi_l_name']."</option>";
														}
													?>
											</select>
									</div>
								</div>
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
										<select class="selectpicker form-control" tabindex="-98" id="sfield" name="me_sfield">
											<?php
												foreach($sfield as $row){
													if($row['fi_s_name'] == $fi_s_name)
														echo "<option value=".$row['fi_s_idx']." selected>".$row['fi_s_name']."</option>";
													else
														echo "<option value=".$row['fi_s_idx'].">".$row['fi_s_name']."</option>";
												}
											?>
										</select>
									</div>
								</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="">나이</label>
									<div class="input-group number-spinner">
										<span class="input-group-btn data-dwn input-group-prepend mb-3">
											<button class="btn btn-default btn-info mt-0" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
										</span>
										<div class="form-group "><input type="text" class="form-control text-center mb-3" value="<?= $me_n_age?>" min="15" max="100" name="me_n_age"><span class="material-input"></span></div>
										<span class="input-group-btn data-up input-group-append mb-3">
											<button class="btn btn-default btn-info mt-0" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
										</span>
									</div>		
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">거주지</label>
									<input class="form-control" name="me_n_sido" type="text" value="<?= $me_n_sido ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">연봉</label>
									<input class="form-control" name="me_n_hopeSalary" type="number" value="<?= $me_n_hopeSalary ?>">
								</div>
							</div>

							
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="radio col">
										<label>
											<input type="radio" name="me_n_gender" id="man" onclick="gender('man')" <?php if($me_n_gender == "man"){ echo "checked"; }?>><span class="circle"></span><span class="check"></span>
											남자
										</label>
									</div>
									<div class="radio col">
										<label>
											<input type="radio" name="me_n_gender" id="woman" onclick="gender('woman')" <?php if($me_n_gender == "woman"){ echo "checked"; }?>><span class="circle"></span><span class="check"></span>
											여자
										</label>
									</div>
									
									<div class="checkbox col">
										<label>
											<input name="optionsCheckboxes" type="checkbox" id="military" name="me_n_isMilitary" <?php if($me_n_isMilitary == "on"){ echo "checked"; }?>>
											병역 이행 여부
										</label>
									</div>
									
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label class="control-label">프로필 사진</label>
								<div class="col col-lg-3 col-md-3 col-sm-12 col-12 pl-0">
									<div class="file-upload d-inline-block">
										<label for="upload" class="file-upload__label">Upload Button</label>
										<input id="upload" class="file-upload__input" type="file" name="me_n_profile">
									</div>
									<div id="uploaded-file" class="d-inline-block">
										<img id="preview" src="<?= site_url('/uploads/profile/'.$me_n_profile)?> ">
									</div>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
								<div class="row">
									<div class="radio col">
										<label>
											<input type="radio" name="me_n_isOpen" value="공개" <?php if($me_n_isOpen == "공개"){ echo "checked"; }?>><span class="circle"></span><span class="check"></span>
											공개
										</label>
									</div>
									<div class="radio col">
										<label>
											<input type="radio" name="me_n_isOpen" value="비공개" <?php if($me_n_isOpen == "비공개"){ echo "checked"; }?>><span class="circle"></span><span class="check"></span>
											비공개
										</label>
									</div>
								</div>
							</div>


						</div>
						<input type="submit" class="btn btn-secondary btn-lg btn--half-width" value="변경">
						<input type="button" class="btn btn-secondary btn-lg btn--half-width" value="취소">
					</form>

												
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Window-popup Change Password Form -->

	<!-- Window-popup Update Header Photo -->

	<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo"
	 aria-hidden="true">
		<div class="modal-dialog window-popup update-header-photo" role="document">
			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Update Header Photo</h6>
				</div>

				<div class="modal-body">
					<a href="<?= site_url('assets/#') ?>"  class="upload-photo-item">
						<svg class="olymp-computer-icon">
							<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use>
						</svg>

						<h6>Upload Photo</h6>
						<span>Browse your computer.</span>
					</a>

					<a href="<?= site_url('assets/#') ?>"  class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

						<svg class="olymp-photos-icon">
							<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use>
						</svg>

						<h6>Choose from My Photos</h6>
						<span>Choose from your uploaded photos</span>
					</a>
				</div>
			</div>
		</div>
	</div>


	<!-- ... end Window-popup Update Header Photo -->

	<!-- Window-popup Choose from my Photo -->

	<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo"
	 aria-hidden="true">
		<div class="modal-dialog window-popup choose-from-my-photo" role="document">

			<div class="modal-content">
				<a href="<?= site_url('assets/#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Choose from My Photos</h6>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('assets/#home') ?>"  role="tab" aria-expanded="true">
								<svg class="olymp-photos-icon">
									<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('assets/#profile') ?>"  role="tab" aria-expanded="false">
								<svg class="olymp-albums-icon">
									<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-albums-icon') ?>" ></use>
								</svg>
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
										<img src="<?= site_url('assets/img/choose-photo1.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo2.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo3.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo4.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo5.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo6.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo7.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo8.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('assets/img/choose-photo9.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>


							<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

						</div>
						<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo10.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('assets/#') ?>" >South America Vacations</a>
										<span>Last Added: 2 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo11.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('assets/#') ?>" >Photoshoot Summer 2016</a>
										<span>Last Added: 5 weeks ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo12.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('assets/#') ?>" >Amazing Street Food</a>
										<span>Last Added: 6 mins ago</span>
									</figcaption>
								</figure>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo13.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('assets/#') ?>" >Graffity & Street Art</a>
										<span>Last Added: 16 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo14.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('assets/#') ?>" >Amazing Landscapes</a>
										<span>Last Added: 13 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo15.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('assets/#') ?>" >The Majestic Canyon</a>
										<span>Last Added: 57 mins ago</span>
									</figcaption>
								</figure>
							</div>


							<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- ... end Window-popup Choose from my Photo -->


	<a class="back-to-top" href="<?= site_url('assets/#') ?>" >
		<img src="<?= site_url('assets/svg-icons/back-to-top.svg') ?>"  alt="arrow" class="back-icon">
	</a>




	<!-- Window-popup-CHAT for responsive min-width: 768px -->

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo"
	 aria-hidden="true">

		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title">Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
					</svg>
					<svg class="olymp-little-delete js-chat-open">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
					</svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('assets/img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling
									the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
										8:10pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('assets/img/author-page.jpg') ?>"  alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
										8:29pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('assets/img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling
									the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
										8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>

				<form class="need-validation">

					<div class="form-group label-floating is-empty">
						<label class="control-label">Press enter to post...</label>
						<textarea class="form-control" placeholder=""></textarea>
						<div class="add-options-message">
							<a href="<?= site_url('assets/#') ?>"  class="options-message">
								<svg class="olymp-computer-icon">
									<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use>
								</svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon">
									<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') ?>" ></use>
								</svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat1.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat2.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat3.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat4.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat5.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat6.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat7.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat8.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat9.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat10.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat11.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat12.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat13.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat14.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat15.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat16.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat17.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat18.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat19.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat20.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat21.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat22.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat23.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat24.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat25.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat26.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('assets/#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat27.png') ?>"  alt="icon">
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

	<script>
		function gender(str) {
		const Military = document.getElementById("military").parentElement.parentElement;
		if (str == 'man') {
			Military.classList.remove("d-none");
		}
		else if (str == 'woman'){
			Military.classList.add("d-none");
		} 
	}

	const readImage = (input, str) => {
		console.log('called');
		if (input.files && input.files[0]) {
			const reader = new FileReader();

			reader.onload = function(e) {
				 let image = document.getElementById(`preview-${str}`);
				 console.log(`preview-${str}`);
				 console.log(image);
				 image.setAttribute('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	};

	document.getElementById("upload-career").onchange = function() {
		readImage(this, "career");
	};
	document.getElementById("upload-educate").onchange = function() {
		readImage(this, "educate");
	};
	document.getElementById("upload-certificate").onchange = function() {
		readImage(this, "certificate");
	};

	function modalclear(){
		$("[name='ca_career']").val('');
		$("[name='ca_info']").val('');
		$("[name='ca_image']").val('');
		$("#preview-career").attr('src','');
		$("#preview-educate").attr('src','');
		$("#preview-certificate").attr('src','');
	}
	</script>

	<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
	<?php $this->load->view('layout/footer'); ?>