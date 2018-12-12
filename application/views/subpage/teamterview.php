<?php $this->load->view('layout/header'); ?>
<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<a href="<?= site_url('#') ?>" class="logo">
					<div class="img-wrap">
						<img src="<?= site_url('assets/img/데리다57_흰.png') ?>" alt="Olympus">
						<img src="<?= site_url('assets/img/데리다57_주.png') ?>" alt="Olympus" class="logo-colored">
					</div>
					<div class="title-block">
						<h6 class="logo-title">DAERIDA</h6>
					</div>
				</a>
	
				<a href="<?= site_url('#') ?>" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>"></use></svg>
				</a>
	
				<div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>" class="nav-link">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="<?= site_url('#') ?>" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
									<a class="dropdown-item" href="<?= site_url('#') ?>">Newsfeed</a>
									<a class="dropdown-item" href="<?= site_url('#') ?>">Post Versions</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-has-megamenu">
								<a href="<?= site_url('#') ?>" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
								<div class="dropdown-menu megamenu">
									<div class="row">
										<div class="col col-sm-3">
											<h6 class="column-tittle">Main Links</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page<span class="tag-label bg-blue-light">new</span></a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">BuddyPress</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Corporate</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Forums</h6>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
											<a class="dropdown-item" href="<?= site_url('#') ?>">Profile Page</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>" class="nav-link">Terms & Conditions</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>" class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('#') ?>" class="nav-link">Privacy Policy</a>
							</li>
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>"></use></svg>
							</li>
							<li class="nav-item js-expanded-menu">
								<a href="<?= site_url('#') ?>" class="nav-link">
									<svg class="olymp-menu-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-menu-icon') ?>"></use></svg>
									<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>"></use></svg>
								</a>
							</li>
							<li class="shoping-cart more">
								<a href="<?= site_url('#') ?>" class="nav-link">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-shopping-bag-icon') ?>"></use></svg>
									<span class="count-product">2</span>
								</a>
								<div class="more-dropdown shop-popup-cart">
									<ul>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img src="<?= site_url('assets/img/product1.png') ?>" alt="product">
											</div>
											<div class="product-content">
												<h6 class="title">White Enamel Mug</h6>
												<ul class="rait-stars">
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
	
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="far fa-star star-icon" aria-hidden="true"></i>
													</li>
												</ul>
												<div class="counter">x2</div>
											</div>
											<div class="product-price">$20</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
											</div>
										</li>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img src="<?= site_url('assets/img/product2.png') ?>" alt="product">
											</div>
											<div class="product-content">
												<h6 class="title">Olympus Orange Shirt</h6>
												<ul class="rait-stars">
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
	
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
													</li>
													<li>
														<i class="far fa-star star-icon" aria-hidden="true"></i>
													</li>
												</ul>
												<div class="counter">x1</div>
											</div>
											<div class="product-price">$40</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
											</div>
										</li>
									</ul>
	
									<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>
	
									<div class="cart-btn-wrap">
										<a href="<?= site_url('#') ?>" class="btn btn-primary btn-sm">Go to Your Cart</a>
										<a href="<?= site_url('#') ?>" class="btn btn-purple btn-sm">Go to Checkout</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">TeamTerview</h1>

		<!-- <ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="<?= site_url('#') ?>">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>Blog Grid</span>
			</li>
		</ul> -->
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- ... end Stunning header -->

