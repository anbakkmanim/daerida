<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="/" class="logo">
			<div class="img-wrap">
				<img src="<?= '/assets/img/logo.png' ?>" alt="Daerida">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="메뉴 열기"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-menu-icon' ?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="/hiring/hiringList">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="최근 구인 공고들"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon' ?>"></use></svg>
					</a>
				</li>
                <?php if ($this->session->me_idx != null){ ?>
				<li>
					<a href="/hiring/followList">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="팔로우 한 회사의 구인"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-star-icon' ?>"></use></svg>
					</a>
				</li>
				<?php } ?>
				<?php if ($this->session->me_type == "me_c_") {?>
									<li>
											<a href="/hiring/broadcastWrite">
													<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="구인 공고 작성"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon' ?>"></use></svg>
											</a>
									</li>
									
									<li>
											<a href="/hiring/resumeList">
													<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="지원자"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon' ?>"></use></svg>
											</a>
									</li>
				<?php } else { ?>
									<li>
											<a href="#">
													<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="팀 빌딩 공고"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon' ?>"></use></svg>
											</a>
									</li>
									<?php if ($this->session->me_idx != null){ ?>
                        <li>
                            <a href="#">
                                <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="내 팀"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-headphones-icon' ?>"></use></svg>
                            </a>
                        </li>
                    <?php } ?>
									
									<li>
											<a href="/hiring/appliedList">
													<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="구직 신청 한 공고"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon' ?>"></use></svg>
											</a>
									</li>
				<?php } ?>
				<li>
					<a href="/hiring/map">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="지도"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-badge-icon' ?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="/subpage/teamterview">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="팀터뷰"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-cupcake-icon' ?>"></use></svg>
					</a>
				</li>
			
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="/" class="logo">
			<div class="img-wrap">
				<img src="<?= '/assets/img/logo.png' ?>" alt="Daerida">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Daerida</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
						<span class="left-menu-title">닫기</span>
					</a>
				</li>
				<li>
					<a href="/hiring/hiringList">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon' ?>"></use></svg>
						<span class="left-menu-title">최근 구인 공고들</span>
					</a>
				</li>
                <?php if($this->session->me_idx != null){ ?>
				    <li>
				    	<a href="/hiring/followList">
					    <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Follow Job Offer"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-star-icon' ?>"></use></svg>
				    	<span class="left-menu-title">팔로우 한 회사의 구인</span>
				    	</a>
				    </li>
                <?php } ?>
				<?php if ($this->session->me_type == "me_c_") { ?>
					<li>
					<a href="/hiring/broadcastWrite">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WRITE APPLY"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon' ?>"></use></svg>
						<span class="left-menu-title">구인 공고 작성</span>
					</a>
					</li>
					
					<li>
                        <a href="/hiring/appliedList">
                            <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MY JOB OFFER"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon' ?>"></use></svg>
                            <span class="left-menu-title">구직 신청 한 공고</span>
                        </a>
                    </li>
				<?php } else { ?>
                    <li>
                        <a href="#">
                            <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="TEAM BUILD"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon' ?>"></use></svg>
                            <span class="left-menu-title">팀 빌딩 공고</span>
                        </a>
                    </li>
                    <?php if ($this->session->me_idx != null){ ?>
                        <li>
                            <a href="#">
                                <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MY TEAM"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-headphones-icon' ?>"></use></svg>
                                <span class="left-menu-title">내 팀</span>
                            </a>
                        </li>
                    <?php } ?>
										
                    <li>
                        <a href="/hiring/resumeList">
                            <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MY JOB OFFER"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon' ?>"></use></svg>
                            <span class="left-menu-title">지원자</span>
                        </a>
                    </li>
				<?php } ?>
				<li>
					<a href="/hiring/map">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MAP"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-badge-icon' ?>"></use></svg>
						<span class="left-menu-title">지도</span>
					</a>
				</li>
				<li>
					<a href="/subpage/teamterview">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="TEAMTERVIEW"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-cupcake-icon' ?>"></use></svg>
						<span class="left-menu-title">팀터뷰</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="#" class="logo js-sidebar-open" >
			<img src="<?= '/assets/img/logo.png' ?>" alt="Daerida" >
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo">
			<div class="img-wrap" style="width:100%">
				<img src="<?= '/assets/img/logo.png' ?>" style="height: 50px" alt="Daerida">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Daerida</h6>
			</div>
		</a>
        <?php if ($this->session->me_idx != null) { ?>
		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="<?= '/assets/img/author-page.jpg' ?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
					<a href="/" class="author-name fn">
						<div class="author-title">
							<?= $this->session->me_name ?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= $this->session->me_profile ?>"></use></svg>
						</div>
						<span class="author-subtitle"><?php 
							if ($this->session->me_type == "me_n_") 
								echo "일반회원";
							else
								echo "기업회원";
						?></span>
					</a>
				</div>
			</div>
			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">계정 설정</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="<?php
				if ($this->session->me_type == "me_n_")
					echo "/member/User?me_n_idx=". $this->session->me_idx;
				else
					echo "/member/Company?me_c_idx=". $this->session->me_idx;
				?>">

						<svg class="olymp-menu-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-menu-icon' ?>"></use></svg>

						<span>프로필 설정</span>
					</a>
				</li>
					<a href="/member/logout">
						<svg class="olymp-logout-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-logout-icon' ?>"></use></svg>

						<span>로그아웃</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">데리다란?</h6>
			</div>

			<ul class="about-olympus">
				<li>
					<a href="/subpage/about">
						<span>데리다 소개</span>
					</a>
				</li>
				<li>
					<a href="/subpage/support">
						<span>지원</span>
					</a>
				</li>
				<li>
					<a href="/subpage/teamterview">
						<span>팀터뷰</span>
					</a>
				</li>
			</ul>

		</div>
	    <?php } ?>
    </div>
