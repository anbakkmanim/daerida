<?php $this->load->view('layout/header'); ?>
<!-- Profile Settings Responsive -->

	<div class="profile-settings-responsive">

		<a href="<?= site_url('#') ?>" class="js-profile-settings-open profile-settings-open">
			<i class="fa fa-angle-right" aria-hidden="true"></i>
			<i class="fa fa-angle-left" aria-hidden="true"></i>
		</a>
		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<div class="ui-block">
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>

					<div id="accordion1" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne-1">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('#collapseOne-1') ?>" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>"></use></svg>
									</a>
								</h6>
							</div>

							<div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="<?= site_url('28-YourAccount-PersonalInformation.html') ?>">Personal Information</a>
									</li>
									<li>
										<a href="<?= site_url('29-YourAccount-AccountSettings.html') ?>">Account Settings</a>
									</li>
									<li>
										<a href="<?= site_url('30-YourAccount-ChangePassword.html') ?>">Change Password</a>
									</li>
									<li>
										<a href="<?= site_url('31-YourAccount-HobbiesAndInterests.html') ?>">Hobbies and Interests</a>
									</li>
									<li>
										<a href="<?= site_url('32-YourAccount-EducationAndEmployement.html') ?>">Education and Employement</a>
									</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="ui-block-title">
						<a href="<?= site_url('33-YourAccount-Notifications.html') ?>" class="h6 title">Notifications</a>
						<a href="<?= site_url('#') ?>" class="items-round-little bg-primary">8</a>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('34-YourAccount-ChatMessages.html') ?>" class="h6 title">Chat / Messages</a>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('35-YourAccount-FriendsRequests.html') ?>" class="h6 title">Friend Requests</a>
						<a href="<?= site_url('#') ?>" class="items-round-little bg-blue">4</a>
					</div>
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FAVOURITE PAGE</h6>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>" class="h6 title">Create Fav Page</a>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>" class="h6 title">Fav Page Settings</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Profile Settings Responsive -->



	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

			<a href="<?= site_url('02-ProfilePage.html') ?>" class="logo">
				<div class="img-wrap">
					<img src="<?= site_url('img/logo.png') ?>" alt="Olympus">
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="<?= site_url('#') ?>" class="js-sidebar-open">
							<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('03-Newsfeed.html') ?>">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('16-FavPagesFeed.html') ?>">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('17-FriendGroups.html') ?>">
							<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('18-MusicAndPlaylists.html') ?>">
							<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('19-WeatherWidget.html') ?>">
							<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('20-CalendarAndEvents-MonthlyCalendar.html') ?>">
							<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('24-CommunityBadges.html') ?>">
							<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('25-FriendsBirthday.html') ?>">
							<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('26-Statistics.html') ?>">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>"></use></svg>
						</a>
					</li>
					<li>
						<a href="<?= site_url('27-ManageWidgets.html') ?>">
							<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>"></use></svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
			<a href="<?= site_url('02-ProfilePage.html') ?>" class="logo">
				<div class="img-wrap">
					<img src="<?=site_url('img/logo.png') ?>" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="<?= site_url('#') ?>" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>"></use></svg>
							<span class="left-menu-title">Collapse Menu</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('03-Newsfeed.html') ?>">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>"></use></svg>
							<span class="left-menu-title">Newsfeed</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('16-FavPagesFeed.html') ?>">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>"></use></svg>
							<span class="left-menu-title">Fav Pages Feed</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('17-FriendGroups.html') ?>">
							<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>"></use></svg>
							<span class="left-menu-title">Friend Groups</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('18-MusicAndPlaylists.html') ?>">
							<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>"></use></svg>
							<span class="left-menu-title">Music & Playlists</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('19-WeatherWidget.html') ?>">
							<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>"></use></svg>
							<span class="left-menu-title">Weather App</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('20-CalendarAndEvents-MonthlyCalendar.html') ?>">
							<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>"></use></svg>
							<span class="left-menu-title">Calendar and Events</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('24-CommunityBadges.html') ?>">
							<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>"></use></svg>
							<span class="left-menu-title">Community Badges</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('25-FriendsBirthday.html') ?>">
							<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>"></use></svg>
							<span class="left-menu-title">Friends Birthdays</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('26-Statistics.html') ?>">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>"></use></svg>
							<span class="left-menu-title">Account Stats</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('27-ManageWidgets.html') ?>">
							<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>"></use></svg>
							<span class="left-menu-title">Manage Widgets</span>
						</a>
					</li>
				</ul>

				<div class="profile-completion">

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title">Profile Completion</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
						</div>
					</div>

					<span>Complete <a href="<?= site_url('#') ?>">your profile</a> so people can know more about you!</span>

				</div>
			</div>
		</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->


	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar fixed-sidebar-responsive">

		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
			<a href="<?= site_url('#') ?>" class="logo js-sidebar-open">
				<img src="<?= site_url('img/logo.png') ?>" alt="Olympus">
			</a>

		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
			<a href="<?= site_url('#') ?>" class="logo">
				<div class="img-wrap">
					<img src="<?= site_url('img/logo.png') ?>" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<div class="control-block">
					<div class="author-page author vcard inline-items">
						<div class="author-thumb">
							<img alt="author" src="<?= site_url('img/author-page.jpg') ?>" class="avatar">
							<span class="icon-status online"></span>
						</div>
						<a href="<?= site_url('02-ProfilePage.html') ?>" class="author-name fn">
							<div class="author-title">
								James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>"></use></svg>
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
						<a href="<?= site_url('#') ?>" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>"></use></svg>
							<span class="left-menu-title">Collapse Menu</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('mobile-index.html') ?>">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>"></use></svg>
							<span class="left-menu-title">Newsfeed</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-28-YourAccount-PersonalInformation.html') ?>">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>"></use></svg>
							<span class="left-menu-title">Fav Pages Feed</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('mobile-29-YourAccount-AccountSettings.html') ?>">
							<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>"></use></svg>
							<span class="left-menu-title">Friend Groups</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-30-YourAccount-ChangePassword.html') ?>">
							<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>"></use></svg>
							<span class="left-menu-title">Music & Playlists</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-31-YourAccount-HobbiesAndInterests.html') ?>">
							<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>"></use></svg>
							<span class="left-menu-title">Weather App</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-32-YourAccount-EducationAndEmployement.html') ?>">
							<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>"></use></svg>
							<span class="left-menu-title">Calendar and Events</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-33-YourAccount-Notifications.html') ?>">
							<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>"></use></svg>
							<span class="left-menu-title">Community Badges</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-34-YourAccount-ChatMessages.html') ?>">
							<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>"></use></svg>
							<span class="left-menu-title">Friends Birthdays</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('Mobile-35-YourAccount-FriendsRequests.html') ?>">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>"></use></svg>
							<span class="left-menu-title">Account Stats</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('#') ?>">
							<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>"></use></svg>
							<span class="left-menu-title">Manage Widgets</span>
						</a>
					</li>
				</ul>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">YOUR ACCOUNT</h6>
				</div>

				<ul class="account-settings">
					<li>
						<a href="<?= site_url('#') ?>">

							<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>"></use></svg>

							<span>Profile Settings</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('#') ?>">
							<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>"></use></svg>

							<span>Create Fav Page</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('#') ?>">
							<svg class="olymp-logout-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-logout-icon') ?>"></use></svg>

							<span>Log Out</span>
						</a>
					</li>
				</ul>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">About Olympus</h6>
				</div>

				<ul class="about-olympus">
					<li>
						<a href="<?= site_url('#') ?>">
							<span>Terms and Conditions</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('#') ?>">
							<span>FAQs</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('#') ?>">
							<span>Careers</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url('#') ?>">
							<span>Contact</span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->


	<!-- Fixed Sidebar Right-Responsive -->

	<div class="fixed-sidebar right fixed-sidebar-responsive">

		<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

			<a href="<?= site_url('#') ?>" class="olympus-chat inline-items js-chat-open">
				<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>"></use></svg>
			</a>

		</div>

	</div>

	<!-- ... end Fixed Sidebar Right-Responsive -->


	<!-- Header-BP -->

	<!-- ... end Header-BP -->


	<!-- Responsive Header-BP -->

	<header class="header header-responsive" id="site-header-responsive">

		<div class="header-content-wrapper">
			<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#request') ?>" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
							<div class="label-avatar bg-blue">6</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#chat') ?>" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>"></use></svg>
							<div class="label-avatar bg-purple">2</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#notification') ?>" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-thunder-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>"></use></svg>
							<div class="label-avatar bg-primary">8</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="<?= site_url('#search') ?>" role="tab">
						<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>"></use></svg>
						<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>"></use></svg>
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
						<a href="<?= site_url('#') ?>">Find Friends</a>
						<a href="<?= site_url('#') ?>">Settings</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar55-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">Tamara Romanoff</a>
								<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
							</div>
										<span class="notification-icon">
											<a href="<?= site_url('#') ?>" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
												</span>
											</a>

											<a href="<?= site_url('#') ?>" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
												</span>
											</a>

										</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar56-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">Tony Stevens</a>
								<span class="chat-message-item">4 Friends in Common</span>
							</div>
										<span class="notification-icon">
											<a href="<?= site_url('#') ?>" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
												</span>
											</a>

											<a href="<?= site_url('#') ?>" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
												</span>
											</a>

										</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar57-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								You and <a href="<?= site_url('#') ?>" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('#') ?>" class="notification-link">her wall</a>.
							</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
										</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar58-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
										<span class="notification-icon">
											<a href="<?= site_url('#') ?>" class="accept-request">
												<span class="icon-add without-text">
													<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
												</span>
											</a>

											<a href="<?= site_url('#') ?>" class="accept-request request-del">
												<span class="icon-minus">
													<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
												</span>
											</a>

										</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>
					</ul>
					<a href="<?= site_url('#') ?>" class="view-all bg-blue">Check all your Events</a>
				</div>

			</div>

			<div class="tab-pane " id="chat" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="<?= site_url('#') ?>">Mark all as read</a>
						<a href="<?= site_url('#') ?>">Settings</a>
					</div>

					<ul class="notification-list chat-message">
						<li class="message-unread">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar59-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">Diana Jameson</a>
								<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>"></use></svg>
										</span>
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar60-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">Jake Parker</a>
								<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>"></use></svg>
										</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar61-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">Elaine Dreyfuss</a>
								<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>"></use></svg>
											</span>
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>

						<li class="chat-group">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar11-sm.jpg') ?>" alt="author">
								<img src="<?= site_url('img/avatar12-sm.jpg') ?>" alt="author">
								<img src="<?= site_url('img/avatar13-sm.jpg') ?>" alt="author">
								<img src="<?= site_url('img/avatar10-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<a href="<?= site_url('#') ?>" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
								<span class="last-message-author">Ed:</span>
								<span class="chat-message-item">Yeah! Seems fine by me!</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>"></use></svg>
											</span>
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
							</div>
						</li>
					</ul>

					<a href="<?= site_url('#') ?>" class="view-all bg-purple">View All Messages</a>
				</div>

			</div>

			<div class="tab-pane " id="notification" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="<?= site_url('#') ?>">Mark all as read</a>
						<a href="<?= site_url('#') ?>">Settings</a>
					</div>

					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar62-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('#') ?>" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>"></use></svg>
											</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar63-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<div>You and <a href="<?= site_url('#') ?>" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="<?= site_url('#') ?>" class="notification-link">his wall</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
											</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
							</div>
						</li>

						<li class="with-comment-photo">
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar64-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('#') ?>" class="notification-link">photo</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>"></use></svg>
											</span>

							<div class="comment-photo">
								<img src="<?= site_url('img/comment-photo1.jpg') ?>" alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar65-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="<?= site_url('#') ?>" class="notification-link">Gotham Bar</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
											</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar66-sm.jpg') ?>" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="<?= site_url('#') ?>" class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('#') ?>" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
											<span class="notification-icon">
												<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>"></use></svg>
											</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
							</div>
						</li>
					</ul>

					<a href="<?= site_url('#') ?>" class="view-all bg-primary">View All Notifications</a>
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
	<div class="header-spacer header-spacer-small"></div>

	<!-- Main Header Account -->

	<div class="main-header">
		<div class="content-bg-wrap bg-account"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="main-header-content">
						<h1>개인 회원 가입</h1>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Header Account -->



	<!-- Your Account Personal Information -->

	<div class="container">
		<div class="row">
			<div class="col ml-10 mr-10">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">회원 정보 입력</h6>
					</div>
					<div class="ui-block-content">

						
						<!-- Change Password Form -->
						
						<form>
							<div class="row">

								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">이름</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
					
									<div class="col col-lg-8 col-md-6 col-sm-12 col-12">
										<div class="form-group label-floating">
											<label class="control-label">아이디</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-lg-4 col-md-6 col-sm-12 col-12">
										<a href="<?= site_url('#') ?>" class="btn btn-primary btn-lg full-width">중복확인<div class="ripple-container"></div></a>
									</div>


						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">비밀번호</label>
										<input class="form-control" id="pwd" name="pwd" placeholder="" type="password">
									</div>
								</div>
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty has-success">
										<label class="control-label">비밀번호 확인</label>
										<input class="form-control" id="pwd_result" name="pwd_check" placeholder="" type="password">
									</div>
								</div>

								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">이메일</label>
										<input class="form-control" placeholder="" type="email">
									</div>
								</div>

								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">전화번호</label>
										<input class="form-control" placeholder="" type="number">
									</div>
								</div>

								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<label for="">Q. 가장 기억에 남는 장소는?</label>
									<div class="form-group label-floating">
										<label class="control-label">답변</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>

								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
											<select class="selectpicker form-control" tabindex="-98">
													<option value="none">분야</option>
													<option value="computer">컴퓨터</option>
													<option value="farmer">농업</option>
												</select>
									</div>
								</div>
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
											<select class="selectpicker form-control" tabindex="-98">
													<option value="none">소분야</option>
													<option value="computer">컴퓨터</option>
													<option value="farmer">농업</option>
												</select>
									</div>
								</div>
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<label for="">나이</label>
										<div class="input-group number-spinner">
											<span class="input-group-btn data-dwn input-group-prepend mb-3">
												<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
											</span>
											<div class="form-group "><input type="text" class="form-control text-center mb-3" value="15" min="15" max="100"><span class="material-input"></span></div>
											<span class="input-group-btn data-up input-group-append mb-3">
												<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
											</span>
										</div>		
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
												<input type="radio" name="optionsRadios" value="man" onclick="gender('man')"><span class="circle"></span><span class="check"></span>
												남자
											</label>
										</div>
										<div class="radio col">
											<label>
												<input type="radio" name="optionsRadios" value="woman" onclick="gender('woman')"><span class="circle"></span><span class="check"></span>
												여자
											</label>
										</div>
									</div>
								</div>

								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="checkbox ml-2 d-none">
										<label>
											<input id="military" name="optionsCheckboxes" type="checkbox" unchecked>
											병역 이행 여부
										</label>
									</div>
								</div>


								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<label class="control-label">프로필 사진</label>
									<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
										<div class="file-upload d-inline-block">
											<label for="upload" class="file-upload__label">Upload Button</label>
											<input id="upload" class="file-upload__input" type="file" name="file-upload">
										</div>
										<div id="uploaded-file" class="d-inline-block">
											<img id="preview" src="<?= site_url('') ?>">
										</div>
									</div>
								</div>
							</div>

								<div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" required=""><span class="checkbox-material"></span>
											개인정보 수집 이용에 동의합니다.
										</label>
									</div>
								</div>
						
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<button class="btn btn-primary btn-lg full-width">회원가입하기</button>
								</div>
						
							</div>
						</form>
						
						<!-- ... end Change Password Form -->
					</div>
				</div>
			</div>

			
		</div>
	</div>

	<!-- ... end Your Account Personal Information -->




	<!-- Window-popup-CHAT for responsive min-width: 768px -->

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title" >Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
					<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar14-sm.jpg') ?>" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?=site_url('img/author-page.jpg') ?>" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="<?= site_url('img/avatar14-sm.jpg') ?>" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
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
					<a href="<?= site_url('#') ?>" class="options-message">
						<svg class="olymp-computer-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-computer-icon') ?>"></use></svg>
					</a>
					<div class="options-message smile-block">

						<svg class="olymp-happy-sticker-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') ?>"></use></svg>

						<ul class="more-dropdown more-with-triangle triangle-bottom-right">
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat1.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat2.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat3.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat4.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat5.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat6.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat7.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat8.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat9.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat10.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat11.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat12.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat13.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat14.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat15.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat16.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat17.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat18.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat19.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat20.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat21.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat22.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat23.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat24.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat25.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat26.png') ?>" alt="icon">
								</a>
							</li>
							<li>
								<a href="<?= site_url('#') ?>">
									<img src="<?= site_url('img/icon-chat27.png') ?>" alt="icon">
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



	<a class="back-to-top" href="<?= site_url('#') ?>">
		<img src="<?= site_url('svg-icons/back-to-top.svg') ?>" alt="arrow" class="back-icon">
	</a>

	<script>
			
	function gender(str) {
		const millitary = document.getElementById("military").parentElement.parentElement;
		if (str == 'man') {
			millitary.classList.remove("d-none");
		}
		else if (str == 'woman'){
			millitary.classList.add("d-none");
		} 
	}

	document.onkeyup = e => {
		const password = document.getElementById('pwd').value;
		const password_check = document.getElementById('pwd_result').value;

		const pwd_result = document.getElementById("pwd_result").parentElement;

		if (password == "" || password_check == "") {
			pwd_result.classList.remove("has-error");
			pwd_result.classList.remove("has-success");
			pwd_result.classList.add("has-error");
		} else if (password == password_check) {
			pwd_result.classList.remove("has-error");
			pwd_result.classList.remove("has-success");
			pwd_result.classList.add("has-success");
		} else if (password != password_check) {
			pwd_result.classList.remove("has-error");
			pwd_result.classList.remove("has-success");
			pwd_result.classList.add("has-error");
		} else {
			pwd_result.classList.remove("has-error");
			pwd_result.classList.remove("has-success");
			
			pwd_result.classList.add("has-error");
		}
	};

	$("#upload").change(function() {
		readImage(this);
	});

	const readImage = input => {
		if (input.files && input.files[0]) {
			const reader = new FileReader();

			reader.onload = function(e) {
				let image = document.getElementById("preview");
				image.setAttribute('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	};
	</script>

<?php $this->load->view('layout/footer'); ?>