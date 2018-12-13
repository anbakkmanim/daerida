<?php $this->load->view('layout/header'); ?>

<div class="content-bg-wrap"></div>

<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">
			<a href="#" class="logo">
				<div class="img-wrap">
				<img src="<?= site_url('assets/img/데리다57_흰.png') ?>" alt="Olympus">
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
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mr-5">
			<div class="landing-content">
				<h1>Welcome to the DAERIDA</h1>
				<p>데리다는 전국 스타트업 네트워크 서비스입니다. <br>
				이력서, 팀빌딩, 포트폴리오, 구인구직 다양한 기능을 만나보세요! <br>
				사람을 데리다 모집하고, 공유하고, 팀을 만들어 보세요! 
				</p>
				<div class="row">
					<a href="./registerNormal" class="btn mr-4 btn-md btn-border col c-white">개인 회원가입</a>
					<a href="./registerCompany" class="btn btn-md btn-border col c-white">기업 회원가입</a>
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
							<svg class="happy-face-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="happy-faces-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon') ?>"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">개인 로그인</div>
						<form class="content" action="/member/authUser" method="post">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">아이디</label>
										<input class="form-control" placeholder="" type="id" name="me_id">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">비밀번호</label>
										<input class="form-control" placeholder="" type="password" name="me_password">
									</div>
			
									<div class="remember">
										<a href="./findid" class="forget mr-4" style="color:#888da8">Forgot my ID</a>
										<a href="./findpassword" class="forget" style="color:#888da8">Forgot my Password</a>
									</div>
									<input href="/" type="submit" class="btn btn-lg btn-primary full-width" value="Login">
			
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
						<form class="content" action="/member/authUser" method="post">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">아이디</label>
										<input class="form-control" placeholder="" type="id" name="me_id">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">비밀번호</label>
										<input class="form-control" placeholder="" type="password" name="me_password">
									</div>
			
									<div class="remember">
										<a href="#" class="forget mr-4" style="color:#888da8">Forgot my ID</a>
										<a href="#" class="forget" style="color:#888da8">Forgot my Password</a>
									</div>
									<input type="submit" class="btn btn-lg btn-primary full-width" value="Login">
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

<?php $this->load->view('layout/footer'); ?>
