<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

<?php
	if ($me_n_isOpen == "비공개" && $me_n_id != $this->session->me_id && $this->session->me_type == "me_n_")
	{
		alert("비공개 계정입니다.");
		location_previous();
		return;
	}
?>

	<!-- Top Header-Profile -->

	<div class="container mt-5">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="ui-block">
					<div class="top-header top-header-favorit">
						<div class="top-header-thumb">
							<!-- dummy img -->
							<img src="/assets/img/Back.jpg"  alt="nature">
							<div class="top-header-author mt-5">
								<div class="author-thumb">
									<img src="<?= "/uploads/profile/". ($me_n_profile != null ? $me_n_profile : "default.png") ?>"  alt="author">
								</div>
								<div class="author-content">
									<a href="/assets/#"  class="h3 author-name"><?= $me_n_name ?></a>
									<?php if(isset($fi_l_name)){ ?>
										<div class="country"><?= $me_n_sido . " | " . $fi_l_name . "/" . $fi_s_name ?></div>
									<?php }else{ ?>
										<div class="country"><?= $me_n_sido . " | 미정"?></div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="profile-section">
							<div class="row">
								<div class="col col-xl-8 m-auto">
									<ul class="profile-menu mb-0	">
										<li>
											<a href="<?= '/member/User?me_n_idx='.$me_n_idx.'' ?>"  class="active"  style="font-size:1.25rem;">정보</a>
										</li>
										<li>
											<a href="<?= '/member/portfolio?me_n_idx='.$me_n_idx.'' ?>"  style="font-size:1.25rem;" >포트폴리오</a>
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
										<a data-toggle="collapse" data-parent="#accordion" href="/assets/#collapseOne"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto">
											<span class="h4 bold">경력</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="/assets/#olymp-dropdown-arrow-icon" ></use>
											</svg>
										</a>
										<?php if ($me_n_id == $this->session->me_id) {?>
											<div class="col-auto">
												<a href="#"  class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#create-career" onclick="modalclear()" style="font-size:1rem;" >추가<div class="ripple-container"></div></a>
											</div>
										<?php } ?>
									</div>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">
									<?php foreach($career as $row){
										if($row->ca_type == "career"){ ?>
											<div class='col'>
											<form action="/member/delportfolio" method="post">
											<input type="hidden" name="me_n_idx" value=<?=$me_n_idx?>>
											<input type="hidden" name="ca_idx" value=<?=$row->ca_idx?>>
											<input type="hidden" name="ca_type" value="career">
														<div class='card career'>
															<div class='card-body'>
																<div class='row'>
																	<div class='col-sm-12 col-lg-3 col-6'>
																		<img src='/uploads/profile/<?=$row->ca_image != null ? $row->ca_image : '경력.png' ?>' class='rounded float-left' alt='...'>
																	</div>
																	<div class='col'>
																		<h5 class='card-title mt-2 mb-0' style="font-size:1.25rem;"><?=$row->ca_career?></h5>
																		<ul class='widget w-personal-info'>
																			<li>
																				<span class='text'  style="font-size:1rem;"><?=$row->ca_info?></span>
																			</li>
																		</ul>
																	</div>
																	<div class='col col-sm-2 mt-2'>
																		<input type="submit" value="삭제">
																	</div>
																</div>
															</div>
														</div>
														</form>
													</div>
									<?php	}
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
										<a data-toggle="collapse" data-parent="#accordion" href="/assets/#collapseTwo"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto">
											<span class="h4 bold">학력</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="/assets/#olymp-dropdown-arrow-icon" ></use>
											</svg>
										</a>

										<?php if ($me_n_id == $this->session->me_id) {?>
										<div class="col-auto">
											<a href="/assets/#"  class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#create-edu" style="font-size:1rem;">추가<div class="ripple-container"></div></a>
										</div>
										<?php } ?>
									</div>
								</h6>
							</div>

							<div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">
								<?php foreach($career as $row){
										if($row->ca_type == "educate"){ ?>
										<div class='col'>
										<form action="/member/delportfolio" method="post">
											<input type="hidden" name="me_n_idx" value=<?=$me_n_idx?>>
											<input type="hidden" name="ca_idx" value=<?=$row->ca_idx?>>
											<input type="hidden" name="ca_type" value="educate">
														<div class='card career'>
															<div class='card-body'>
																<div class='row'>
																	<div class='col-sm-12 col-lg-3 col-6'>
																		<img src='/uploads/profile/<?=$row->ca_image != null ? $row->ca_image : '학력.png' ?>' class='rounded float-left' alt='...'>
																	</div>
																	<div class='col'>
																	<h5 class='card-title mt-2 mb-0' style="font-size:1.25rem;"><?=$row->ca_career?></h5>
																		<ul class='widget w-personal-info'>
																			<li>
																				<span class='text'  style="font-size:1rem;"><?=$row->ca_info?></span>
																			</li>
																		</ul>
																	</div>
																	<div class='col col-sm-2 mt-2'>
																		<input type="submit" value="삭제">
																	</div>
																</div>
															</div>
														</div>
														</FORM>
													</div>
									<?php	}
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
										<a data-toggle="collapse" data-parent="#accordion" href="/assets/#collapseThree"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto">
											<span class="h4 bold">자격증</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="/assets/#olymp-dropdown-arrow-icon" ></use>
											</svg>
										</a>

										<?php if ($me_n_id == $this->session->me_id) {?>
										<div class="col-auto">
											<a href="/assets/#"  class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#create-card" style="font-size:1rem;">추가<div class="ripple-container"></div></a>
										</div>
										<?php } ?>
									</div>
								</h6>
							</div>

							<div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">


								<div class="ui-block-content">
								<?php foreach($career as $row){
										if($row->ca_type == "certificate"){ ?>
										<div class='col'>
											<form action="/member/delportfolio" method="post">
											<input type="hidden" name="me_n_idx" value=<?=$me_n_idx?>>
											<input type="hidden" name="ca_idx" value=<?=$row->ca_idx?>>
											<input type="hidden" name="ca_type" value="certificate">
											<div class='card career'>
												<div class='card-body'>
													<div class='row'>
														<div class='col-sm-12 col-lg-3 col-6'>
															<img src='/uploads/profile/<?=$row->ca_image != null ? $row->ca_image : '자격증.png' ?>' class='rounded float-left' alt='...'>
														</div>
														<div class='col'>
														<h5 class='card-title mt-2 mb-0' style="font-size:1.25rem;"><?=$row->ca_career?></h5>
																		<ul class='widget w-personal-info'>
																			<li>
																				<span class='text'  style="font-size:1rem;"><?=$row->ca_info?></span>
																			</li>
																		</ul>
														</div>
														<div class='col col-sm-2 mt-2'>
															<input type="submit" value="삭제">
														</div>
													</div>
												</div>
											</div>
											</form>
										</div>
									<?php	}
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
						<h4 class="title bold">프로필</h4>
					</div>
					<div class="ui-block-content">


						<!-- W-Personal-Info -->

						<ul class="widget w-personal-info">
							<li>
								<h5 class="title">자기소개:</h5>
              	<h5 class="text" style="font-weight:500;"><?= $me_n_info ?> </h5>
							</li>
							<li>
								<h5 class="title">이름:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_name ?></h5>
							</li>
							<li>
								<h5 class="title">분야:</h5>
								<?php if(isset($fi_l_name)){ ?>
									<h5 class="text" style="font-weight:500;"><?= $fi_l_name . "/" . $fi_s_name ?></h5>
								<?php }else{ ?>
									<h5 class="text" style="font-weight:500;">미정</h5>
								<?php } ?>
							</li>
							<li>
								<h5 class="title">거주지:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_sido ?></h5>
							</li>
							<li>
								<h5 class="title">희망연봉:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_hopeSalary ?></h5>
							</li>
							<li>
								<h5 class="title">나이:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_age ?></h5>
							</li>
							<li>
								<h5 class="title">성별:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_gender ?></h5>
							</li>
                            <li>
								<h5 class="title">이메일:</h5>
								<a href="mailto:<?= $me_n_email ?>" class="text" style="font-size:1rem;"><?= $me_n_email ?></a>
							</li>
							<li>
								<h5 class="title">전화번호:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_phone ?></h5>
							</li>
							<li>
								<h5 class="title">병역 이행 여부:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_isMilitary ?></h5>
							</li>
							<li>
								<h5 class="title">공개 여부:</h5>
								<h5 class="text" style="font-weight:500;"><?= $me_n_isOpen ?></h5>
							</li>
						</ul>
						<br>

						<!-- ... end W-Personal-Info -->
						<!-- W-Socials -->

						<?php if ($me_n_id == $this->session->me_id) {?>
						<a href="/assets/#"  class="btn btn-primary btn-md full-width " style="font-size:17px;" data-toggle="modal" data-target="#update-profile">프로필 수정</a>
						<?php } ?>
						<div class="row mt-2">
                            <?php if($me_n_googleToken == null) {?>
                                <div class="col">
                                    <a href="/snslogin/addGoogle" id="btn-login-google" class="btn bg-google full-width btn-6"><img src="/assets/SVG/Googleicon.svg" width="26" alt=""></a>
                                </div>
                            <?php }
                            if ($me_n_kakaoToken == null) {?>
                                <div class="col">
                                    <a href="/snslogin/addKakao" class="btn bg-yellow full-width btn-6"><img src="/assets/SVG/Kakaoicon.svg" width="26" alt=""></a>
                                </div>
                            <?php }
                            if ($me_n_naverToken == null) {
                            ?>
                                <div class="col">
                                    <a href="/snslogin/addNaver" class="btn bg-green full-width btn-6"><img src="/assets/SVG/Navericon.svg" width="26" alt=""></a>
                                </div>
                            <?php } ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="modal fade" id="create-career" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="/assets/#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use>
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
						<div class="col mt-2">
							<input type="submit"  class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2 mr-4" value="추가">
							<input type="button"  class="btn btn-secondary btn-lg btn--half-width m-0 mb-2" data-dismiss="modal" aria-label="Close" value="취소">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-edu" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="/assets/#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use>
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
						<div class="col mt-2">
							<input type="submit"  class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2 mr-4" value="추가">
							<input type="button"  class="btn btn-secondary btn-lg btn--half-width m-0 mb-2" data-dismiss="modal" aria-label="Close" value="취소">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-card" tabindex="-1" role="dialog" aria-labelledby="create-card" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="/assets/#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use>
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
					<div class="col mt-2">
						<input type="submit"  class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2 mr-4" value="추가">
						<input type="button"  class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2"  data-dismiss="modal" aria-label="Close" value="취소">
					</div>
				</form>
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
				<a href="/assets/#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">프로필 수정</h6>
				</div>

				<div class="modal-body">

					<form action="/member/setProfileNormal" method="post" enctype="multipart/form-data">
					<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
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
								</div></div>
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">나이</label>
									<input class="form-control" name="me_n_age"  type="text" value="<?= $me_n_age ?>">
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
											<input type="radio" name="me_n_gender" id="man" value="man" onclick="gender('man')" <?php if($me_n_gender == "man"){ echo "checked"; }?>><span class="circle"></span><span class="check"></span>
											남자
										</label>
									</div>
									<div class="radio col">
										<label>
											<input type="radio" name="me_n_gender" id="woman" value="woman" onclick="gender('woman')" <?php if($me_n_gender == "woman"){ echo "checked";  }?>><span class="circle"></span><span class="check"></span>
											여자 
										</label>
									</div>
									
									<div class="checkbox col <?php if($me_n_gender == "woman"){ echo "d-none";} ?>" >
										<label>
											<input type="checkbox" id="military"  name="me_n_isMilitary" <?php if($me_n_isMilitary == "O"){ echo "checked "; }?>>
											병역 이행 여부
										</label>
									</div>
									
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label class="control-label">프로필 사진</label>
								<div class="col col-lg-3 col-md-3 col-sm-12 col-12 pl-0">
									<div class="file-upload d-inline-block">
										<label for="upload-profile" class="file-upload__label">Upload Button</label>
										<input id="upload-profile" class="file-upload__input" type="file" name="me_n_profile">
									</div>
									<div id="uploaded-file" class="d-inline-block">
										<img id="preview-profile" src="<?= '/uploads/profile/'.$me_n_profile ?>">
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
							<div class="col mt-2">
								<input type="submit" class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2 mr-4" value="변경">
								<input type="button" class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2" data-dismiss="modal" aria-label="Close" value="취소">
							</div>
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
				<a href="/assets/#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Update Header Photo</h6>
				</div>

				<div class="modal-body">
					<a href="/assets/#"  class="upload-photo-item">
						<svg class="olymp-computer-icon">
							<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-computer-icon" ></use>
						</svg>

						<h6>Upload Photo</h6>
						<span>Browse your computer.</span>
					</a>

					<a href="/assets/#"  class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

						<svg class="olymp-photos-icon">
							<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-photos-icon" ></use>
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
				<a href="/assets/#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Choose from My Photos</h6>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="/assets/#home"  role="tab" aria-expanded="true">
								<svg class="olymp-photos-icon">
									<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-photos-icon" ></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="/assets/#profile"  role="tab" aria-expanded="false">
								<svg class="olymp-albums-icon">
									<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-albums-icon" ></use>
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
										<img src="/assets/img/choose-photo1.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo2.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo3.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo4.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo5.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo6.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo7.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo8.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="/assets/img/choose-photo9.jpg"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>


							<a href="/assets/#"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="/assets/#"  class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

						</div>
						<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/img/choose-photo10.jpg"  alt="photo">
									<figcaption>
										<a href="/assets/#" >South America Vacations</a>
										<span>Last Added: 2 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/img/choose-photo11.jpg"  alt="photo">
									<figcaption>
										<a href="/assets/#" >Photoshoot Summer 2016</a>
										<span>Last Added: 5 weeks ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/img/choose-photo12.jpg"  alt="photo">
									<figcaption>
										<a href="/assets/#" >Amazing Street Food</a>
										<span>Last Added: 6 mins ago</span>
									</figcaption>
								</figure>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/img/choose-photo13.jpg"  alt="photo">
									<figcaption>
										<a href="/assets/#" >Graffity & Street Art</a>
										<span>Last Added: 16 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/img/choose-photo14.jpg"  alt="photo">
									<figcaption>
										<a href="/assets/#" >Amazing Landscapes</a>
										<span>Last Added: 13 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="/assets/img/choose-photo15.jpg"  alt="photo">
									<figcaption>
										<a href="/assets/#" >The Majestic Canyon</a>
										<span>Last Added: 57 mins ago</span>
									</figcaption>
								</figure>
							</div>


							<a href="/assets/#"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
							<a href="/assets/#"  class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- ... end Window-popup Choose from my Photo -->


	<a class="back-to-top" href="/assets/#" >
		<img src="/assets/svg-icons/back-to-top.svg"  alt="arrow" class="back-icon">
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
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon" ></use>
					</svg>
					<svg class="olymp-little-delete js-chat-open">
						<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-little-delete" ></use>
					</svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img src="/assets/img/avatar14-sm.jpg"  alt="author" class="mCS_img_loaded">
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
								<img src="/assets/img/author-page.jpg"  alt="author" class="mCS_img_loaded">
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
								<img src="/assets/img/avatar14-sm.jpg"  alt="author" class="mCS_img_loaded">
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
							<a href="/assets/#"  class="options-message">
								<svg class="olymp-computer-icon">
									<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-computer-icon" ></use>
								</svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon">
									<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon" ></use>
								</svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat1.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat2.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat3.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat4.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat5.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat6.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat7.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat8.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat9.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat10.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat11.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat12.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat13.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat14.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat15.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat16.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat17.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat18.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat19.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat20.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat21.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat22.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat23.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat24.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat25.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat26.png"  alt="icon">
										</a>
									</li>
									<li>
										<a href="/assets/#" >
											<img src="/assets/img/icon-chat27.png"  alt="icon">
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
			$("#military").prop('checked',false);
			Military.classList.add("d-none");
		} 
	}

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

	document.getElementById("upload-career").onchange = function() {
		readImage(this, "career");
	};
	document.getElementById("upload-educate").onchange = function() {
		readImage(this, "educate");
	};
	document.getElementById("upload-certificate").onchange = function() {
		readImage(this, "certificate");
	};
	document.getElementById("upload-profile").onchange = function() {
		readImage(this, "profile");
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