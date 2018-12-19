<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/fluid_header', ['title' => '자주 묻는 질문들', 'intro' => '지원']); ?>


<section class="mb60" >
	<div class="container" >
		<div class="row">
			<div class="col col-xl-8 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				
				
				<div id="accordion" role="tablist" aria-multiselectable="true" class="accordion-faqs">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  aria-expanded="true" aria-controls="collapseOne">
									왜 데리다 입니까?
									<span class="icons-wrap d-none">
										<svg class="olymp-plus-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-plus-icon" ></use></svg>
										<svg class="olymp-accordion-close-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-accordion-close-icon" ></use></svg>
									</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<p>
								데리다는 함께 일하는 '사람'에 초점을 맞춘 스타트업 맞춤형 서비스입니다. 
								언제나 활성화 되어있는 데리다를 이용해 실시간으로 인재와의 만남을 가지세요!
								데리다에서 마음이 맞는 사람들과 팀을 만들어 보세요! 그리고 프로젝트를 진행하여 완성하세요!
							</p>
						</div>
				
						<div class="card-header" role="tab" id="headingOne-1">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1"  aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									팀이름이 왜 안밖마님입니까?
									<span class="icons-wrap d-none">
														<svg class="olymp-plus-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-plus-icon" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-accordion-close-icon" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-1" class="collapse" role="tabpanel" aria-labelledby="headingOne-1">
							<p>
								소프트웨어와 하드웨어, 안과 밖을 어우르는 인간들에게 서비스를 제공하겠다는 의미.
							</p>
				
							<!-- <p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architecto beatae vitae dicta sunt explicabo.
							</p> -->
						</div>
				
						<div class="card-header" role="tab" id="headingOne-2">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-2"  aria-expanded="true" aria-controls="collapseOne" class="collapsed">
									SNS로그인은 어떻게 하나요?
									<span class="icons-wrap d-none">
														<svg class="olymp-plus-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-plus-icon" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-accordion-close-icon" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-2" class="collapse" role="tabpanel" aria-labelledby="headingOne-2">
							<p>
								카카오, 네이버, 구글과 연동하여 로그인을 하실 수 있습니다.
							</p>
						</div>
				
						<div class="card-header" role="tab" id="headingOne-3">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-3"  aria-expanded="true" aria-controls="collapseOne-3" class="collapsed">
									이 사이트를 이용하려면 돈이 드나요?
									<span class="icons-wrap d-none">
														<svg class="olymp-plus-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-plus-icon" ></use></svg>
														<svg class="olymp-accordion-close-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-accordion-close-icon" ></use></svg>
													</span>
								</a>
							</h3>
						</div>
				
						<div id="collapseOne-3" class="collapse" role="tabpanel" aria-labelledby="headingOne">
							<p>
								모든 서비스를 무료로 이용하실 수 있습니다.
							</p>
						</div>
					
					</div>
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
				<a href="#"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">소중한 사람들을 데리다!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="/assets/img/guy.png" >
	<img class="second-img" alt="rocket" src="/assets/img/rocket1.png" >
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-close-icon" ></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="/assets/#home1"  role="tab">
								<svg class="olymp-login-icon">
									<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-login-icon" ></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="/assets/#profile1"  role="tab">
								<svg class="olymp-register-icon">
									<use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-register-icon" ></use>
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
											<svg class="olymp-calendar-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon" ></use></svg>
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
													I accept the <a href="#" >Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="#"  class="btn btn-purple btn-lg full-width">Complete Registration!</a>
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
											<a href="#"  class="forgot">Forgot my Password</a>
										</div>

										<a href="#"  class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="#"  class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

										<a href="#"  class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


										<p>Don’t you have an account?
											<a href="#" >Register Now!</a> it’s really simple and you can start enjoing all the benefits!
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

<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon" ></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-little-delete" ></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="/assets/img/avatar14-sm.jpg"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="/assets/img/author-page.jpg"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="/assets/img/avatar14-sm.jpg"  alt="author" class="mCS_img_loaded">
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
				<a href="#"  class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-computer-icon" ></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon" ></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat1.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat2.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat3.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat4.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat5.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat6.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat7.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat8.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat9.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat10.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat11.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat12.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat13.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat14.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat15.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat16.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat17.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat18.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat19.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat20.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat21.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat22.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat23.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat24.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat25.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat26.png"  alt="icon">
							</a>
						</li>
						<li>
							<a href="#" >
								<img src="/assets/img/icon-chat27.png"  alt="icon">
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



<a class="back-to-top" href="#" >
	<img src="/assets/svg-icons/back-to-top.svg"  alt="arrow" class="back-icon">
</a>

<script>
	document.body.classList.add("body-bg-white");
</script>
<?php $this->load->view('layout/footer'); ?>