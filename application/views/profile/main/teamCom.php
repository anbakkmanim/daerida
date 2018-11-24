
<body>


<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>



<!-- Top Header-Profile -->

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
                        <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                            <ul class="profile-menu">
                                <li>
                                    <a href="/profile/main">나에 대하여</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 ml-auto col-md-5">
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
                                    <a href="#" data-toggle="modal" data-target="#">쪽지 보내기</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#">팀빌딩 신청</a>
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
                        <a href="02-ProfilePage.html" class="h4 author-name"><? echo $customerdata['0']['custName'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- ... end Top Header-Profile -->
<!--기업찾기-->
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">회사</div>
					<form class="w-search">
						<div class="form-group with-button">
							<input class="form-control" type="text" placeholder="기업 찾기...">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Friends -->


<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Tab panes -->
            <div class="tab-content">


                <div class="tab-pane active" id="album-page" role="tabpanel">

                    <div class="photo-album-wrapper">


                        <div class="photo-album-item-wrap col-4-width">


                            <div class="photo-album-item" data-mh="album-item">
                                <div class="friend-header-thumb">
                                    <img src="<? echo base_url();?>assets/img/friend1.jpg" alt="friend">
                                </div>

                                <div class="content">
                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img src="<? echo base_url();?>assets/img/avatar1.jpg" alt="author">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="h5 author-name" name="TeamName">239</a>
                                        </div>
                                    </div>

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">6</div>
                                                        <div class="title">소속 인원수</div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">24</div>
                                                        <div class="title">경력</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">86</div>
                                                        <div class="title">프로젝트</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">16</div>
                                                        <div class="title">수상</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="photo-album-item-wrap col-4-width">


                            <div class="photo-album-item" data-mh="album-item">
                                <div class="friend-header-thumb">
                                    <img src="<? echo base_url();?>assets/img/friend1.jpg" alt="friend">
                                </div>

                                <div class="content">
                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img src="<? echo base_url();?>assets/img/avatar1.jpg" alt="author">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="h5 author-name" name="TeamName">239</a>
                                        </div>
                                    </div>

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">6</div>
                                                        <div class="title">소속 인원수</div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">24</div>
                                                        <div class="title">경력</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">86</div>
                                                        <div class="title">프로젝트</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">16</div>
                                                        <div class="title">수상</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="photo-album-item-wrap col-4-width">


                            <div class="photo-album-item" data-mh="album-item">
                                <div class="friend-header-thumb">
                                    <img src="<? echo base_url();?>assets/img/friend1.jpg" alt="friend">
                                </div>

                                <div class="content">
                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img src="<? echo base_url();?>assets/img/avatar1.jpg" alt="author">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="h5 author-name" name="TeamName">239</a>
                                        </div>
                                    </div>

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">6</div>
                                                        <div class="title">소속 인원수</div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">24</div>
                                                        <div class="title">경력</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">86</div>
                                                        <div class="title">프로젝트</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">16</div>
                                                        <div class="title">수상</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="photo-album-item-wrap col-4-width">

                            <div class="photo-album-item create-album" data-mh="album-item">

                                <a href="#" data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>

                                <div class="content">

                                    <a href="#" class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">
                                        <svg class="olymp-plus-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                                    </a>

                                    <a href="#" class="title h5" data-toggle="modal" data-target="#create-photo-album">회사 추가하기</a>
                                    <span class="sub-title">당신의 회사를 추가하세요!</span>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- ... end Friends -->


<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">팀</div>
					<form class="w-search">
						<div class="form-group with-button">
							<input class="form-control" type="text" placeholder="팀 검색하기...">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Friends -->

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Tab panes -->
            <div class="tab-content">


                <div class="tab-pane active" id="album-page" role="tabpanel">

                    <div class="photo-album-wrapper">


                        <div class="photo-album-item-wrap col-4-width">


                            <div class="photo-album-item" data-mh="album-item">
                                <div class="friend-header-thumb">
                                    <img src="<? echo base_url();?>assets/img/friend1.jpg" alt="friend">
                                </div>

                                <div class="content">
                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img src="<? echo base_url();?>assets/img/avatar1.jpg" alt="author">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="h5 author-name" name="TeamName">239</a>
                                        </div>
                                    </div>

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">6</div>
                                                        <div class="title">소속 인원수</div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">24</div>
                                                        <div class="title">경력</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">86</div>
                                                        <div class="title">프로젝트</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">16</div>
                                                        <div class="title">수상</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="photo-album-item-wrap col-4-width">


                            <div class="photo-album-item" data-mh="album-item">
                                <div class="friend-header-thumb">
                                    <img src="<? echo base_url();?>assets/img/friend1.jpg" alt="friend">
                                </div>

                                <div class="content">
                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img src="<? echo base_url();?>assets/img/avatar1.jpg" alt="author">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="h5 author-name" name="TeamName">239</a>
                                        </div>
                                    </div>

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">6</div>
                                                        <div class="title">소속 인원수</div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">24</div>
                                                        <div class="title">경력</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">86</div>
                                                        <div class="title">프로젝트</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">16</div>
                                                        <div class="title">수상</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="photo-album-item-wrap col-4-width">


                            <div class="photo-album-item" data-mh="album-item">
                                <div class="friend-header-thumb">
                                    <img src="<? echo base_url();?>assets/img/friend1.jpg" alt="friend">
                                </div>

                                <div class="content">
                                    <div class="friend-avatar">
                                        <div class="author-thumb">
                                            <img src="<? echo base_url();?>assets/img/avatar1.jpg" alt="author">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="h5 author-name" name="TeamName">239</a>
                                        </div>
                                    </div>

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">6</div>
                                                        <div class="title">소속 인원수</div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="swiper-slide">
                                                <div class="friend-count" data-swiper-parallax="-500">
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">24</div>
                                                        <div class="title">경력</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">86</div>
                                                        <div class="title">프로젝트</div>
                                                    </a>
                                                    <a href="#" class="friend-count-item">
                                                        <div class="h6">16</div>
                                                        <div class="title">수상</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="photo-album-item-wrap col-4-width">

                            <div class="photo-album-item create-album" data-mh="album-item">

                                <a href="#" data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>

                                <div class="content">

                                    <a href="#" class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">
                                        <svg class="olymp-plus-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                                    </a>

                                    <a href="#" class="title h5" data-toggle="modal" data-target="#create-photo-album">회사 추가하기</a>
                                    <span class="sub-title">당신의 회사를 추가하세요!</span>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- ... end Friends -->




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

<!-- ... end Window-popup Choose from my Photo -->


<a class="back-to-top" href="#">
	<img src="<? echo base_url();?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

</body>
</html>