<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/fluid_header',
    array(
            "title" => "404 페이지",
            "intro" => "페이지 URL이 잘못되었습니다."
    )); ?>
<!-- Stunning header -->


<!-- End Stunning header -->


<section class="medium-padding120">
	<div class="container">
		<div class="row">
			<div class="col col-xl-6 m-auto col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="page-404-content">
					<img src="<?= '/assets/img/404.png' ?>" alt="photo">
					<div class="crumina-module crumina-heading align-center">
						<h2 class="h1 heading-title">A <span class="c-primary">wild ghost</span> appears! Sadly, not what you were looking for...</h2>
						<p class="heading-text">Sorry! The page you were looking for has been moved or doesn’t exist.
							If you like, you can return to our homepage, or if the problem persists, send us an email to: <a href="#">daerida-helper@daerida.com</a>
						</p>
					</div>

					<a href="index.html" class="btn btn-primary btn-lg">Go to DAERIDA</a>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">소중한 사람들을 데리다!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src ="/assets/img/guy.png">
	<img class="second-img" alt="rocket" src ="/assets/img/rocket1.png" >
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
								<svg class="olymp-login-icon">
									<use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-login-icon' ?>"></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
								<svg class="olymp-register-icon">
									<use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-register-icon' ?>"></use>
								</svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home1" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Register to Olympus</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Your Birthday</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon' ?>"></use></svg>
										</span>
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Your Gender</label>
											<select class="selectpicker form-control">
												<option value="MA">Male</option>
												<option value="FE">Female</option>
											</select>
										</div>

										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													I accept the <a href="#">Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="profile1" role="tabpanel" data-mh="log-tab">
							<div class="title h6">Login to your Account</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="remember">

											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													Remember Me
												</label>
											</div>
											<a href="#" class="forgot">Forgot my Password</a>
										</div>

										<a href="#" class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

										<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


										<p>Don’t you have an account?
											<a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
	<div class="container">
		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-6 col-6">

				
				<!-- Widget About -->
				
				<div class="widget w-about">
				
					<a href="02-ProfilePage.html" class="logo">
						<div class="img-wrap">
							<img src="<?= '/assets/img/데리다57_주.png' ?>" alt="Olympus">
						</div>
						<div class="title-block">
							<h6 class="logo-title">DAERIDA</h6>
							<div class="sub-title">SOCIAL NETWORK</div>
						</div>
					</a>
					<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
					<ul class="socials">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-youtube" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-google-plus-g" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget About -->

			</div>

			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<!-- Widget List -->
				
				<div class="widget w-list">
					<h6 class="title">Main Links</h6>
					<ul>
						<li>
							<a href="#">Landing</a>
						</li>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Events</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget List -->

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Your Profile</h6>
					<ul>
						<li>
							<a href="#">Main Page</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Friends</a>
						</li>
						<li>
							<a href="#">Photos</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Features</h6>
					<ul>
						<li>
							<a href="#">Newsfeed</a>
						</li>
						<li>
							<a href="#">Post Versions</a>
						</li>
						<li>
							<a href="#">Messages</a>
						</li>
						<li>
							<a href="#">Friend Groups</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Olympus</h6>
					<ul>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="#">Terms & Conditions</a>
						</li>
						<li>
							<a href="#">Forums</a>
						</li>
						<li>
							<a href="#">Statistics</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="index.html">Olympus Buddypress + WP</a> All Rights Reserved 2017
					</span>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Footer Full Width -->



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-three-dots' ?>-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-little-delete' ?>"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?= '/assets/img/avatar14-sm.jpg' ?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= '/assets/img/author-page.jpg' ?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= '/assets/img/avatar14-sm.jpg' ?>" alt="author" class="mCS_img_loaded">
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
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-computer-icon' ?>"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-happy-sticker' ?>-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat1.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat2.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat3.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat4.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat5.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat6.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat7.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat8.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat9.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat10.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat11.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat12.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat13.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat14.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat15.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat16.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat17.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat18.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat19.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat20.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat21.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat22.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat23.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat24.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat25.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat26.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/assets/img/icon-chat27.png' ?>" alt="icon">
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



<a class="back-to-top" href="#">
	<img src="<?= '/assets/svg-icons/back-to-top.svg' ?>" alt="arrow" class="back-icon">
</a>

<?php $this->load->view('layout/footer'); ?>