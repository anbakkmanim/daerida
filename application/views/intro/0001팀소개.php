<!DOCTYPE html>
<html lang="en">
<head>

	<title>Company Page - About Us</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/fonts.min.css">

	<!-- Main Font -->
	<script src="<? echo base_url();?>assets/js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

</head>
<body class="body-bg-white">


<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<a href="<? echo base_url();?>assets/#" class="logo">
					<div class="img-wrap">
						<img src="<? echo base_url();?>assets/img/logo.png" alt="Olympus">
						<img src="<? echo base_url();?>assets/img/logo-colored-small.png" alt="Olympus" class="logo-colored">
					</div>
					<div class="title-block">
						<h6 class="logo-title">olympus</h6>
						<div class="sub-title">SOCIAL NETWORK</div>
					</div>
				</a>
	
				<a href="<? echo base_url();?>assets/#" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
				</a>
	
				<div class="nav nav-pills nav1 header-menu expanded-menu">
					<div class="mCustomScrollbar">
						<ul>
                            <li class="nav-item">
                                <a href="<?=site_url('intro/main')?>" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=site_url('intro/profile')?>" class="nav-link">Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=site_url('intro/company')?>" class="nav-link">Company</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=site_url('intro/contactUs')?>" class="nav-link">Contace us</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=site_url('main/register')?>" class="nav-link">Login</a>
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
		<h1 class="stunning-header-title">팀 소개</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="<? echo base_url();?>assets/#">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>팀 소개</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="pt120">
	<div class="container">
		<div class="row mb60">
			<div class="col col-xl-5 col-lg-5 m-auto col-md-12 col-sm-12 col-12">
				<div class="crumina-module crumina-heading align-center">
					<div class="heading-sup-title">프로젝트 데리다</div>
					<h2 class="heading-title">THE TEAM 239</h2>
					<p class="heading-text">대구소프트웨어고등학교 & 푸른들소프트 산학협력 프로젝트</p>
				</div>
			</div>
		</div>

		<div class="info-box-wrap">
			<div class="row">
				<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

					
					<!-- Info Box  -->
					
					<div class="crumina-module crumina-info-box" data-mh="box--classic">
						<div class="info-box-image">
							<img src="<? echo base_url();?>assets/img/screen01.png">
						</div>
						<div class="info-box-content">
							<h3 class="info-box-title">프로젝트 기획</h3>
							<p class="info-box-text">대구지역의 스타트업 네트워크, 창업 생태계 조성, 활성화의 목적으로 하여 학생들의 도전정신과 아이디어를 통한 프로젝트 기획</p>
						</div>
					</div>
					
					<!-- ... end Info Box  -->

				</div>
				<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

					
					<!-- Info Box  -->
					
					<div class="crumina-module crumina-info-box" data-mh="box--classic">
						<div class="info-box-image">
							<img src="<? echo base_url();?>assets/img/screen02.png">
						</div>
						<div class="info-box-content">
							<h3 class="info-box-title">프레임워크 구축</h3>
							<p class="info-box-text">MVC 디자인 패턴, 소프트웨어의 개발방법 공식화 CodeIgniter (PHP 7.0)를 통한 실제 MVC패턴 프로젝트 구축 실습</p>
						</div>
					</div>
					
					<!-- ... end Info Box  -->

				</div>
				<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

					
					<!-- Info Box  -->
					
					<div class="crumina-module crumina-info-box" data-mh="box--classic">
						<div class="info-box-image">
							<img src="<? echo base_url();?>assets/img/screen04.png">
						</div>
						<div class="info-box-content">
							<h3 class="info-box-title">소스 / 기능 개발</h3>
							<p class="info-box-text">웹 프로젝트 기획 및 설계부터 형상관리, 기능 개발, 모듈 개발, 테스트 및 이행까지 웹 개발 전반의 흐름에 대한 실습</p>
						</div>
					</div>
					
					<!-- ... end Info Box  -->

				</div>
				
			</div>
		</div>

	</div>
</section>



