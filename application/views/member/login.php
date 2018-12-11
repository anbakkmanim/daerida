<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">
			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="<?= site_url('assets/img/logo-colored-small.png') ?>" alt="Olympus" class="logo-colored">
				</div>
				<div class="title-block">
					<h6 class="logo-title">데리다</h6>
					<div class="sub-title">Daerida</div>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Welcome to the Biggest Social Network in the World</h1>
				<p>We are the best and biggest social network with 5 billion active users all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
				</p>
				<div class="row">
					<a href="#" class="btn mr-4 btn-md btn-border col c-white">개인 회원가입</a>
					<a href="#" class="btn btn-md btn-border col c-white">기업 회원가입</a>
				</div>
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-login-icon') ?>"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-register-icon') ?>"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">개인 로그인</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">아이디</label>
										<input class="form-control" placeholder="" type="id">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">비밀번호</label>
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
			
									<a href="#" class="btn btn-lg bg-yellow full-width btn-icon-left"><i class="fab fa-kakao" aria-hidden="true"></i>카카오로 로그인하기</a>
			
									<a href="#" class="btn btn-lg bg-google full-width btn-icon-left"><i class="fab fa-google" aria-hidden="true"></i>구글로 로그인하기</a>
			
			
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">기업 로그인</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">아이디</label>
										<input class="form-control" placeholder="" type="id">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">비밀번호</label>
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
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
      <!-- ... end Login-Registration Form  -->
    </div>
	</div>
</div>

<script>
  document.body.classList.add("landing-page");
</script>