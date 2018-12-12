<?php $this->load->view('layout/header'); ?>
<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="<?= site_url('<?= site_url('02-ProfilePage.html') ?>') ?>"   class="logo">
			<div class="img-wrap">
				<img src="<?= site_url('img/logo.png') ?>"  alt="Olympus">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('03-Newsfeed.html') ?>') ?>"  >
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('16-FavPagesFeed.html') ?>') ?>"  >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('17-FriendGroups.html') ?>') ?>"  >
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('18-MusicAndPlaylists.html') ?>') ?>"  >
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('19-WeatherWidget.html') ?>') ?>"  >
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('20-CalendarAndEvents-MonthlyCalendar.html') ?>') ?>"  >
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('24-CommunityBadges.html') ?>') ?>"  >
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('25-FriendsBirthday.html') ?>') ?>"  >
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('26-Statistics.html') ?>') ?>"  >
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('27-ManageWidgets.html') ?>') ?>"  >
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>') ?>"  ></use></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="<?= site_url('<?= site_url('02-ProfilePage.html') ?>') ?>"   class="logo">
			<div class="img-wrap">
				<img src="<?= site_url('img/logo.png') ?>"  alt="Olympus">
			</div>
			<div class="title-block">
				<h6 class="logo-title">olympus</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('03-Newsfeed.html') ?>') ?>"  >
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('16-FavPagesFeed.html') ?>') ?>"  >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('17-FriendGroups.html') ?>') ?>"  >
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('18-MusicAndPlaylists.html') ?>') ?>"  >
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('19-WeatherWidget.html') ?>') ?>"  >
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('20-CalendarAndEvents-MonthlyCalendar.html') ?>') ?>"  >
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('24-CommunityBadges.html') ?>') ?>"  >
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('25-FriendsBirthday.html') ?>') ?>"  >
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('26-Statistics.html') ?>') ?>"  >
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('27-ManageWidgets.html') ?>') ?>"  >
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>') ?>"  ></use></svg>
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

				<span>Complete <a href="<?= site_url('<?= site_url('#') ?>') ?>"  >your profile</a> so people can know more about you!</span>

			</div>
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="logo js-sidebar-open">
			<img src="<?= site_url('img/logo.png') ?>"  alt="Olympus">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="logo">
			<div class="img-wrap">
				<img src="<?= site_url('img/logo.png') ?>"  alt="Olympus">
			</div>
			<div class="title-block">
				<h6 class="logo-title">olympus</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="<?= site_url('img/author-page.jpg') ?>"  class="avatar">
						<span class="icon-status online"></span>
					</div>
					<a href="<?= site_url('<?= site_url('02-ProfilePage.html') ?>') ?>"   class="author-name fn">
						<div class="author-title">
							James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>') ?>"  ></use></svg>
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
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('mobile-index.html') ?>') ?>"  >
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-28-YourAccount-PersonalInformation.html') ?>') ?>"  >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('mobile-29-YourAccount-AccountSettings.html') ?>') ?>"  >
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-30-YourAccount-ChangePassword.html') ?>') ?>"  >
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-31-YourAccount-HobbiesAndInterests.html') ?>') ?>"  >
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-32-YourAccount-EducationAndEmployement.html') ?>') ?>"  >
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-33-YourAccount-Notifications.html') ?>') ?>"  >
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-34-YourAccount-ChatMessages.html') ?>') ?>"  >
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('Mobile-35-YourAccount-FriendsRequests.html') ?>') ?>"  >
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>') ?>"  ></use></svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >

						<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>') ?>"  ></use></svg>

						<span>Profile Settings</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>') ?>"  ></use></svg>

						<span>Create Fav Page</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<svg class="olymp-logout-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-logout-icon') ?>') ?>"  ></use></svg>

						<span>Log Out</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">About Olympus</h6>
			</div>

			<ul class="about-olympus">
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<span>Terms and Conditions</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<span>FAQs</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<span>Careers</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
						<span>Contact</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->




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
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>') ?>"  ></use></svg>
				</button>
			</div>
		</form>

		<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="link-find-friend">Find Friends</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
				<div class="label-avatar bg-blue">6</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Find Friends</a>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar55-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Tamara Romanoff</a>
									<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
								</div>
								<span class="notification-icon">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>
									</a>

									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar56-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Tony Stevens</a>
									<span class="chat-message-item">4 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>
									</a>

									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar57-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									You and <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">her wall</a>.
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar58-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Stagg Clothing</a>
									<span class="chat-message-item">9 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>
									</a>

									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="view-all bg-blue">Check all your Events</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
				<div class="label-avatar bg-purple">2</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Mark all as read</a>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message">
							<li class="message-unread">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar59-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Diana Jameson</a>
									<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar60-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Jake Parker</a>
									<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar61-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Elaine Dreyfuss</a>
									<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
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
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
									<span class="last-message-author">Ed:</span>
									<span class="chat-message-item">Yeah! Seems fine by me!</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="view-all bg-purple">View All Messages</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>') ?>"  ></use></svg>

				<div class="label-avatar bg-primary">8</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Mark all as read</a>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar62-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>') ?>"  ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar63-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar64-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">photo</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>') ?>"  ></use></svg>
									</span>

								<div class="comment-photo">
									<img src="<?= site_url('img/comment-photo1.jpg') ?>"  alt="photo">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar65-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar66-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>') ?>"  ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="view-all bg-primary">View All Notifications</a>
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
									<a href="<?= site_url('<?= site_url('29-YourAccount-AccountSettings.html') ?>') ?>"  >

										<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>') ?>"  ></use></svg>

										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>') ?>"  >
										<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>') ?>"  ></use></svg>

										<span>Create Fav Page</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<svg class="olymp-logout-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-logout-icon') ?>') ?>"  ></use></svg>

										<span>Log Out</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Chat Settings</h6>
							</div>

							<ul class="chat-settings">
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span class="icon-status online"></span>
										<span>Online</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span class="icon-status away"></span>
										<span>Away</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span class="icon-status disconected"></span>
										<span>Disconnected</span>
									</a>
								</li>

								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
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
									<svg class="olymp-check-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-check-icon') ?>') ?>"  ></use></svg>
								</button>
							</form>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">About Olympus</h6>
							</div>

							<ul>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span>Terms and Conditions</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span>FAQs</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span>Careers</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >
										<span>Contact</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<a href="<?= site_url('<?= site_url('02-ProfilePage.html') ?>') ?>"   class="author-name fn">
					<div class="author-title">
						James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>') ?>"  ></use></svg>
					</div>
					<span class="author-subtitle">SPACE COWBOY</span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->

