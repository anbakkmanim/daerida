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
									<img src="<?= "/uploads/profile/". $me_n_profile ?>"  alt="author">
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
											<a href="<?= site_url('assets/00_portfolio.html') ?>" >포트폴리오</a>
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
											<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-career">추가<div class="ripple-container"></div></a>
										</div>
									</div>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">
									<!-- <div class="row"> -->

									<div class="col">
										<div class="card career">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-2">
														<img src="<?= site_url('assets/img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
													</div>
													<div class="col">
														<h5 class="card-title">대구소프트웨어고</h5>
														<ul class="widget w-personal-info">
															<li>
																<span class="text">소개글</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card career">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-2">
														<img src="<?= site_url('assets/img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
													</div>
													<div class="col">
														<h5 class="card-title">대구소프트웨어고</h5>
														<ul class="widget w-personal-info">
															<li>
																<span class="text">소개글</span>
															</li>
														</ul>
													</div>


												</div>
											</div>
										</div>
									</div>
									<!-- </div> -->
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
									<!-- <div class="row"> -->

									<div class="col">
										<div class="card career">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-2">
														<img src="<?= site_url('assets/img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
													</div>
													<div class="col">
														<h5 class="card-title">대구소프트웨어고</h5>
														<ul class="widget w-personal-info">
															<li>
																<span class="title">소개글:</span>
																<span class="text">ㅁㅇㅁㅇㅁ</span>
															</li>
														</ul>
													</div>


												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card career">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-2">
														<img src="<?= site_url('assets/img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
													</div>
													<div class="col">
														<h5 class="card-title">대구소프트웨어고</h5>
														<ul class="widget w-personal-info">
															<li>
																<span class="title">소개글:</span>
																<span class="text">ㅁㅇㅁㅇㅁ</span>
															</li>
														</ul>
													</div>


												</div>
											</div>
										</div>
									</div>
									<!-- </div> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="ui-block">
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header ui-block-title" role="tab" id="headingOne">
								<h6 class="mb-0">
									<div class="row">
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('assets/#collapseThree') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2">
											<span>활동 분야</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('assets/#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>

										<div class="col-auto">
											<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-sm">추가</a>
										</div>
									</div>
								</h6>
							</div>

							<div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">

								<div class="ui-block-content">
									<div class="row">
										<div class="col">
											<ul class="widget w-personal-info item-block">
												<li>
													<span class="title">Hobbies:</span>
													<span class="text">I like to ride the bike to work, swimming, and working out. I also like
														reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.
													</span>
												</li>
												<li>
													<span class="title">Favourite TV Shows:</span>
													<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.</span>
												</li>
												<li>
													<span class="title">Favourite Movies:</span>
													<span class="text">Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad, Ferrum Man. </span>
												</li>
												<li>
													<span class="title">Favourite Games:</span>
													<span class="text">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch
														Auto. </span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div> -->


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
									<!-- <div class="row"> -->

									<div class="col">
										<div class="card career">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-2">
														<img src="<?= site_url('assets/img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
													</div>
													<div class="col">
														<h5 class="card-title">정보처리기능사</h5>
														<ul class="widget w-personal-info">
															<li>
																<span class="title">발행처:</span>
																<span class="text">ㅁㄴㅇㄹ</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="card career">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-2">
														<img src="<?= site_url('assets/img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
													</div>
													<div class="col">
														<h5 class="card-title">정보처리기능사</h5>
														<ul class="widget w-personal-info">
															<li>
																<span class="title">발행처:</span>
																<span class="text">ㅁㄴㅇㄹ</span>
															</li>
														</ul>
													</div>


												</div>
											</div>
										</div>
									</div>
									<!-- </div> -->
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
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('assets/#collapseFour') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2 mb-2">
											<span>공개 여부</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('assets/#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>
										<div class="col-auto">
												<div class="togglebutton">
													<label>
														<input type="checkbox" checked="">
													</label>
												</div>
										</div>
									</div>
								</h6>
							</div>
						</div>

					</div>

				</div>
				<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-md col" data-toggle="modal" data-target="#">저장<div class="ripple-container"></div></a>
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
                                <span class="text"><?= $me_n_info ?></span>
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
								<span class="title">병력 이행 여부:</span>
								<span class="text"><?= $me_n_isMilitary ?></span>
							</li>

						</ul>

						<!-- ... end W-Personal-Info -->
						<!-- W-Socials -->

						<div class="row mr-1 ml-1">

							<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary col mr-3" data-toggle="modal" data-target="#update-profile">프로필 수정<div class="ripple-container"></div></a>
							<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary col" data-toggle="modal" data-target="#create-photo-album">비밀번호 변경<div class="ripple-container"></div></a>

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
					<div class="col">

						<form class="form-group label-floating">
							<label class="control-label">기업명</label>
							<input class="form-control" placeholder="" type="text">
						</form>
					</div>

					<div class="col">
						<div class="form-group label-floating">
							<label class="control-label">간단한 소개</label>
							<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
						</div>
					</div>

					<div class="col">
						<label class="control-label">이미지</label>
						<input type="file">
					</div>

					<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">추가</a>
					<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

				</div>
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
				
					<div class="col">

						<form class="form-group label-floating">
							<label class="control-label">학교명</label>
							<input class="form-control" placeholder="" type="text">
						</form>
					</div>

					<div class="col">
						<div class="form-group label-floating">
							<label class="control-label">간단한 소개</label>
							<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
						</div>
					</div>

					<div class="col">
						<label class="control-label">이미지</label>
						<input type="file">
					</div>

					<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">추가</a>
					<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

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
					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col">
								<form class="form-group label-floating">
									<label class="control-label">자격증명</label>
									<input class="form-control" placeholder="" type="text">
								</form>
							</div>
							<div class="col">
								<form class="form-group label-floating">
									<label class="control-label">발행처</label>
									<input class="form-control" placeholder="" type="text">
								</form>
							</div>
						</div>
					</div>


					<div class="col">
						<label class="control-label">이미지</label>
						<input type="file">
					</div>
					<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">추가</a>
					<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

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

					<form>
						<div class="row">

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">자기소개</label>
									<textarea class="form-control" name="" id="" cols="30" rows="5"><?= $me_n_info ?></textarea>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이름</label>
									<input class="form-control" placeholder="" type="text" value="<?= $me_n_name ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이메일</label>
									<input class="form-control" placeholder="" type="email" value="<?= $me_n_email ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">전화번호</label>
									<input class="form-control" placeholder="" type="number" value="<?= $me_n_phone ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<fieldset disabled>
									<div class="form-group label-floating has-disabled.is-empty">
										<label class="control-label">기억에 남는 추억의 장소는 어디 입니까?</label>
										<input class="form-control" placeholder="" type="text" >
									</div>
								</fieldset>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">답변</label>
									<input class="form-control" placeholder="" type="text" value="<?= $me_n_findpw ?>">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="none">분야</option>
									<option value="computer">컴퓨터</option>
									<option value="farmer">농업</option>
								</select>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="none">나이</option>
									<option value="one">20세 이상 25세 미만</option>
									<option value="two">25세 이상 30세 미만</option>
									<option value="three">30세 이상 35세 미만</option>
									<option value="four">35세 이상 40세 미만</option>
									<option value="five">40세 이상 45세 미만</option>
									<option value="six">45세 이상 50세 미만</option>
									<option value="seven">50세 이상 55세 미만</option>
									<option value="eight">55세 이상 60세 미만</option>
								</select>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="none">거주지</option>
									<option value="computer">서울</option>
									<option value="farmer">대구</option>
								</select>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="none">희망연봉</option>
									<option value="one">2500 미만</option>
									<option value="two">2500 이상 3000 미만</option>
									<option value="three">3000 이상 3500 미만</option>
									<option value="four">3500 이상 4000 미만</option>
									<option value="five">4000 이상 4500 미만</option>
									<option value="six">4500 이상 5000미만</option>
									<option value="seven">5000 이상</option>
								</select>
							</div>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="radio col">
										<label>
											<input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
											남자
										</label>
									</div>
									<div class="radio col">
										<label>
											<input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
											여자
										</label>
									</div>
									<div class="checkbox col">
										<label>
											<input name="optionsCheckboxes" type="checkbox">
											병력 이행 여부
										</label>
									</div>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label class="control-label">프로필 사진</label>
								<input type="file">
							</div>


						</div>
					</form>

					<a href="<?= site_url('assets/#') ?>"  class="btn btn-secondary btn-lg btn--half-width">변경</a>
					<a href="<?= site_url('assets/#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

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

	<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
	<?php $this->load->view('layout/footer'); ?>