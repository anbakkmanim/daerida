<!DOCTYPE html>
<html lang="en">
<head>

	<title>navbar</title>
<!--    --><?php //include "header.php" ?>

</head>
<body>




	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

			<a href="<?=site_url('main/login')?>" class="logo">
				<div class="img-wrap">
					<img src="<?php echo base_url();?>assets/img/logo.png" alt="Daerida">
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
                            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="메뉴 펼치기"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?=site_url('JobOffer/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="구인"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?=site_url('JobSearch/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="구직"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-star-icon"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?=site_url('TeamBuilding/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="팀빌딩"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
						</a>
					</li>
                    <li>
                        <a href="<?=site_url('intro/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"   data-toggle="tooltip" data-placement="right"   data-original-title="소개"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('ProfileEdit/profile1')?>">
                            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="설정"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
                        </a>
                    </li>

                </ul>
			</div>
		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
			<a href="<?=site_url('main/login')?>" class="logo">
				<div class="img-wrap">
					<img src="<?php echo base_url();?>assets/img/logo.png" alt="Daerida">
				</div>
				<div class="title-block">
					<h6 class="logo-title">Daerida</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
                            <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
							<span class="left-menu-title m-l-20">메뉴닫기</span>
						</a>
					</li>
					<li>
						<a href="<?=site_url('JobOffer/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
                            <span class="left-menu-title m-l-20">구인</span>
						</a>
						<ul class="sub-item">
							<li>
								<a href="<?=site_url('JobOffer/main')?>">
									- 전체 구인정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('JobOffer/main')?>">
									- 찜한 구인정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('JobOffer/main')?>">
									- 내 구인정보
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?=site_url('JobSearch/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-star-icon"></use></svg>
                            <span class="left-menu-title m-l-20">구직</span>
						</a>
						<ul class="sub-item">
							<li>
								<a href="<?=site_url('JobSearch/main')?>">
									- 전체 구직정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('JobSearch/main')?>">
									- 찜한 구직정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('JobSearch/main')?>">
									- 내 구직정보
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?=site_url('TeamBuilding/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
                            <span class="left-menu-title m-l-20">팀빌딩</span>
						</a>
						<ul class="sub-item">
							<li>
								<a href="<?=site_url('TeamBuilding/main')?>">
									- 전체 팀정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('TeamBuilding/main')?>">
									- 찜한 팀정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('TeamBuilding/main')?>">
									- 내 팀정보
								</a>
							</li>
						</ul>
					</li>
                    <li>
                        <a href="<?=site_url('intro/main')?>">
                            <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
                            <span class="left-menu-title m-l-20">소개</span>
                        </a>
                        <ul class="sub-item">
                            <li>
                                <a href="<?=site_url('intro/main')?>">
                                    - 데리다 소개
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url('intro/profile')?>">
                                    - 팀 소개
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url('intro/contactUs')?>">
                                    - 소통하기
                                </a>
                            </li>
                        </ul>
                    </li>
					<li>
						<a href="<?=site_url('ProfileEdit/profile1')?>">
                            <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
                            <span class="left-menu-title m-l-20">설정</span>
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
			<a href="#" class="logo js-sidebar-open">
				<img src="<?php echo base_url();?>assets/img/logo.png" alt="Daerida">
			</a>

		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="<?php echo base_url();?>assets/img/logo.png" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">Daerida</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<div class="control-block">
					<div class="author-page author vcard inline-items">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/author-page.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>
						<a href="02-ProfilePage.html" class="author-name fn">
							<div class="author-title">
								James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
							</div>
							<span class="author-subtitle">SPACE COWBOY</span>
						</a>
					</div>
				</div>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">MAIN SECTIONS</h6>
				</div>

				<ul class="left-menu">
					<li>
						<a href="#" class="js-sidebar-open">
							<div class="img-wrap">
								<img src="<?php echo base_url();?>assets/img/fold.png" alt="Olympus">
							</div>
							<span class="left-menu-title m-l-20">메뉴닫기</span>
						</a>
					</li>
					<li>
						<a href="<?=site_url('JobOffer/main')?>">
							<div class="img-wrap">
								<img src="<?php echo base_url();?>assets/img/user.png">
							</div>
							<span class="left-menu-title m-l-20">구인</span>
						</a>
						<ul class="sub-item">
							<li>
								<a href="<?=site_url('JobOffer/main')?>">
									- 전체 구인정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('JobOffer/main')?>">
									- 찜한 구인정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('JobOffer/main')?>">
									- 내 구인정보
								</a>
							</li>
						</ul>
					</li>
                    <li>
                        <a href="<?=site_url('JobSearch/main')?>">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/img/company.png">
                            </div>
                            <span class="left-menu-title m-l-20">구직</span>
                        </a>
                        <ul class="sub-item">
                            <li>
                                <a href="<?=site_url('JobSearch/main')?>">
                                    - 전체 구직정보
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url('JobSearch/main')?>">
                                    - 찜한 구직정보
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url('JobSearch/main')?>">
                                    - 내 구직정보
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=site_url('intro/main')?>">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/img/company.png">
                            </div>
                            <span class="left-menu-title m-l-20">소개</span>
                        </a>
                        <ul class="sub-item">
                            <li>
                                <a href="<?=site_url('intro/main')?>">
                                    - 데리다 소개
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url('intro/profile')?>">
                                    - 팀 소개
                                </a>
                            </li>
                            <li>
                                <a href="<?=site_url('intro/contactUs')?>">
                                    - 소통하기
                                </a>
                            </li>
                        </ul>
                    </li>
					<li>
						<a href="<?=site_url('TeamBuilding/main')?>">
							<div class="img-wrap">
								<img src="<?php echo base_url();?>assets/img/icons8-user-groups-100.png">
							</div>
							<span class="left-menu-title m-l-20">팀빌딩</span>
						</a>
						<ul class="sub-item">
							<li>
								<a href="<?=site_url('TeamBuilding/main')?>">
									- 전체 팀정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('TeamBuilding/main')?>">
									- 찜한 팀정보
								</a>
							</li>
							<li>
								<a href="<?=site_url('TeamBuilding/main')?>">
									- 내 팀정보
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?=site_url('ProfileEdit/profile1')?>">
							<div class="img-wrap">
								<img src="<?php echo base_url();?>assets/img/setting.png">
							</div>
							<span class="left-menu-title m-l-20">설정</span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->

	<!-- Fixed Sidebar Right -->

	<div class="fixed-sidebar right">
		<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="chat-users">
					<li class="inline-items js-chat-open user-img">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user4.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo $this->session->userImage ?>" class="avatar">
						</div>
					</li>

					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user5.jpg" class="avatar">
						</div>
					</li>

					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user6.jpg" class="avatar">
						</div>
					</li>

					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user7.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user8.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user8.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user10.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user11.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">
						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user12.jpg" class="avatar">
						</div>
					</li>
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user13.jpg" class="avatar">
						</div>
					</li>
				</ul>
			</div>

			<div class="search-friend inline-items p-l-25 p-b-15">
				<a href="#" class="js-sidebar-open">
                    <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
				</a>
			</div>

			<a href="#" class="olympus-chat inline-items js-chat-open">
				<div class="img-wrap right-sidebar-fold t-5">
					<img src="<?php echo base_url();?>assets/img/chat-icon.png">
				</div>
			</a>

		</div>

		<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">239</a>
					<a href="#">Settings</a>
				</div>

				<ul class="chat-users">

					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user5.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">전재홍</a>
							<span class="status">대구</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>

					</li>

					<li class="inline-items js-chat-open">


						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user6.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">이상구</a>
							<span class="status">제주도</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>


					</li>

					<li class="inline-items js-chat-open">


						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user7.jpg" class="avatar">
							<span class="icon-status away"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">전영준</a>
							<span class="status">대구</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>


					</li>

					<li class="inline-items js-chat-open">


						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user8.jpg" class="avatar">
							<span class="icon-status disconected"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">배준현</a>
							<span class="status">대구</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>


					</li>
                    <li class="inline-items js-chat-open">

                        <div class="author-thumb">
                            <img alt="author" src="<?php echo base_url();?>assets/img/user4.jpg" class="avatar">
                            <span class="icon-status online"></span>
                        </div>

                        <div class="author-status">
                            <a href="#" class="h6 author-name">곽봉순</a>
                            <span class="status">대구</span>
                        </div>

                        <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

                            <ul class="more-icons">
                                <li>
                                    <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                </li>

                                <li>
                                    <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
                                </li>

                                <li>
                                    <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
                                </li>
                            </ul>

                        </div>

                    </li>
				</ul>


				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title">친구</a>
					<a href="#">Settings</a>
				</div>

				<ul class="chat-users">
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user9.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">NULL</a>
							<span class="status">대구</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>
					</li>
				</ul>


				<div class="ui-block-title ui-block-title-small">
					<a href="#" class="title"></a>
					<a href="#">Settings</a>
				</div>

				<ul class="chat-users">
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user10.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">가나다</a>
							<span class="status">ONLINE</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>


					</li>
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user11.jpg" class="avatar">
							<span class="icon-status away"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">라마바</a>
							<span class="status">AWAY</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>

					</li>
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user12.jpg" class="avatar">
							<span class="icon-status status-invisible"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">사아자</a>
							<span class="status">INVISIBLE</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>
					</li>
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user13.jpg" class="avatar">
							<span class="icon-status away"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">차카타</a>
							<span class="status">AWAY</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>
					</li>
					<li class="inline-items js-chat-open">

						<div class="author-thumb">
							<img alt="author" src="<?php echo base_url();?>assets/img/user14.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>

						<div class="author-status">
							<a href="#" class="h6 author-name">파하</a>
							<span class="status">ONLINE</span>
						</div>

						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

							<ul class="more-icons">
								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
								</li>

								<li>
									<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
								</li>
							</ul>

						</div>
					</li>
				</ul>

			</div>

			<div class="search-friend inline-items">
				<form class="form-group" >
					<input class="form-control" placeholder="Search Friends..." value="" type="text">
				</form>

				<a href="29-YourAccount-AccountSettings.html" class="settings">
					<svg class="olymp-settings-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-settings-icon"></use></svg>
				</a>

				<a href="#" class="js-sidebar-open p-t-5">
                    <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
				</a>
			</div>

			<a href="#" class="olympus-chat inline-items js-chat-open">

				<h6 class="olympus-chat-title">Daerida message</h6>
                <svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
            </a>

		</div>
	</div>

	<!-- ... end Fixed Sidebar Right -->

	<!-- Fixed Sidebar Right-Responsive -->

	<div class="fixed-sidebar right fixed-sidebar-responsive">

		<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

			<a href="#" class="olympus-chat inline-items js-chat-open">
				<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
			</a>

		</div>

	</div>

	<!-- ... end Fixed Sidebar Right-Responsive -->

	<!-- Header-BP -->

	<header class="header pr-10" id="site-header">

		<div class="page-title">
			<h6>Daerida</h6>
		</div>

        
		<div class="header-content-wrapper header-align p-r">

			<div class="control-block control-box">


                <form class="search-bar w-search notification-list friend-requests">
                    <div class="form-group with-button">
                        <input class="form-control js-user-search" placeholder="기업과 팀, 사람을 찾으세요..." type="text">
                        <button>
                            <svg class="olymp-magnifying-glass-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                        </button>
                    </div>
                </form>

				<div class="navbar-item-container p-l-20">
					<div class="control-icon more has-items m-0">
						<a href="<?=site_url('JobOffer/main')?>">
							<h6>구인</h6>
						</a>
					</div>
				</div>

				<div class="navbar-item-container">
					<div class="control-icon more has-items m-0">
						<a href="<?=site_url('JobSearch/main')?>">
							<h6>구직</h6>
						</a>
					</div>
				</div>

                <div class="navbar-item-container ">
                    <div class="control-icon more has-items navbar-item-wraper m-0">
                        <a href="<?=site_url('TeamBuilding/main')?>">
                            <h6>팀빌딩</h6>
                        </a>
                    </div>
                </div>

                <div class="navbar-item-container ">
                    <div class="control-icon more has-items navbar-item-wraper m-0">
                        <a href="<?=site_url('#')?>">
                            <h6>소개</h6>
                        </a>
                    </div>
                </div>

				<div class="author-page author vcard inline-items more f-r nav-profile mr-10">
					<div class="author-thumb">
                        <?php
                        if($this->session->userImage==null) {
                            ?>
                            <img alt="author" src="<?php echo base_url();?>assets/img/user1.jpg" class="avatar profile-img" >
                        <?php
                        }
                            ?>
                        <?php
                        if($this->session->uesrImage=!null){
                        ?>
						<img alt="author" src="<?php echo $this->session->userImage ?>" class="avatar profile-img">
                        <?php
                        }
						?>
						<span class="icon-status online"></span>
						<div class="more-dropdown more-with-triangle">
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Your Account</h6>
								</div>

								<ul class="account-settings">
									<li>
										<a href="<?=site_url('ProfileEdit/profile1')?>">
											<div class="nav-icon">
												<img src="<?php echo base_url();?>assets/img/user.png">
											</div>
											<span>회원정보 수정</span>
										</a>
									</li>
									<li>
										<a href="<?=site_url('profile/teamCom')?>">
											<div class="nav-icon">
												<img src="<?php echo base_url();?>assets/img/team.png">
											</div>
											<span>내 팀/기업 정보</span>
										</a>
									</li>
									<li>
                                        <a href="<?php echo base_url();?>main/logout">
											<div class="nav-icon">
												<img src="<?php echo base_url();?>assets/img/logout.png">
											</div>
											<span>로그아웃</span>
										</a>
									</li>
								</ul>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">About Daerida</h6>
								</div>

								<ul>
									<li>
										<a href="#">
											<span>이용 약관</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>문의사항</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>채용 정보</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
					<a href="<?php echo base_url();?>profile/main" class="author-name fn">
						<div class="author-title">
							<?php echo $this->session->custName ?>
						</div>
						<span class="author-subtitle"><? echo $this->session->jobType ?></span>
					</a>
				</div>

			</div>
		</div>

	</header>

	<!-- ... end Header-BP -->

	<!-- Responsive Header-BP -->

	<header class="header header-responsive" id="site-header-responsive">

		<div class="header-content-wrapper">
<!--			<ul class="nav nav-tabs mobile-app-tabs" role="tablist">-->
<!--				<li class="nav-item">-->
<!--					<a class="nav-link" data-toggle="tab" href="--><?//=site_url('JobOffer/main')?><!--" role="tab">-->
<!--						<div class="control-item has-items">	-->
<!--							<h6>구인</h6>-->
<!--						</div>-->
<!--					</a>-->
<!--				</li>-->
<!---->
<!--				<li class="nav-item">-->
<!--					<a class="nav-link" data-toggle="tab" href="--><?//=site_url('JobSearch/main')?><!--" role="tab">-->
<!--						<div class="control-item has-items">-->
<!--							<h6>구직</h6>-->
<!--						</div>-->
<!--					</a>-->
<!--				</li>-->
<!---->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" data-toggle="tab" href="--><?//=site_url('TeamBuilding/main')?><!--" role="tab">-->
<!--                        <div class="control-item has-items">-->
<!--                            <h6>팀빌딩</h6>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" data-toggle="tab" href="--><?//=site_url('#')?><!--" role="tab">-->
<!--                        <div class="control-item has-items">-->
<!--                            <h6>소개</h6>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--			</ul>-->
		</div>

		<!-- Tab panes -->
		<div class="tab-content tab-content-responsive">

			<div class="tab-pane " id="request" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<a href="#">Settings</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar55-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
								<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar56-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tony Stevens</a>
								<span class="chat-message-item">4 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar57-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar58-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

								<a href="#" class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
					</ul>
					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>

			</div>

			<div class="tab-pane " id="chat" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<ul class="notification-list chat-message">
						<li class="message-unread">
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar59-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Diana Jameson</a>
								<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar60-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Jake Parker</a>
								<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar61-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
								<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>

						<li class="chat-group">
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar11-sm.jpg" alt="author">
								<img src="<?php echo base_url();?>assets/img/avatar12-sm.jpg" alt="author">
								<img src="<?php echo base_url();?>assets/img/avatar13-sm.jpg" alt="author">
								<img src="<?php echo base_url();?>assets/img/avatar10-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
								<span class="last-message-author">Ed:</span>
								<span class="chat-message-item">Yeah! Seems fine by me!</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							</div>
						</li>
					</ul>

					<a href="#" class="view-all bg-purple">View All Messages</a>
				</div>

			</div>

			<div class="tab-pane " id="notification" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar62-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar63-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li class="with-comment-photo">
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar64-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

							<div class="comment-photo">
								<img src="<?php echo base_url();?>assets/img/comment-photo1.jpg" alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar65-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar66-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-heart-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>
					</ul>

					<a href="#" class="view-all bg-primary">View All Notifications</a>
				</div>

			</div>

			<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					</div>
				</form>


			</div>

		</div>
		<!-- ... end  Tab panes -->

	</header>

	<!-- ... end Responsive Header-BP -->
	<div class="header-spacer"></div>


	<!-- Window-popup-CHAT for responsive min-width: 768px -->

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title" >Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
					<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-little-delete"></use></svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">안녕하세요! 당신은 저희가 원하는 분야의 사람입니다.</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/author-page.jpg" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?php echo base_url();?>assets/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">안녕하세요! 당신은 저희가 원하는 분야의 사람입니다.</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>

				<form class="need-validation">

					<div class="form-group label-floating is-empty">
						<label class="control-label">Press enter to post...</label>
						<textarea class="form-control" placeholder=""></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-computer-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon"><use xlink:href="<?php echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat1.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat2.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat3.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat4.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat5.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat6.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat7.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat8.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat9.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat10.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat11.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat12.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat13.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat14.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat15.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat16.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat17.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat18.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat19.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat20.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat21.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat22.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat23.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat24.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat25.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat26.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/icon-chat27.png" alt="icon">
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


	<!-- JS Scripts -->

<!--    --><?php //include "js.php" ?>

</body>
</html>