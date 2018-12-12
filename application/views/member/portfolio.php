
<?php $this->load->view('layout/header'); ?>
<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="<?= site_url('02-ProfilePage.html') ?>"  class="logo">
			<div class="img-wrap">
				<img src="<?= site_url('img/logo.png') ?>"  alt="Olympus">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="<?= site_url('#') ?>"  class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('03-Newsfeed.html') ?>" >
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('16-FavPagesFeed.html') ?>" >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('17-FriendGroups.html') ?>" >
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('18-MusicAndPlaylists.html') ?>" >
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('19-WeatherWidget.html') ?>" >
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('20-CalendarAndEvents-MonthlyCalendar.html') ?>" >
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('24-CommunityBadges.html') ?>" >
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('25-FriendsBirthday.html') ?>" >
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('26-Statistics.html') ?>" >
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>" ></use></svg>
					</a>
				</li>
				<li>
					<a href="<?= site_url('27-ManageWidgets.html') ?>" >
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>" ></use></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="<?= site_url('02-ProfilePage.html') ?>"  class="logo">
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
					<a href="<?= site_url('#') ?>"  class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('03-Newsfeed.html') ?>" >
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>" ></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('16-FavPagesFeed.html') ?>" >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>" ></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('17-FriendGroups.html') ?>" >
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>" ></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('18-MusicAndPlaylists.html') ?>" >
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>" ></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('19-WeatherWidget.html') ?>" >
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>" ></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('20-CalendarAndEvents-MonthlyCalendar.html') ?>" >
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>" ></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('24-CommunityBadges.html') ?>" >
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>" ></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('25-FriendsBirthday.html') ?>" >
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>" ></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('26-Statistics.html') ?>" >
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>" ></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('27-ManageWidgets.html') ?>" >
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>" ></use></svg>
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

				<span>Complete <a href="<?= site_url('#') ?>" >your profile</a> so people can know more about you!</span>

			</div>
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="<?= site_url('#') ?>"  class="logo js-sidebar-open">
			<img src="<?= site_url('img/logo.png') ?>"  alt="Olympus">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="<?= site_url('#') ?>"  class="logo">
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
					<a href="<?= site_url('02-ProfilePage.html') ?>"  class="author-name fn">
						<div class="author-title">
							James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>" ></use></svg>
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
					<a href="<?= site_url('#') ?>"  class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('mobile-index.html') ?>" >
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-newsfeed-icon') ?>" ></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-28-YourAccount-PersonalInformation.html') ?>" >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>" ></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('mobile-29-YourAccount-AccountSettings.html') ?>" >
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>" ></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-30-YourAccount-ChangePassword.html') ?>" >
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-headphones-icon') ?>" ></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-31-YourAccount-HobbiesAndInterests.html') ?>" >
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-weather-icon') ?>" ></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-32-YourAccount-EducationAndEmployement.html') ?>" >
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>" ></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-33-YourAccount-Notifications.html') ?>" >
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-badge-icon') ?>" ></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-34-YourAccount-ChatMessages.html') ?>" >
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-cupcake-icon') ?>" ></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('Mobile-35-YourAccount-FriendsRequests.html') ?>" >
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-stats-icon') ?>" ></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('#') ?>" >
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-manage-widgets-icon') ?>" ></use></svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="<?= site_url('#') ?>" >

						<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>" ></use></svg>

						<span>Profile Settings</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('#') ?>" >
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>" ></use></svg>

						<span>Create Fav Page</span>
					</a>
				</li>
				<li>
					<a href="<?= site_url('#') ?>" >
						<svg class="olymp-logout-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-logout-icon') ?>" ></use></svg>

						<span>Log Out</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">About Olympus</h6>
			</div>

			<ul class="about-olympus">
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