<div class="header-spacer header-spacer-small"></div>

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>아이디 찾기</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Account -->

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row"></div>
		<div class="col mt-5 col-md-6 offset-md-3">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">아이디 찾기</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Change Password Form -->
					
					<form>
						<div class="row">
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이메일</label>
									<input class="form-control" placeholder="" value="">
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">전화번호</label>
									<input class="form-control" placeholder="">
								</div>
							</div>
							<!-- <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Confirm New Password</label>
									<input class="form-control" placeholder="" type="password">
								</div>
							</div> -->
					
							<!-- <div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
								<div class="remember">
					
									<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="forgot"></a>
								</div>
							</div>
					 -->
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width">Find ID Now!</button>
							</div>
					
						</div>
					</form>
					
					<!-- ... end Change Password Form -->
				</div>
			</div>
		</div>
<!-- 
		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
			<div class="ui-block">

				
				
				 Your Profile  
				
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>
				
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="<?= site_url('<?= site_url('#collapseOne') ?>') ?>"   aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>') ?>"  ></use></svg>
									</a>
								</h6>
							</div>
				
							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="<?= site_url('<?= site_url('28-YourAccount-PersonalInformation.html') ?>') ?>"  >Personal Information</a>
									</li>
									<li>
										<a href="<?= site_url('<?= site_url('29-YourAccount-AccountSettings.html') ?>') ?>"  >Account Settings</a>
									</li>
									<li>
										<a href="<?= site_url('<?= site_url('30-YourAccount-ChangePassword.html') ?>') ?>"  >Change Password</a>
									</li>
									<li>
										<a href="<?= site_url('<?= site_url('31-YourAccount-HobbiesAndInterests.html') ?>') ?>"  >Hobbies and Interests</a>
									</li>
									<li>
										<a href="<?= site_url('<?= site_url('32-YourAccount-EducationAndEmployement.html') ?>') ?>"  >Education and Employement</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="ui-block-title">
						<a href="<?= site_url('<?= site_url('33-YourAccount-Notifications.html') ?>') ?>"   class="h6 title">Notifications</a>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="items-round-little bg-primary">8</a>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('<?= site_url('34-YourAccount-ChatMessages.html') ?>') ?>"   class="h6 title">Chat / Messages</a>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('<?= site_url('35-YourAccount-FriendsRequests.html') ?>') ?>"   class="h6 title">Friend Requests</a>
						<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="items-round-little bg-blue">4</a>
					</div>
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FAVOURITE PAGE</h6>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>') ?>"   class="h6 title">Create Fav Page</a>
					</div>
					<div class="ui-block-title">
						<a href="<?= site_url('<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>') ?>"   class="h6 title">Fav Page Settings</a>
					</div>
				</div>
				
				 ... end Your Profile  
				

			</div>
		</div> -->
	</div>
