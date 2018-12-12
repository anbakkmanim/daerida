<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

<div class="container mt-5">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="/assets/img/top-header1.jpg" alt="nature">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="02-ProfilePage.html" class="active">Timeline</a>
									</li>
									<li>
										<a href="05-ProfilePage-About.html">About</a>
									</li>
									<li>
										<a href="06-ProfilePage.html">Friends</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="07-ProfilePage-Photos.html">Photos</a>
									</li>
									<li>
										<a href="09-ProfilePage-Videos.html">Videos</a>
									</li>
									<li>
										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</a>

							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">Update Profile Photo</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
									</li>
									<li>
										<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top-header-author">
						<a href="02-ProfilePage.html" class="author-thumb">
							<img src="/assets/img/author-main1.jpg" alt="author">
						</a>
						<div class="author-content">
							<a href="02-ProfilePage.html" class="h4 author-name">James Spiegel</a>
							<div class="country">San Francisco, CA</div>
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
				<div class="ui-block-title">
					<h6 class="title">Hobbies and Interests</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">Hobbies:</span>
									<span class="text">I like to ride the bike to work, swimming, and working out. I also like
															reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.
														</span>
								</li>
								<li>
									<span class="title">Favourite TV Shows:</span>
									<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
								</li>
								<li>
									<span class="title">Favourite Movies:</span>
									<span class="text">Idiocratic, The Scarred Wizard and the Fire Crown,  Crime Squad, Ferrum Man. </span>
								</li>
								<li>
									<span class="title">Favourite Games:</span>
									<span class="text">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto. </span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">Favourite Music Bands / Artists:</span>
									<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
								</li>
								<li>
									<span class="title">Favourite Books:</span>
									<span class="text">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</span>
								</li>
								<li>
									<span class="title">Favourite Writers:</span>
									<span class="text">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth. </span>
								</li>
								<li>
									<span class="title">Other Interests:</span>
									<span class="text">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.</span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->
						</div>
					</div>
				</div>
			</div>
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Education and Employement</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">The New College of Design</span>
									<span class="date">2001 - 2006</span>
									<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
								</li>
								<li>
									<span class="title">Rembrandt Institute</span>
									<span class="date">2008</span>
									<span class="text">Five months Digital Illustration course. Professor: Leonardo Stagg.</span>
								</li>
								<li>
									<span class="title">The Digital College </span>
									<span class="date">2010</span>
									<span class="text">6 months intensive Motion Graphics course. After Effects and Premire. Professor: Donatello Urtle. </span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->

						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">Digital Design Intern</span>
									<span class="date">2006-2008</span>
									<span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>
								</li>
								<li>
									<span class="title">UI/UX Designer</span>
									<span class="date">2008-2013</span>
									<span class="text">UI/UX Designer for the “Daydreams” agency. </span>
								</li>
								<li>
									<span class="title">Senior UI/UX Designer</span>
									<span class="date">2013-Now</span>
									<span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Info</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">

					
					<!-- W-Personal-Info -->
					
					<ul class="widget w-personal-info">
						<li>
							<span class="title">About Me:</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the
													“Daydreams” Agency in Pier 56
												</span>
						</li>
						<li>
							<span class="title">Birthday:</span>
							<span class="text">December 14th, 1980</span>
						</li>
						<li>
							<span class="title">Birthplace:</span>
							<span class="text">Austin, Texas, USA</span>
						</li>
						<li>
							<span class="title">Lives in:</span>
							<span class="text">San Francisco, California, USA</span>
						</li>
						<li>
							<span class="title">Occupation:</span>
							<span class="text">UI/UX Designer</span>
						</li>
						<li>
							<span class="title">Joined:</span>
							<span class="text">April 31st, 2014</span>
						</li>
						<li>
							<span class="title">Gender:</span>
							<span class="text">Male</span>
						</li>
						<li>
							<span class="title">Status:</span>
							<span class="text">Married</span>
						</li>
						<li>
							<span class="title">Email:</span>
							<a href="#" class="text">jspiegel@yourmail.com</a>
						</li>
						<li>
							<span class="title">Website:</span>
							<a href="#" class="text">daydreamsagency.com</a>
						</li>
						<li>
							<span class="title">Phone Number:</span>
							<span class="text">(044) 555 - 4369 - 8957</span>
						</li>
						<li>
							<span class="title">Religious Belifs:</span>
							<span class="text">-</span>
						</li>
						<li>
							<span class="title">Political Incline:</span>
							<span class="text">Democrat</span>
						</li>
					</ul>
					
					<!-- ... end W-Personal-Info -->
					<!-- W-Socials -->
					
					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<svg class="svg-inline--fa fa-facebook-f fa-w-9" aria-hidden="true" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" data-fa-i2svg=""><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg><!-- <i class="fab fa-facebook-f" aria-hidden="true"></i> -->
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter" aria-hidden="true"></i> -->
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<svg class="svg-inline--fa fa-dribbble fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="dribbble" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg><!-- <i class="fab fa-dribbble" aria-hidden="true"></i> -->
							Dribbble
						</a>
					</div>
					
					
					<!-- ... end W-Socials -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('layout/footer'); ?>