<!-- ... end Fixed Sidebar Left -->


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
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>" ></use></svg>
				</button>
			</div>
		</form>

		<a href="<?= site_url('#') ?>"  class="link-find-friend">Find Friends</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
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
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>
									</a>

									<a href="<?= site_url('#') ?>"  class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>
									</a>

									<a href="<?= site_url('#') ?>"  class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar57-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('#') ?>"  class="notification-link">her wall</a>.
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
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
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>
									</a>

									<a href="<?= site_url('#') ?>"  class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="<?= site_url('#') ?>"  class="view-all bg-blue">Check all your Events</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
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
									<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
									<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar61-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Elaine Dreyfuss</a>
									<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="<?= site_url('#') ?>"  class="view-all bg-purple">View All Messages</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>" ></use></svg>

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
									<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar63-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="<?= site_url('#') ?>"  class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar64-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('#') ?>"  class="notification-link">photo</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use></svg>
									</span>

								<div class="comment-photo">
									<img src="<?= site_url('img/comment-photo1.jpg') ?>"  alt="photo">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar65-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="<?= site_url('#') ?>"  class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?= site_url('img/avatar66-sm.jpg') ?>"  alt="author">
								</div>
								<div class="notification-event">
									<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
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

										<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>" ></use></svg>

										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('36-FavPage-SettingsAndCreatePopup.html') ?>" >
										<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-star-icon') ?>" ></use></svg>

										<span>Create Fav Page</span>
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<svg class="olymp-logout-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-logout-icon') ?>" ></use></svg>

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
									<svg class="olymp-check-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-check-icon') ?>" ></use></svg>
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
						James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon') ?>" ></use></svg>
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
						<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('#chat') ?>"  role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('#notification') ?>"  role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-thunder-icon') ?>" ></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="<?= site_url('#search') ?>"  role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>" ></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
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
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
											</span>
										</a>

										<a href="<?= site_url('#') ?>"  class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
											</span>
										</a>

										<a href="<?= site_url('#') ?>"  class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar57-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="<?= site_url('#') ?>"  class="notification-link">her wall</a>.
						</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
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
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
											</span>
										</a>

										<a href="<?= site_url('#') ?>"  class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
									</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar61-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<a href="<?= site_url('#') ?>"  class="h6 notification-friend">Elaine Dreyfuss</a>
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') ?>" ></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
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
							<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar63-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div>You and <a href="<?= site_url('#') ?>"  class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="<?= site_url('#') ?>"  class="notification-link">his wall</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
						</div>
					</li>

					<li class="with-comment-photo">
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar64-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="<?= site_url('#') ?>"  class="notification-link">photo</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use></svg>
										</span>

						<div class="comment-photo">
							<img src="<?= site_url('img/comment-photo1.jpg') ?>"  alt="photo">
							<span>“She looks incredible in that outfit! We should see each...”</span>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar65-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="<?= site_url('#') ?>"  class="notification-link">Gotham Bar</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar66-sm.jpg') ?>"  alt="author">
						</div>
						<div class="notification-event">
							<div><a href="<?= site_url('#') ?>"  class="h6 notification-friend">James Summers</a> commented on your new <a href="<?= site_url('#') ?>"  class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
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
								<a href="<?= site_url('#') ?>"  class="h3 author-name">이름</a>
								<div class="country">주소  |  분야</div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="profile-menu">
									<li>
										<a href="<?= site_url('00_profile_normal.html') ?>" >정보</a>
									</li>
									<li>
										<a href="<?= site_url('13-FavouritePage-About.html') ?>"  class="active">포트폴리오</a>
									</li>
									<li>
										<a href="<?= site_url('07-ProfilePage-Photos.html') ?>" >이력서 관리</a>
									</li>
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
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">

						
						
						<div class="photo-item half-width">
							<img src="<?= site_url('img/photo-item1.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item2.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item3.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item4.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item5.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item6.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item7.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item8.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item9.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item10.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('img/photo-item11.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>
						

						<a href="<?= site_url('#') ?>"  class="btn btn-control btn-more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>

					</div>

				</div>

				<div class="tab-pane active" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

						<div class="photo-album-item-wrap col-4-width" >
							
							<div class="photo-album-item create-album" data-mh="album-item">
							
								<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>
							
								<div class="content">
							
									<a href="<?= site_url('#') ?>"  class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">
										<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('../svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
									</a>
							
									<a href="<?= site_url('#') ?>"  class="title h5" data-toggle="modal" data-target="#create-photo-album">포트폴리오 추가</a>
									<!-- <span class="sub-title">It only takes a few minutes!</span> -->
							
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-item2.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 2 hours ago</span>
							
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<!-- <div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic5.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic7.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic8.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic2.jpg') ?>"  alt="friend">
														</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-album1.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
							
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 5 weeks ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<!-- <div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic5.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic7.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic8.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic2.jpg') ?>"  alt="friend">
														</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-album2.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
							
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 6 mins ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<!-- <div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-album3.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
							
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 16 hours ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<!-- <div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic7.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic8.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic2.jpg') ?>"  alt="friend">
														</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
							
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-album4.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
							
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 13 mins ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<!-- <div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic5.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic7.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic8.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic2.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/avatar30-sm.jpg') ?>"  alt="author">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/avatar29-sm.jpg') ?>"  alt="user">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/avatar28-sm.jpg') ?>"  alt="user">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/avatar27-sm.jpg') ?>"  alt="user">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>"  class="all-users">+3</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-item6.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
							
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 57 mins ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<!-- <div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="<?= site_url('img/photo-album5.jpg') ?>"  alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
										<span>324</span>
									</a>
							
									<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="<?= site_url('#') ?>"  class="title h5">포트폴리오 제목</a>
									<span class="sub-title">Last Added: 1 year ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<!-- <div class="swiper-slide"></div>
												<ul class="friends-harmonic">
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/avatar30-sm.jpg') ?>"  alt="author">
														</a>
													</li>
													<li>
														<a href="<?= site_url('#') ?>" >
															<img src="<?= site_url('img/avatar29-sm.jpg') ?>"  alt="user">
														</a>
													</li>
												</ul>
											</div> -->
							
											<!-- <div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="<?= site_url('#') ?>"  class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div> -->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</div>