<section class="medium-padding180 bg-body">
	<div class="container">
		<div class="row">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12  m-auto">
				<div class="crumina-module crumina-heading">
					<div class="heading-sup-title">프로젝트 데리다</div>
					<h2 class="heading-title">팀명이 왜 <span class="c-primary">239</span> 인가요?</h2>
					<p class="heading-text">우리의 프로젝트 리더의 이름이 이상구입니다. 이상구 이상구 이상구 이삼구 이삼구 239 239가 되었습니다.
					</p>
				</div>
			</div>

			<div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12  align-right">
				<img src="<? echo base_url();?>assets/img/screen03.png" alt="screen" class="negative-margin-right150">
			</div>
		</div>

	</div>
</section>

<section class="medium-padding120">
	<div class="container">
		<div class="row mb60">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12  m-auto">
				<div class="crumina-module crumina-heading align-center">
					<div class="heading-sup-title">프로젝트 데리다</div>
					<h2 class="heading-title">MEET OUR TEAM</h2>
					<p class="heading-text">THE TEAM 239 재기발랄한 우리의 팀원들을 소개합니다</p>
				</div>
			</div>
		</div>

		<div class="row teammembers-wrap">
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

				
				<!-- Teammember Item  -->
				
				<div class="crumina-module crumina-teammembers-item">
				
					<div class="teammembers-thumb">
						<img class="main" src="<? echo base_url();?>assets/img/team_sg.jpg" alt="team member">
						<img class="hover" src="<? echo base_url();?>assets/img/team_sg.jpg" alt="team member">
					</div>
				
					<div class="teammember-content">
				
						<a href="<? echo base_url();?>assets/#" class="h5 teammembers-item-name">이상구</a>
				
						<div class="teammembers-item-prof">프로젝트 리더</div>
				
						<ul class="socials socials--round">
							<li>
								<a href="" class="social-item olympus">
									<svg class="olymp-thunder-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item facebook">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item twitter">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- ... end Teammember Item  -->

			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

				
				<!-- Teammember Item  -->
				
				<div class="crumina-module crumina-teammembers-item">
				
					<div class="teammembers-thumb">
						<img class="main" src="<? echo base_url();?>assets/img/team_yg.jpg" alt="team member">
						<img class="hover" src="<? echo base_url();?>assets/img/team_yg.jpg" alt="team member">
					</div>
				
					<div class="teammember-content">
				
						<a href="<? echo base_url();?>assets/#" class="h5 teammembers-item-name">전영준</a>
				
						<div class="teammembers-item-prof">백엔드 개발</div>
				
						<ul class="socials socials--round">
							<li>
								<a href="" class="social-item olympus">
									<svg class="olymp-thunder-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item twitter">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item spotify">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.56-8-8-8zm3.68 11.56c-.16.24-.44.32-.68.16-1.88-1.16-4.24-1.4-7.04-.76-.28.08-.52-.12-.6-.36-.08-.28.12-.52.36-.6 3.04-.68 5.68-.4 7.76.88.28.12.32.44.2.68zm.96-2.2c-.2.28-.56.4-.84.2-2.16-1.32-5.44-1.72-7.96-.92-.32.08-.68-.08-.76-.4-.08-.32.08-.68.4-.76 2.92-.88 6.52-.44 9 1.08.24.12.36.52.16.8zm.08-2.24C10.16 5.6 5.88 5.44 3.44 6.2c-.4.12-.8-.12-.92-.48-.12-.4.12-.8.48-.92 2.84-.84 7.52-.68 10.48 1.08.36.2.48.68.28 1.04-.2.28-.68.4-1.04.2z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
				
						</ul>
					</div>
				</div>
				
				<!-- ... end Teammember Item  -->

			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

				
				<!-- Teammember Item  -->
				
				<div class="crumina-module crumina-teammembers-item">
				
					<div class="teammembers-thumb">
						<img class="main" src="<? echo base_url();?>assets/img/team_dh.jpg" alt="team member">
						<img class="hover" src="<? echo base_url();?>assets/img/team_dh.jpg" alt="team member">
					</div>
				
					<div class="teammember-content">
				
						<a href="<? echo base_url();?>assets/#" class="h5 teammembers-item-name">정동혁</a>
				
						<div class="teammembers-item-prof">프론트엔드 개발</div>
				
						<ul class="socials socials--round">
							<li>
								<a href="" class="social-item olympus">
									<svg class="olymp-thunder-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item facebook">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item dribble">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 16c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm6.747-6.905c-.234-.074-2.115-.635-4.257-.292.894 2.456 1.258 4.456 1.328 4.872 1.533-1.037 2.624-2.68 2.93-4.58zM10.67 14.3c-.102-.6-.5-2.688-1.46-5.18l-.044.014C5.312 10.477 3.93 13.15 3.806 13.4c1.158.905 2.614 1.444 4.194 1.444.947 0 1.85-.194 2.67-.543zm-7.747-1.72c.155-.266 2.03-3.37 5.555-4.51.09-.03.18-.056.27-.08-.173-.39-.36-.778-.555-1.16-3.413 1.02-6.723.977-7.023.97l-.003.208c0 1.755.665 3.358 1.756 4.57zM1.31 6.61c.307.005 3.122.017 6.318-.832-1.132-2.012-2.353-3.705-2.533-3.952-1.912.902-3.34 2.664-3.784 4.785zM6.4 1.368c.188.253 1.43 1.943 2.548 4 2.43-.91 3.46-2.293 3.582-2.468C11.323 1.827 9.736 1.176 8 1.176c-.55 0-1.087.066-1.6.19zm6.89 2.322c-.145.194-1.29 1.662-3.816 2.694.16.325.31.656.453.99.05.117.1.235.147.352 2.274-.286 4.533.172 4.758.22-.015-1.613-.59-3.094-1.543-4.257z"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- ... end Teammember Item  -->

			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

				
				<!-- Teammember Item  -->
				
				<div class="crumina-module crumina-teammembers-item">
				
					<div class="teammembers-thumb">
						<img class="main" src="<? echo base_url();?>assets/img/team_jh.jpg" alt="team member">
						<img class="hover" src="<? echo base_url();?>assets/img/team_jh.jpg" alt="team member">
					</div>
				
					<div class="teammember-content">
				
						<a href="<? echo base_url();?>assets/#" class="h5 teammembers-item-name">배준현</a>
				
						<div class="teammembers-item-prof">프론트엔드 개발</div>
				
						<ul class="socials socials--round">
							<li>
								<a href="" class="social-item olympus">
									<svg class="olymp-thunder-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								</a>
							</li>
							<li>
								<a href="" class="social-item twitter">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- ... end Teammember Item  -->

			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

				
				<!-- Teammember Item  -->
				
				<div class="crumina-module crumina-teammembers-item">
				
					<div class="teammembers-thumb">
						<img class="main" src="<? echo base_url();?>assets/img/team_hy.jpg" alt="team member">
						<img class="hover" src="<? echo base_url();?>assets/img/team_hy.jpg" alt="team member">
					</div>
				
					<div class="teammember-content">
				
						<a href="<? echo base_url();?>assets/#" class="h5 teammembers-item-name">정현욱</a>
				
						<div class="teammembers-item-prof">백엔드 개발</div>
				
						<ul class="socials socials--round">
							<li>
								<a href="" class="social-item olympus">
									<svg class="olymp-thunder-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item twitter">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item dribble">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 16c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm6.747-6.905c-.234-.074-2.115-.635-4.257-.292.894 2.456 1.258 4.456 1.328 4.872 1.533-1.037 2.624-2.68 2.93-4.58zM10.67 14.3c-.102-.6-.5-2.688-1.46-5.18l-.044.014C5.312 10.477 3.93 13.15 3.806 13.4c1.158.905 2.614 1.444 4.194 1.444.947 0 1.85-.194 2.67-.543zm-7.747-1.72c.155-.266 2.03-3.37 5.555-4.51.09-.03.18-.056.27-.08-.173-.39-.36-.778-.555-1.16-3.413 1.02-6.723.977-7.023.97l-.003.208c0 1.755.665 3.358 1.756 4.57zM1.31 6.61c.307.005 3.122.017 6.318-.832-1.132-2.012-2.353-3.705-2.533-3.952-1.912.902-3.34 2.664-3.784 4.785zM6.4 1.368c.188.253 1.43 1.943 2.548 4 2.43-.91 3.46-2.293 3.582-2.468C11.323 1.827 9.736 1.176 8 1.176c-.55 0-1.087.066-1.6.19zm6.89 2.322c-.145.194-1.29 1.662-3.816 2.694.16.325.31.656.453.99.05.117.1.235.147.352 2.274-.286 4.533.172 4.758.22-.015-1.613-.59-3.094-1.543-4.257z"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- ... end Teammember Item  -->

			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

				
				<!-- Teammember Item  -->
				
				<div class="crumina-module crumina-teammembers-item">
				
					<div class="teammembers-thumb">
						<img class="main" src="<? echo base_url();?>assets/img/team_gr.jpg" alt="team member">
						<img class="hover" src="<? echo base_url();?>assets/img/team_gr.jpg" alt="team member">
					</div>
				
					<div class="teammember-content">
				
						<a href="<? echo base_url();?>assets/#" class="h5 teammembers-item-name">전재홍</a>
				
						<div class="teammembers-item-prof">담당 멘토</div>
				
						<ul class="socials socials--round">
							<li>
								<a href="" class="social-item olympus">
									<svg class="olymp-thunder-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item twitter">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
				
							<li>
								<a href="" class="social-item spotify">
									<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.56-8-8-8zm3.68 11.56c-.16.24-.44.32-.68.16-1.88-1.16-4.24-1.4-7.04-.76-.28.08-.52-.12-.6-.36-.08-.28.12-.52.36-.6 3.04-.68 5.68-.4 7.76.88.28.12.32.44.2.68zm.96-2.2c-.2.28-.56.4-.84.2-2.16-1.32-5.44-1.72-7.96-.92-.32.08-.68-.08-.76-.4-.08-.32.08-.68.4-.76 2.92-.88 6.52-.44 9 1.08.24.12.36.52.16.8zm.08-2.24C10.16 5.6 5.88 5.44 3.44 6.2c-.4.12-.8-.12-.92-.48-.12-.4.12-.8.48-.92 2.84-.84 7.52-.68 10.48 1.08.36.2.48.68.28 1.04-.2.28-.68.4-1.04.2z" fill-rule="nonzero"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- ... end Teammember Item  -->

			</div>
		</div>

	</div>
