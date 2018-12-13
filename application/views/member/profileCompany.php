<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block">
					<div class="top-header top-header-favorit">
						<div class="top-header-thumb">
                            <img src="<?= site_url('assets/img/top-header2.jpg') ?>"  alt="nature">
							<div class="top-header-author">
								<div class="author-thumb">
									<img src="<?= "/uploads/profile/" . $me_c_profile ?>"  alt="author">
								</div>
								<div class="author-content">
									<a href="<?= site_url('#') ?>"  class="h3 author-name"><?= $me_c_name ?></a>
									<div class="country"><?= $me_c_sido ?></div>
								</div>
							</div>
						</div>
						<div class="profile-section">
							<div class="row">
								<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
									<ul class="profile-menu">
										<li>
											<a href="<?= site_url('12-FavouritePage.html') ?>"  class="active">기업정보</a>
										</li>
										<li>
											<a href="/member/companyQnA?me_c_idx=<?=$me_c_idx?>" >Q&A</a>
										</li>
									</ul>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
				<div class="ui-block">


					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header ui-block-title" role="tab" id="headingOne">
								<h6 class="mb-0">
									<div class="row">
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2">
											<span>연혁</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>
									
										<?php if ($me_c_id == $this->session->me_id) {?>
										<div class="col-auto">
											<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-career">추가<div class="ripple-container"></div></a>
										</div>
										<?php } ?>
									</div>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">

									<?php
									
									foreach($history as $row){
										$a = "<div class='col'>
														<div class='card career'>
															<div class='card-body p-0 pl-4 pr-4'>
																<div class='row'>
																	<div class='col'>
																		<ul class='widget w-personal-info'>
																			<li class='row'>
																				<h5 class='text'>".$row->hi_year."</h5>
																				<h5 class='text ml-4'>".$row->hi_content."</h5>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>";
											echo $a;
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
						<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
							</svg></a>
					</div>
					<div class="ui-block-content">


						<!-- W-Personal-Info -->

						<ul class="widget w-personal-info">
							<li>
								<span class="title">기업소개:</span>
								<span class="text"><?= $me_c_info?></span>
							</li> 
							<li>
								<span class="title">기업명:</span>
								<span class="text"><?= $me_c_name ?></span>
							</li>
							<li>
								<span class="title">기업담당자:</span>
								<span class="text"><?= $me_c_manager ?></span>
							</li>
							<li>
								<span class="title">이메일:</span>
								<a href="mailto:<?= $me_c_email ?>" class="text"><?= $me_c_email ?></a>
							</li>
							<li>
								<span class="title">초봉:</span>
								<span class="text"><?= $me_c_salary ?></span>
							</li>
							<li>
								<span class="title">분야:</span>
								<span class="text"><?= $fi_l_name . "/" . $fi_s_name ?></span>
							</li>
							<li>
								<span class="title">지역:</span>
								<span class="text"><?= $me_c_sido ?></span>
							</li>
							<li>
								<span class="title">복리후생:</span>
								<span class="text"><?= $me_c_benefit ?></span>
							</li>
							<li>
								<span class="title">병역 여부:</span>
								<span class="text"><?= $me_c_isMilitary ?></span>
							</li>

						</ul>
                        <br>
						<!-- ... end W-Personal-Info -->
						<!-- W-Socials -->
					
						<?php if ($me_c_id == $this->session->me_id) {?>
						<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary mb-0 d-block" data-toggle="modal" data-target="#update-profile">프로필 수정</a>
						<?php } ?>
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
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-career" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">연혁 추가</h6>
				</div>

				<div class="modal-body">
				<form action="/member/addhistory" method="post">
				<input type="hidden" name="me_c_idx" value="<?=$me_c_idx?>">
					<div class="col">
						<div class="form-group label-floating">
							<label class="control-label">연도</label>
							<input class="form-control" name="hi_year" type="text">
						</div>
					</div>

					<div class="col">
						<div class="form-group label-floating">
							<label class="control-label">내용</label>
							<textarea class="form-control" name="hi_content" id="" cols="30" rows="5"></textarea>
						</div>
					</div>

					<input type="submit"  class="btn btn-secondary btn-lg btn--half-width" value="추가">
					<input type="button"  class="btn btn-secondary btn-lg btn--half-width" data-dismiss="modal" aria-label="Close" value="취소">
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Window-popup Update profile Form -->

	<div class="modal fade" id="update-profile" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">프로필 수정</h6>
				</div>

				<div class="modal-body">
							
				<form action="/member/setProfileCompany" method="post" enctype="multipart/form-data">
					<input type="hidden" name="me_c_idx" value="<?=$me_c_idx?>">
							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">기업소개</label>
									<textarea class="form-control" name="me_c_info" cols="30" rows="5"><?=$me_c_info?></textarea>
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">기업명</label>
									<input class="form-control" name="me_c_name" type="text" value="<?=$me_c_name?>">
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">기업담당자</label>
									<input class="form-control" name="me_c_manager" type="text" value="<?=$me_c_manager?>">
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">휴대전화</label>
									<input class="form-control" name="me_c_phone" type="number" value="<?=$me_c_phone?>">
								</div>
							</div>
							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">초봉</label>
									<input class="form-control" name="me_c_salary" type="text" value="<?=$me_c_salary?>">
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">이메일</label>
									<input class="form-control" name="me_c_email" type="email" value="<?=$me_c_email?>">
								</div>
							</div>

							<div class="col">
							<div class="row">
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
							</div>
							</div>

							<div class="col mb-3">
								<div class="row">
									<div class="checkbox col">
										<label>
											<input type="checkbox" id="military" name="me_c_isMilitary" <?php if($me_c_isMilitary == "on"){ echo "checked"; }?>>
											병역 이행 여부
										</label>
									</div>
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">복리후생</label>
									<input class="form-control" name="me_c_benefit" type="text" value="<?=$me_c_benefit?>">
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">주소</label>
									<input class="form-control" name="me_c_sido" type="text" value="<?=$me_c_sido?>">
								</div>
							</div>

							<div class="col">
								<label class="control-label">프로필 사진</label>
								<div class="col col-lg-3 col-md-3 col-sm-12 col-12 pl-0">
									<div class="file-upload d-inline-block">
										<label for="upload-profile" class="file-upload__label">Upload Button</label>
										<input id="upload-profile" class="file-upload__input" type="file" name="me_c_profile">
									</div>
									<div id="uploaded-file" class="d-inline-block">
										<img id="preview-profile" src="<?= site_url('/uploads/profile/'.$me_c_profile)?>">
									</div>
								</div>
							</div>

					<input type="submit" class="btn btn-secondary btn-lg btn--half-width" value="변경">
					<input type="button" class="btn btn-secondary btn-lg btn--half-width"  data-dismiss="modal" aria-label="Close" value="취소">
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
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Update Header Photo</h6>
				</div>

				<div class="modal-body">
					<a href="<?= site_url('#') ?>"  class="upload-photo-item">
						<svg class="olymp-computer-icon">
							<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use>
						</svg>

						<h6>Upload Photo</h6>
						<span>Browse your computer.</span>
					</a>

					<a href="<?= site_url('#') ?>"  class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

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
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Choose from My Photos</h6>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('#home') ?>"  role="tab" aria-expanded="true">
								<svg class="olymp-photos-icon">
									<use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('#profile') ?>"  role="tab" aria-expanded="false">
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


							<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

						</div>
						<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo10.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >South America Vacations</a>
										<span>Last Added: 2 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo11.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Photoshoot Summer 2016</a>
										<span>Last Added: 5 weeks ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo12.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Amazing Street Food</a>
										<span>Last Added: 6 mins ago</span>
									</figcaption>
								</figure>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo13.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Graffity & Street Art</a>
										<span>Last Added: 16 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo14.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Amazing Landscapes</a>
										<span>Last Added: 13 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('assets/img/choose-photo15.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >The Majestic Canyon</a>
										<span>Last Added: 57 mins ago</span>
									</figcaption>
								</figure>
							</div>


							<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- ... end Window-popup Choose from my Photo -->


	<a class="back-to-top" href="<?= site_url('#') ?>" >
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
							<a href="<?= site_url('#') ?>"  class="options-message">
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
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat1.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat2.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat3.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat4.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat5.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat6.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat7.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat8.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat9.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat10.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat11.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat12.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat13.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat14.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat15.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat16.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat17.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat18.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat19.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat20.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat21.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat22.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat23.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat24.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat25.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('assets/img/icon-chat26.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
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
	const readImage = (input, str) => {
		if (input.files && input.files[0]) {
			const reader = new FileReader();

			reader.onload = function(e) {
				 let image = document.getElementById(`preview-${str}`);
				 image.setAttribute('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	};

	document.getElementById("upload-profile").onchange = function() {
		readImage(this, "profile");
	};
	</script>

	<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
	<?php $this->load->view('layout/footer'); ?>