<!-- Window-popup Open Photo Popup V1 -->

<div class="modal fade" id="open-photo-popup-v1" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v1" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v1" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>

			<div class="modal-body">
				<div class="open-photo-thumb">
					<div class="swiper-container" data-slide="fade">
						<div class="swiper-wrapper">

							<div class="swiper-slide"></div>
								<div class="photo-item">
									<img src="<?= site_url('img/open-photo2.jpg') ?>"  alt="photo">
									<div class="overlay"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</a>

									<div class="content">
										<a href="<?= site_url('#') ?>"  class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="<?= site_url('img/open-photo2.jpg') ?>"  alt="photo">
									<div class="overlay"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</a>

									<div class="content">
										<a href="<?= site_url('#') ?>"  class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="<?= site_url('img/open-photo2.jpg') ?>"  alt="photo">
									<div class="overlay"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</a>

									<div class="content">
										<a href="<?= site_url('#') ?>"  class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

						</div>

						<!--Prev Next Arrows-->

						<svg class="btn-next-without olymp-popup-right-arrow"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-popup-right-arrow') ?>" ></use></svg>

						<svg class="btn-prev-without olymp-popup-left-arrow"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-popup-left-arrow') ?>" ></use></svg>
					</div>
				</div>

				<div class="open-photo-content">

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img src="<?= site_url('img/author-page.jpg') ?>"  alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="<?= site_url('02-ProfilePage.html') ?>" >James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										2 hours ago
									</time>
								</div>
							</div>

							<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="<?= site_url('#') ?>" >Edit Post</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >Delete Post</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >Turn Off Notifications</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

						<p>With: <a href="<?= site_url('#') ?>" >Jessy Owen</a>, <a href="<?= site_url('#') ?>" >Marina Valentine</a></p>

						<div class="post-additional-info inline-items">

							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>148</span>
							</a>

							<ul class="friends-harmonic">
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('img/friend-harmonic7.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('img/friend-harmonic8.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('img/friend-harmonic9.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('img/friend-harmonic10.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('img/friend-harmonic11.jpg') ?>"  alt="friend">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="<?= site_url('#') ?>" >Diana</a>, <a href="<?= site_url('#') ?>" >Nicholas</a> and
								<br>13 more liked this
							</div>


							<div class="comments-shared">
								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-speech-balloon-icon') ?>" ></use></svg>
									<span>61</span>
								</a>

								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-share-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-share-icon') ?>" ></use></svg>
									<span>32</span>
								</a>
							</div>


						</div>

						<!-- <div class="control-block-button post-control-button">

							<a href="<?= site_url('#') ?>"  class="btn btn-control">
								<svg class="olymp-like-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-like-post-icon') ?>" ></use></svg>
							</a>

							<a href="<?= site_url('#') ?>"  class="btn btn-control">
								<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use></svg>
							</a>

							<a href="<?= site_url('#') ?>"  class="btn btn-control">
								<svg class="olymp-share-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-share-icon') ?>" ></use></svg>
							</a>

						</div> -->

					</article>

					<div class="mCustomScrollbar" data-mcs-theme="dark">

						<ul class="comments-list">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img src="<?= site_url('img/avatar48-sm.jpg') ?>"  alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="<?= site_url('#') ?>" >Marina Valentine</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												46 mins ago
											</time>
										</div>
									</div>

									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>

								</div>

								<p>I had a great time too!! We should do it again!</p>

								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
									<span>8</span>
								</a>
								<a href="<?= site_url('#') ?>"  class="reply">Reply</a>
							</li>

							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img src="<?= site_url('img/avatar4-sm.jpg') ?>"  alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="<?= site_url('#') ?>" >Chris Greyson</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												1 hour ago
											</time>
										</div>
									</div>

									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>

								</div>

								<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
									<span>7</span>
								</a>
								<a href="<?= site_url('#') ?>"  class="reply">Reply</a>

							</li>
						</ul>

					</div>

					<form class="comment-form inline-items">

						<div class="post__author author vcard inline-items">
							<img src="<?= site_url('img/author-page.jpg') ?>"  alt="author">

							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder="Press Enter to post..."></textarea>
								<div class="add-options-message">
									<a href="<?= site_url('#') ?>"  class="options-message">
										<svg class="olymp-camera-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-camera-icon') ?>" ></use></svg>
									</a>
								</div>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Open Photo Popup V1 -->

<!-- Window-popup Open Photo Popup V2 -->

<div class="modal fade" id="open-photo-popup-v2" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup open-photo-popup-v2" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
				</a>
	
				<div class="modal-header">
					<h6 class="title">포트폴리오 제목</h6>
				</div>
	
				<div class="modal-body">
					

						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12s">
								<fieldset disabled="">
										<div class="form-group has-disabled is-empty mr-3">
											<input type="text" class="form-control" placeholder="간단한 소개">
										<span class="material-input"></span></div>
									</fieldset>
						</div>

						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12s">
								<fieldset disabled="">
										<div class="form-group has-disabled is-empty mr-3">
											<a href="<?= site_url('#') ?>" ><input type="text" class="form-control" placeholder="포토폴리오 파일"></a>
										<span class="material-input"></span></div>
									</fieldset>
						</div>
	
					<!-- <form class="form-group label-floating">
						<label class="control-label" style="margin-bottom: 50px;">간단한 소개</label>
						<input class="form-control" placeholder="" type="text"> 
					</form> -->
	
					<!-- <form class="form-group label-floating" style="margin-bottom: 100px;">
							<label class="control-label">포트폴리오 파일</label>
							<input class="form-control" placeholder="" type="text">
						</form> -->

					<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">확인</a>
					<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">삭제</a>
	
				</div>
			</div>
		</div>
	</div>



<!-- Window-popup Open Photo Popup V2 -->
<!-- Window-popup Create Photo Album -->

<div class="modal fade" id="create-photo-album" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">포트폴리오 추가</h6>
			</div>

			<div class="modal-body">

				<form class="form-group label-floating">
					<label class="control-label">포트폴리오 제목</label>
					<input class="form-control" placeholder="" type="text">
				</form>

				<form class="form-group label-floating">
						<label class="control-label">간단한 소개</label>
						<input class="form-control" placeholder="" type="text">
				</form>

				<form>
					<div class="form-group label-floating">
						<label for="exampleFormControlFile1" class="ml-2">포트폴리오 파일</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</form>

			
				<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">초기화</a>
				<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">등록</a>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Create Photo Album -->
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="<?= site_url('#') ?>"  class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="<?= site_url('#') ?>"  class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
			</div>
		</div>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
	<div class="modal-dialog window-popup choose-from-my-photo" role="document">

		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="<?= site_url('#home') ?>"  role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="<?= site_url('#profile') ?>"  role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-albums-icon') ?>" ></use></svg>
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

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
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
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/author-page.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
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
				<a href="<?= site_url('#') ?>"  class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') ?>" ></use></svg>

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