</div>

<!-- ... end Fixed Sidebar Left -->

<header class="header" id="site-header">
  <div class="page-title">
    <h6>DAERIDA</h6>
	</div>
	<div class="header-content-wrapper">
		<div class="control-block">
			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
                    <?php if($this->session->me_idx != null){ ?>
					<img alt="author" src="<?= "/uploads/profile/".($this->session->me_profile != null ? $this->session->me_profile : "default.png") ?>" style="width:40px" class="avatar">
                    <div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="709ba5dd-e3ff-23ee-d8ab-52f0da53e507">
							<div class="ui-block-title ui-block-title-small">
								<h4 class="title">내 계정</h4>
							</div>

							<ul class="account-settings">
								<li>
									<a href="<?php
				if ($this->session->me_type == "me_n_")
					echo "/member/User?me_n_idx=". $this->session->me_idx;
				else
					echo "/member/Company?me_c_idx=". $this->session->me_idx;
				?>">
                                            <svg class="olymp-menu-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-menu-icon' ?>"></use></svg>

										<span>프로필 설정</span>
									</a>
								</li>
								<li>
									<a href="/member/logout">
										<svg class="olymp-logout-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-logout-icon' ?>"></use></svg>

										<span>로그아웃</span>
									</a>
								</li>
							</ul>
						<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

					</div>
				</div>
				<a href="<?php
				if ($this->session->me_type == "me_n_")
					echo "/member/User?me_n_idx=". $this->session->me_idx;
				else
					echo "/member/Company?me_c_idx=". $this->session->me_idx;
				?>
				" class="author-name fn">
					<div class="author-title">
						<?= $this->session->me_name?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon' ?>"></use></svg>
					</div>
					<span class="author-subtitle"><?php
					 	if ($this->session->me_type == "me_n_")
						 	echo "일반 회원";
						else
							echo "기업 회원";
					 ?></span>
				</a>
			</div>
            <?php } ?>
		</div>
	</div>

</header>

<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">
		<div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="4b473b17-ee6e-a505-e9ef-7a62401be867">
		</div>

	</div>

	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

		<div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark" data-ps-id="70482f89-fc87-f2d0-b47b-8872730dc778">
		</div>

	</div>
</div>

<div class="fixed-sidebar right fixed-sidebar-responsive">

	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

	</div>

</div>

<div class="header-spacer-small"></div>