</section>






<a class="back-to-top" href="<? echo base_url();?>assets/#">
	<img src="<? echo base_url();?>assets/svg_icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>



<!-- JS Scripts -->
<script src="<? echo base_url();?>assets/js/jquery-3.2.1.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.appear.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.mousewheel.js"></script>
<script src="<? echo base_url();?>assets/js/perfect-scrollbar.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.matchHeight.js"></script>
<script src="<? echo base_url();?>assets/js/svgxuse.js"></script>
<script src="<? echo base_url();?>assets/js/imagesloaded.pkgd.js"></script>
<script src="<? echo base_url();?>assets/js/Headroom.js"></script>
<script src="<? echo base_url();?>assets/js/velocity.js"></script>
<script src="<? echo base_url();?>assets/js/ScrollMagic.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.waypoints.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.countTo.js"></script>
<script src="<? echo base_url();?>assets/js/popper.min.js"></script>
<script src="<? echo base_url();?>assets/js/material.min.js"></script>
<script src="<? echo base_url();?>assets/js/bootstrap-select.js"></script>
<script src="<? echo base_url();?>assets/js/smooth-scroll.js"></script>
<script src="<? echo base_url();?>assets/js/selectize.js"></script>
<script src="<? echo base_url();?>assets/js/swiper.jquery.js"></script>
<script src="<? echo base_url();?>assets/js/moment.js"></script>
<script src="<? echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<? echo base_url();?>assets/js/simplecalendar.js"></script>
<script src="<? echo base_url();?>assets/js/fullcalendar.js"></script>
<script src="<? echo base_url();?>assets/js/isotope.pkgd.js"></script>
<script src="<? echo base_url();?>assets/js/ajax-pagination.js"></script>
<script src="<? echo base_url();?>assets/js/Chart.js"></script>
<script src="<? echo base_url();?>assets/js/chartjs-plugin-deferred.js"></script>
<script src="<? echo base_url();?>assets/js/circle-progress.js"></script>
<script src="<? echo base_url();?>assets/js/loader.js"></script>
<script src="<? echo base_url();?>assets/js/run-chart.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.magnific-popup.js"></script>
<script src="<? echo base_url();?>assets/js/jquery.gifplayer.js"></script>
<script src="<? echo base_url();?>assets/js/mediaelement-and-player.js"></script>
<script src="<? echo base_url();?>assets/js/mediaelement-playlist-plugin.min.js"></script>

<script src="<? echo base_url();?>assets/js/base-init.js"></script>
<script defer src="<? echo base_url();?>assets/fonts/fontawesome-all.js"></script>

<script src="<? echo base_url();?>assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>