</div>

<!-- ... end Your Account Personal Information -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('<?= site_url('#request') ?>') ?>"   role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('<?= site_url('#chat') ?>') ?>"   role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('<?= site_url('#notification') ?>') ?>"   role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>') ?>"  ></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('<?= site_url('#search') ?>') ?>"   role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>') ?>"  ></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>') ?>"  ></use></svg>
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
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Find Friends</a>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Settings</a>
				</div>
				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar55-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Tamara Romanoff</a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
									<span class="notification-icon">
										<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
											</span>
										</a>

										<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar56-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Tony Stevens</a>
							<span class="chat-message-item">4 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
											</span>
										</a>

										<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar57-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							You and <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">her wall</a>.
						</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar58-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
											</span>
										</a>

										<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
						</div>
					</li>
				</ul>
				<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="view-all bg-blue">Check all your Events</a>
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Mark all as read</a>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Settings</a>
				</div>

				<ul class="notification-list chat-message">
					<li class="message-unread">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar59-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Diana Jameson</a>
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
									</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar60-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Jake Parker</a>
							<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar61-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Elaine Dreyfuss</a>
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
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
							<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
							<span class="last-message-author">Ed:</span>
							<span class="chat-message-item">Yeah! Seems fine by me!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>') ?>"  ></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
						</div>
					</li>
				</ul>

				<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="view-all bg-purple">View All Messages</a>
			</div>

		</div>

		<div class="tab-pane " id="notification" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Mark all as read</a>
					<a href="<?= site_url('<?= site_url('#') ?>') ?>"  >Settings</a>
				</div>

				<ul class="notification-list">
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar62-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>') ?>"  ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar63-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div>You and <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">his wall</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
						</div>
					</li>

					<li class="with-comment-photo">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar64-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">photo</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>') ?>"  ></use></svg>
										</span>

						<div class="comment-photo">
							<img src="<?= site_url('img/comment-photo1.jpg') ?>"  alt="photo">
							<span>“She looks incredible in that outfit! We should see each...”</span>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar65-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">Gotham Bar</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>') ?>"  ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar66-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>') ?>"  ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>') ?>"  ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>') ?>"  ></use></svg>
						</div>
					</li>
				</ul>

				<a href="<?= site_url('<?= site_url('#') ?>') ?>"   class="view-all bg-primary">View All Notifications</a>
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


<?php $this->load->view('layout/footer'); ?>