<section class="blog-post-wrap medium-padding80">
	<div class="container">
		<div class="row">
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post1.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-blue-light">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">억장이 무너진다</a>
							<p>IoT 데이터 시각화 웹 어플리케이션</p>
					
							<div class="author-date">
								
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">Maddy Simmons</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 7 hours ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post2.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-primary">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">손영달 멘토</a>
							<p>스마트팜 구축을 위한 IoT 플랫폼 개발</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">JACK SCORPIO</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 12 hours ago
									</time>
								</div>
							</div>
					
						
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post3.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-purple">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">NOA</a>
							<p>학교 시스템 개발 (메신저 & 부가기능)</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">Maddy Simmons</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 2 days ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post4.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-primary">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">이철희 멘토</a>
							<p>방범	레이다용 임베디드 소프트웨어 개발</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">JACK SCORPIO</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 20 days ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post5.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-blue-light">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">피해자들의 모임</a>
							<p>데이터 수집 및 자료 전송 App 개발</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">Maddy Simmons</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										-  1 MONTH ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post6.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-blue-light">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">임홍준 멘토</a>
							<p>아날로그 필터와 OpAmp</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">JAMES SPIEGEL</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										-  1 MONTH ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
					

				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post7.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-blue-light">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">얄리얄리</a>
							<p>오픈마켓 출시용 모바일 게임 개발</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">JACK SCORPIO</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										-  2 MONTHS ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post8.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-purple">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">박민우 멘토</a>
							<p>Kraken unleashed VR Roller Coaster</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">MADDY SIMMONS</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 2 months ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="<?= site_url('assets/img/post9.jpg') ?>" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="<?= site_url('#') ?>" class="post-category bg-purple">Interview</a>
							<a href="<?= site_url('#') ?>" class="h4 post-title">떡잎마을 두부방범대</a>
							<p>딥러닝 기반 지능형 CCTV 솔루션 개발</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="<?= site_url('#') ?>">MADDY SIMMONS</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 3 months ago
									</time>
								</div>
							</div>
					
							
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- Pagination -->
	
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="<?= site_url('#') ?>" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="<?= site_url('#') ?>">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
			<li class="page-item"><a class="page-link" href="<?= site_url('#') ?>">2</a></li>
			<li class="page-item"><a class="page-link" href="<?= site_url('#') ?>">3</a></li>
			<li class="page-item"><a class="page-link" href="<?= site_url('#') ?>">...</a></li>
			<li class="page-item"><a class="page-link" href="<?= site_url('#') ?>">12</a></li>
			<li class="page-item">
				<a class="page-link" href="<?= site_url('#') ?>">Next</a>
			</li>
		</ul>
	</nav>
	
	<!-- ... end Pagination -->

</section>


<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="<?= site_url('#') ?>" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">소중한 사람들을 데리다!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="<?= site_url('assets/img/guy.png') ?>">
	<img class="second-img" alt="rocket" src="<?= site_url('assets/img/rocket1.png') ?>">
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="<?= site_url('#home1') ?>" role="tab">
								<svg class="olymp-login-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-login-icon') ?>"></use>
								</svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="<?= site_url('#profile1') ?>" role="tab">
								<svg class="olymp-register-icon">
									<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-register-icon') ?>"></use>
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
											<svg class="olymp-calendar-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-calendar-icon') ?>"></use></svg>
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
													I accept the <a href="<?= site_url('#') ?>">Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="<?= site_url('#') ?>" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
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
											<a href="<?= site_url('#') ?>" class="forgot">Forgot my Password</a>
										</div>

										<a href="<?= site_url('#') ?>" class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="<?= site_url('#') ?>" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

										<a href="<?= site_url('#') ?>" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


										<p>Don’t you have an account?
											<a href="<?= site_url('#') ?>">Register Now!</a> it’s really simple and you can start enjoing all the benefits!
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
				
					<a href="#" class="logo">
						<div class="img-wrap">
							<img src="<?= site_url('assets/img/데리다57_주.png') ?>" alt="Olympus">
						</div>
						<div class="title-block">
							<h6 class="logo-title">DAERIDA</h6>
						</div>
					</a>
					<p>데리다에서 마음이 맞는 사람들과 팀을 만들어 보세요! 그리고 프로젝트를 진행하여 완성하세요!</p>
					<ul class="socials">
						<li>
							<a href="<?= site_url('#') ?>">
								<i class="fab fa-facebook-square" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<i class="fab fa-youtube" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<i class="fab fa-google-plus-g" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
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
							<a href="<?= site_url('#') ?>">Landing</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Home</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">About</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Events</a>
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
							<a href="<?= site_url('#') ?>">Main Page</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">About</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Friends</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Photos</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Features</h6>
					<ul>
						<li>
							<a href="<?= site_url('#') ?>">Newsfeed</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Post Versions</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Messages</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Friend Groups</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-6 col-6">

				
				<div class="widget w-list">
					<h6 class="title">Olympus</h6>
					<ul>
						<li>
							<a href="<?= site_url('#') ?>">Privacy</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Terms & Conditions</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Forums</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">Statistics</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="<?= site_url('index.html') ?>">Olympus Buddypress + WP</a> All Rights Reserved 2017
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
				<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-little-delete') ?>"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('assets/img/avatar14-sm.jpg') ?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('assets/img/author-page.jpg') ?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('assets/img/avatar14-sm.jpg') ?>" alt="author" class="mCS_img_loaded">
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
								<img src="<?= site_url('assets/img/icon-chat1.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat2.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat3.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat4.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat5.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat6.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat7.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat8.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat9.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat10.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat11.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat12.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat13.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat14.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat15.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat16.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat17.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat18.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat19.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat20.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat21.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat22.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat23.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat24.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat25.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat26.png') ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>">
								<img src="<?= site_url('assets/img/icon-chat27.png') ?>" alt="icon">
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



<?php $this->load->view('layout/footer'); ?>