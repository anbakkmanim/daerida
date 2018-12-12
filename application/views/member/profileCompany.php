<?php $this->load->view('layout/header'); ?>

	<!-- Fixed Sidebar Right -->

	<!-- ... end Fixed Sidebar Right-Responsive -->


	<!-- Header-BP -->

	<header class="header" id="site-header">

		<div class="page-title">
			<h6>Profile Page</h6>
		</div>

		<div class="header-content-wrapper">
			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					<button>
						<svg class="olymp-magnifying-glass-icon">
							<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>" ></use>
						</svg>
					</button>
				</div>
			</form>

			<a href="<?= site_url('#') ?>"  class="link-find-friend">Find Friends</a>

			<div class="control-block">

				<div class="control-icon more has-items">
					<svg class="olymp-happy-face-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
					</svg>
					<div class="label-avatar bg-blue">6</div>

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">FRIEND REQUESTS</h6>
							<a href="<?= site_url('#') ?>" >Find Friends</a>
							<a href="<?= site_url('#') ?>" >Settings</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list friend-requests">
								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar55-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Tamara Romanoff</a>
										<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
									</div>
									<span class="notification-icon">
										<a href="<?= site_url('#') ?>"  class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
												</svg>
											</span>
										</a>

										<a href="<?= site_url('#') ?>"  class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
												</svg>
											</span>
										</a>

									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar56-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Tony Stevens</a>
										<span class="chat-message-item">4 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="<?= site_url('#') ?>"  class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
												</svg>
											</span>
										</a>

										<a href="<?= site_url('#') ?>"  class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
												</svg>
											</span>
										</a>

									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>

								<li class="accepted">
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar57-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('#') ?>" 
										 class="notification-link">her wall</a>.
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar58-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Stagg Clothing</a>
										<span class="chat-message-item">9 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="<?= site_url('#') ?>"  class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
												</svg>
											</span>
										</a>

										<a href="<?= site_url('#') ?>"  class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon">
													<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
												</svg>
											</span>
										</a>

									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>

							</ul>
						</div>

						<a href="<?= site_url('#') ?>"  class="view-all bg-blue">Check all your Events</a>
					</div>
				</div>

				<div class="control-icon more has-items">
					<svg class="olymp-chat---messages-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
					</svg>
					<div class="label-avatar bg-purple">2</div>

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Chat / Messages</h6>
							<a href="<?= site_url('#') ?>" >Mark all as read</a>
							<a href="<?= site_url('#') ?>" >Settings</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list chat-message">
								<li class="message-unread">
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar59-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Diana Jameson</a>
										<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to
											reschedule...</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar60-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Jake Parker</a>
										<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar61-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Elaine Dreyfuss</a>
										<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board
											with...</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
												9:56pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>

								<li class="chat-group">
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar11-sm.jpg') ?>"  alt="author">
										<img src="<?= site_url('img/avatar12-sm.jpg') ?>"  alt="author">
										<img src="<?= site_url('img/avatar13-sm.jpg') ?>"  alt="author">
										<img src="<?= site_url('img/avatar10-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<a href="<?= site_url('#') ?>"  class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
										<span class="last-message-author">Ed:</span>
										<span class="chat-message-item">Yeah! Seems fine by me!</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at
												10:23am</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
									</div>
								</li>
							</ul>
						</div>

						<a href="<?= site_url('#') ?>"  class="view-all bg-purple">View All Messages</a>
					</div>
				</div>

				<div class="control-icon more has-items">
					<svg class="olymp-thunder-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>" ></use>
					</svg>

					<div class="label-avatar bg-primary">8</div>

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notifications</h6>
							<a href="<?= site_url('#') ?>" >Mark all as read</a>
							<a href="<?= site_url('#') ?>" >Settings</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list">
								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar62-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile
												status</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
										</svg>
									</div>
								</li>

								<li class="un-read">
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar63-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<div>You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a
											 href="<?= site_url('#') ?>"  class="notification-link">his wall</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
										</svg>
									</div>
								</li>

								<li class="with-comment-photo">
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar64-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('#') ?>"  class="notification-link">photo</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
												5:32am</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use>
										</svg>
									</span>

									<div class="comment-photo">
										<img src="<?= site_url('img/comment-photo1.jpg') ?>"  alt="photo">
										<span>“She looks incredible in that outfit! We should see each...”</span>
									</div>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar65-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
											<a href="<?= site_url('#') ?>"  class="notification-link">Gotham Bar</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at
												6:43pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="<?= site_url('img/avatar66-sm.jpg') ?>"  alt="author">
									</div>
									<div class="notification-event">
										<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile
												status</a>.</div>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at
												8:29pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
										</svg>
									</div>
								</li>
							</ul>
						</div>

						<a href="<?= site_url('#') ?>"  class="view-all bg-primary">View All Notifications</a>
					</div>
				</div>

				<div class="author-page author vcard inline-items more">
					<div class="author-thumb">
						<img alt="author" src="<?= site_url('img/author-page.jpg') ?>"  class="avatar">
						<span class="icon-status online"></span>
						<div class="more-dropdown more-with-triangle">
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Your Account</h6>
								</div>

								<ul class="account-settings">
									<li>
										<a href="<?= site_url('29-YourAccount-AccountSettings.html') ?>" >

											<svg class="olymp-menu-icon">
												<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>" ></use>
											</svg>

											<span>Profile Settings</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>" >
											<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAV PAGE">
												<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>" ></use>
											</svg>

											<span>Create Fav Page</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<svg class="olymp-logout-icon">
												<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-logout-icon') ?>" ></use>
											</svg>

											<span>Log Out</span>
										</a>
									</li>
								</ul>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Chat Settings</h6>
								</div>

								<ul class="chat-settings">
									<li>
										<a href="<?= site_url('#') ?>" >
											<span class="icon-status online"></span>
											<span>Online</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<span class="icon-status away"></span>
											<span>Away</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<span class="icon-status disconected"></span>
											<span>Disconnected</span>
										</a>
									</li>

									<li>
										<a href="<?= site_url('#') ?>" >
											<span class="icon-status status-invisible"></span>
											<span>Invisible</span>
										</a>
									</li>
								</ul>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Custom Status</h6>
								</div>

								<form class="form-group with-button custom-status">
									<input class="form-control" placeholder="" type="text" value="Space Cowboy">

									<button class="bg-purple">
										<svg class="olymp-check-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-check-icon') ?>" ></use>
										</svg>
									</button>
								</form>

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">About Olympus</h6>
								</div>

								<ul>
									<li>
										<a href="<?= site_url('#') ?>" >
											<span>Terms and Conditions</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<span>FAQs</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<span>Careers</span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<span>Contact</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
					<a href="<?= site_url('02-ProfilePage.html') ?>"  class="author-name fn">
						<div class="author-title">
							James Spiegel <svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>" ></use>
							</svg>
						</div>
						<span class="author-subtitle">SPACE COWBOY</span>
					</a>
				</div>

			</div>
		</div>

	</header>

	<!-- ... end Header-BP -->


	<!-- Responsive Header-BP -->

	<header class="header header-responsive" id="site-header-responsive">

		<div class="header-content-wrapper">
			<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#request') ?>"  role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-happy-face-icon">
								<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
							</svg>
							<div class="label-avatar bg-blue">6</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#chat') ?>"  role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-chat---messages-icon">
								<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
							</svg>
							<div class="label-avatar bg-purple">2</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#notification') ?>"  role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-thunder-icon">
								<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>" ></use>
							</svg>
							<div class="label-avatar bg-primary">8</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#search') ?>"  role="tab">
						<svg class="olymp-magnifying-glass-icon">
							<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>" ></use>
						</svg>
						<svg class="olymp-close-icon">
							<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>

		<!-- Tab panes -->
		<div class="tab-content tab-content-responsive">

			<div class="tab-pane " id="request" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="<?= site_url('#') ?>" >Find Friends</a>
						<a href="<?= site_url('#') ?>" >Settings</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar55-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Tamara Romanoff</a>
								<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
							</div>
							<span class="notification-icon">
								<a href="<?= site_url('#') ?>"  class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>
								</a>

								<a href="<?= site_url('#') ?>"  class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar56-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Tony Stevens</a>
								<span class="chat-message-item">4 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="<?= site_url('#') ?>"  class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>
								</a>

								<a href="<?= site_url('#') ?>"  class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar57-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('#') ?>" 
								 class="notification-link">her wall</a>.
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar58-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="<?= site_url('#') ?>"  class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>
								</a>

								<a href="<?= site_url('#') ?>"  class="accept-request request-del">
									<span class="icon-minus">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
										</svg>
									</span>
								</a>

							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>
					</ul>
					<a href="<?= site_url('#') ?>"  class="view-all bg-blue">Check all your Events</a>
				</div>

			</div>

			<div class="tab-pane " id="chat" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="<?= site_url('#') ?>" >Mark all as read</a>
						<a href="<?= site_url('#') ?>" >Settings</a>
					</div>

					<ul class="notification-list chat-message">
						<li class="message-unread">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar59-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Diana Jameson</a>
								<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to
									reschedule...</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar60-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Jake Parker</a>
								<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar61-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Elaine Dreyfuss</a>
								<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board
									with...</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
										9:56pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>

						<li class="chat-group">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar11-sm.jpg') ?>"  alt="author">
								<img src="<?= site_url('img/avatar12-sm.jpg') ?>"  alt="author">
								<img src="<?= site_url('img/avatar13-sm.jpg') ?>"  alt="author">
								<img src="<?= site_url('img/avatar10-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>"  class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
								<span class="last-message-author">Ed:</span>
								<span class="chat-message-item">Yeah! Seems fine by me!</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at
										10:23am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
							</div>
						</li>
					</ul>

					<a href="<?= site_url('#') ?>"  class="view-all bg-purple">View All Messages</a>
				</div>

			</div>

			<div class="tab-pane " id="notification" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="<?= site_url('#') ?>" >Mark all as read</a>
						<a href="<?= site_url('#') ?>" >Settings</a>
					</div>

					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar62-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile
										status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
								</svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar63-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<div>You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a
									 href="<?= site_url('#') ?>"  class="notification-link">his wall</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
								</svg>
							</div>
						</li>

						<li class="with-comment-photo">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar64-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('#') ?>"  class="notification-link">photo</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at
										5:32am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use>
								</svg>
							</span>

							<div class="comment-photo">
								<img src="<?= site_url('img/comment-photo1.jpg') ?>"  alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar65-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a
									 href="<?= site_url('#') ?>"  class="notification-link">Gotham Bar</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at
										6:43pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar66-sm.jpg') ?>"  alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile
										status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at
										8:29pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-heart-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
								</svg>
							</div>
						</li>
					</ul>

					<a href="<?= site_url('#') ?>"  class="view-all bg-primary">View All Notifications</a>
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



	<!-- Top Header-Profile -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block">
					<div class="top-header top-header-favorit">
						<div class="top-header-thumb">
							<img src="<?= site_url('img/top-header2.jpg') ?>"  alt="nature">
							<div class="top-header-author">
								<div class="author-thumb">
									<img src="<?= site_url('img/author-main2.jpg') ?>"  alt="author">
								</div>
								<div class="author-content">
									<a href="<?= site_url('#') ?>"  class="h3 author-name">기업</a>
									<div class="country">기업주소</div>
								</div>
							</div>
						</div>
						<div class="profile-section">
							<div class="row">
								<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
									<ul class="profile-menu">
										<li>
											<a href="<?= site_url('12-FavouritePage.html') ?>"  class="active">정보</a>
										</li>
										<li>
											<a href="<?= site_url('00_portfolio.html') ?>" >질문/평가</a>
										</li>
										<!-- <li>
											<a href="<?= site_url('07-ProfilePage-Photos.html') ?>" >이력서 관리</a>
										</li> -->
										<!-- <li>
										<a href="<?= site_url('09-ProfilePage-Videos.html') ?>" >Videos</a>
									</li>
									<li>
										<a href="<?= site_url('14-FavouritePage-Statistics.html') ?>" >Statistics</a>
									</li>
									<li>
										<a href="<?= site_url('15-FavouritePage-Events.html') ?>" >Events</a>
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
						<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Create Album  +</a>

						<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos</a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('#photo-page') ?>"  role="tab">
								<svg class="olymp-photos-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use></svg>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('#album-page') ?>"  role="tab">
								<svg class="olymp-albums-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-albums-icon') ?>" ></use></svg>
							</a>
						</li>

					</ul>
					<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
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
										<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne') ?>"  aria-expanded="true" aria-controls="collapseOne"
										 class="col-auto mr-auto mt-2">
											<span>경력</span>
											<svg class="olymp-dropdown-arrow-icon">
												<use xlink:href="<?= site_url('#olymp-dropdown-arrow-icon') ?>" ></use>
											</svg>
										</a>

										<div class="col-auto">
											<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create-career">추가<div class="ripple-container"></div></a>
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
																	<img src="<?= site_url('img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
																</div>
																<div class="col">
																	<h5 class="card-title">기업</h5>
																	<ul class="widget w-personal-info">
																		<li>
																			<span class="title">연도:</span>
																			<span class="text">2017</span>
																		</li>
																		<li>
																			<span class="title">내용:</span>
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
																		<img src="<?= site_url('img/author-main2.jpg') ?>"  class="rounded float-left" alt="...">
																	</div>
																	<div class="col">
																		<h5 class="card-title">기업</h5>
																		<ul class="widget w-personal-info">
																			<li>
																				<span class="title">연도:</span>
																				<span class="text">2017</span>
																			</li>
																			<li>
																				<span class="title">내용:</span>
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

				
				<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-md col" data-toggle="modal" data-target="#">저장<div class="ripple-container"></div></a>
			</div>

			<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">프로필</h6>
						<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
							</svg></a>
					</div>
					<div class="ui-block-content">


						<!-- W-Personal-Info -->

						<ul class="widget w-personal-info">
							<li>
								<span class="title">자기소개:</span>
								<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the
									“Daydreams” Agency in Pier 56
								</span>
							</li>
							<li>
								<span class="title">기업명:</span>
								<span class="text">December 14th, 1980</span>
							</li>
							<li>
								<span class="title">기업담당자:</span>
								<span class="text">Austin, Texas, USA</span>
							</li>
							<li>
								<span class="title">휴대전화:</span>
								<span class="text">UI/UX Designer</span>
							</li>
							<li>
								<span class="title">초봉:</span>
								<span class="text">April 31st, 2014</span>
							</li>
							<li>
								<span class="title">분야:</span>
								<span class="text">Male</span>
							</li>
							<li>
								<span class="title">지역:</span>
								<span class="text">Married</span>
							</li>
							<li>
								<span class="title">복리후생:</span>
								<a href="<?= site_url('#') ?>"  class="text">jspiegel@yourmail.com</a>
							</li>
							<li>
								<span class="title">병역 여부:</span>
								<span class="text">-</span>
							</li>

						</ul>

						<!-- ... end W-Personal-Info -->
						<!-- W-Socials -->

						<div class="row mr-1 ml-1">

							<a href="<?= site_url('#') ?>"  class="btn btn-primary col mr-3" data-toggle="modal" data-target="#update-profile">프로필 수정<div class="ripple-container"></div></a>
							<a href="<?= site_url('#') ?>"  class="btn btn-primary col" data-toggle="modal" data-target="#create-photo-album">비밀번호 변경<div class="ripple-container"></div></a>

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
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
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

					<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">변경</a>
					<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-career" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
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
					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col">
								<form class="form-group label-floating">
									<label class="control-label">연도</label>
									<input class="form-control" placeholder="" type="text">
								</form>
							</div>
							

						</div>
					</div>


					<div class="col">

							<div class="form-group label-floating">
									<label class="control-label">내용</label>
									<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
								</div>
					</div>

					<div class="col">
						<label class="control-label">프로필 사진</label>
						<input type="file">
					</div>
					<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">추가</a>
					<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-edu" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">학력 추가</h6>
				</div>

				<div class="modal-body">
					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-sm-2 text-center">
								<label style="margin-top: 1rem;">학교구분</label>
							</div>
							<div class="col">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="univer">대학교</option>
									<option value="high-school">고등학교</option>
									<option value="middle-school">중학교</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 text-center">
								<label style="margin-top: 1rem;">전공계열</label>
							</div>
							<div class="col">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="univer">문과</option>
									<option value="high-school">고등학교</option>
									<option value="middle-school">중학교</option>
								</select>
							</div>
						</div>
					</div>

					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col">
									<div class="form-group date-time-picker is-focused">
											<input type="text" name="datetimepicker" placeholder="입학년도">
											<span class="input-group-addon">
												<svg class="olymp-month-calendar-icon icon">
													<use xlink:href="<?= site_url('#olymp-month-calendar-icon') ?>" ></use>
												</svg>
											</span>
										</div>
							</div>
							
							<div class="col-sm-1 w-25 text-center">
									<label style="margin-top: 1rem;">~</label>
								</div>

							<div class="col">
									<div class="form-group date-time-picker is-focused">
											<input type="text" name="datetimepicker" placeholder="졸업년도">
											<span class="input-group-addon">
												<svg class="olymp-month-calendar-icon icon">
													<use xlink:href="<?= site_url('#olymp-month-calendar-icon') ?>" ></use>
												</svg>
											</span>
										</div>
							</div>
							<div class="checkbox col">
								<label style="margin-top: 1rem;">
									<input name="optionsCheckboxes" type="checkbox">
									재학중
								</label>
							</div>

						</div>


					</div>

					<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">추가</a>
					<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="create-card" tabindex="-1" role="dialog" aria-labelledby="create-card" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
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

						<div class="row">
							<div class="col">
									<div class="form-group date-time-picker is-focused">
											<input type="text" name="datetimepicker" placeholder="취득일">
											<span class="input-group-addon">
												<svg class="olymp-month-calendar-icon icon">
													<use xlink:href="<?= site_url('#olymp-month-calendar-icon') ?>" ></use>
												</svg>
											</span>
										</div>
							</div>
						</div>
					</div>

					<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">추가</a>
					<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

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
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
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
									<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">기업명</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">기업담당자</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">휴대전화</label>
									<input class="form-control" placeholder="" type="number">
								</div>
							</div>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">초봉</label>
									<input class="form-control" placeholder="" type="text">
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
									<option value="none">지역</option>
									<option value="computer">서울</option>
									<option value="farmer">대구</option>
								</select>
							</div>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
								<div class="row">
									<div class="checkbox col">
										<label>
											<input name="optionsCheckboxes" type="checkbox">
											병역 이행 여부
										</label>
									</div>
									<div class="checkbox col">
										<label>
											<input name="optionsCheckboxes" type="checkbox">
											복리후생
										</label>
									</div>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">주소</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label class="control-label">프로필 사진</label>
								<input type="file">
							</div>


						</div>
					</form>

					<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">변경</a>
					<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">취소</a>

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
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">Update Header Photo</h6>
				</div>

				<div class="modal-body">
					<a href="<?= site_url('#') ?>"  class="upload-photo-item">
						<svg class="olymp-computer-icon">
							<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use>
						</svg>

						<h6>Upload Photo</h6>
						<span>Browse your computer.</span>
					</a>

					<a href="<?= site_url('#') ?>"  class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

						<svg class="olymp-photos-icon">
							<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use>
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
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Choose from My Photos</h6>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('#home') ?>"  role="tab" aria-expanded="true">
								<svg class="olymp-photos-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('#profile') ?>"  role="tab" aria-expanded="false">
								<svg class="olymp-albums-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-albums-icon') ?>" ></use>
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
										<img src="<?= site_url('img/choose-photo1.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo2.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo3.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo4.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo5.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo6.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo7.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo8.jpg') ?>"  alt="photo">
										<input type="radio" name="optionsRadios">
									</label>
								</div>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<div class="radio">
									<label class="custom-radio">
										<img src="<?= site_url('img/choose-photo9.jpg') ?>"  alt="photo">
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
									<img src="<?= site_url('img/choose-photo10.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >South America Vacations</a>
										<span>Last Added: 2 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('img/choose-photo11.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Photoshoot Summer 2016</a>
										<span>Last Added: 5 weeks ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('img/choose-photo12.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Amazing Street Food</a>
										<span>Last Added: 6 mins ago</span>
									</figcaption>
								</figure>
							</div>

							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('img/choose-photo13.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Graffity & Street Art</a>
										<span>Last Added: 16 hours ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('img/choose-photo14.jpg') ?>"  alt="photo">
									<figcaption>
										<a href="<?= site_url('#') ?>" >Amazing Landscapes</a>
										<span>Last Added: 13 mins ago</span>
									</figcaption>
								</figure>
							</div>
							<div class="choose-photo-item" data-mh="choose-item">
								<figure>
									<img src="<?= site_url('img/choose-photo15.jpg') ?>"  alt="photo">
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
		<img src="<?= site_url('svg-icons/back-to-top.svg') ?>"  alt="arrow" class="back-icon">
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
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use>
					</svg>
					<svg class="olymp-little-delete js-chat-open">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use>
					</svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
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
								<img src="<?= site_url('img/author-page.jpg') ?>"  alt="author" class="mCS_img_loaded">
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
								<img src="<?= site_url('img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
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
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use>
								</svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') ?>" ></use>
								</svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat1.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat2.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat3.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat4.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat5.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat6.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat7.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat8.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat9.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat10.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat11.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat12.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat13.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat14.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat15.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat16.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat17.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat18.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat19.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat20.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat21.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat22.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat23.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat24.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat25.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat26.png') ?>"  alt="icon">
										</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >
											<img src="<?= site_url('img/icon-chat27.png') ?>"  alt="icon">
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