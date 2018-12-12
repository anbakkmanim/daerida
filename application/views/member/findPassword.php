<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>비밀번호 찾기</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Account -->

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col mt-5 col-md-6 offset-md-3">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">비밀번호 찾기</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Change Password Form -->
					
					<form>
						<div class="row">
					

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">아이디</label>
									<input class="form-control" placeholder="">
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<fieldset disabled="">
											<div class="form-group has-disabled is-empty">
												<input type="text" class="form-control" placeholder="Q. 기억에 남는 추억의 장소는?">
											<span class="material-input"></span></div>
										</fieldset>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">A. 답변</label>
									<input class="form-control" placeholder="">
								</div>
							</div>

							<div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
								<div class="remember">

									<a href="<?= site_url('#') ?>"  class="forgot">아이디가 기억나지 않는다면?</a>
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width">Find Password Now!</button>
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





<?php $this->load->view('layout/footer'); ?>