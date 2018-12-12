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
					
					
						<div class="row">
					

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">아이디</label>
									<input class="form-control" id="me_id" name="me_id">
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
									<input class="form-control" id="me_answer" name="me_answer">
								</div>
							</div>

							<div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
								<div class="remember">

									<a href="<?= site_url('/member/findid') ?>"  class="forgot">아이디가 기억나지 않는다면?</a>
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<script>
									function findpw(){
										$.ajax({
											type:"POST",
											url:"/member/findUserPassword",
											data: {"me_id" : $("#me_id")[0].value, "me_answer" : $("#me_answer")[0].value},
											success(data){
												data = JSON.parse(data);
												if(data.password == null){
													alert("해당 정보의 비밀번호는 존재하지 않습니다.");
													window.location.href="/member/findpassword";					
												}else{
													$("#change-pw").modal("toggle");				
												}
											},
										});
									}
								</script>
								<button class="btn btn-primary btn-lg full-width" id= "submit" onclick="findpw()" >Find Password Now!<div class="ripple-container"></div></button>
							</div>
					
						</div>
					
					
					<!-- ... end Change Password Form -->
				</div>
			</div>
		</div>

	</div>
</div>

	<div class="modal fade" id="change-pw" tabindex="-1" role="dialog" aria-labelledby="create-photo-album"
	 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="<?= site_url('svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use>
					</svg>
				</a>

				<div class="modal-header">
					<h6 class="title">비밀번호 변경</h6>
				</div>

				<div class="modal-body">

					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="form-group label-floating">
							<label class="control-label">새 비밀번호 입력</label>
							<input class="form-control" placeholder="" type="password" name="" id="me_password">
						</div>
					</div>

					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="form-group label-floating">
							<label class="control-label">새 비밀번호 확인</label>
							<input class="form-control" placeholder="" type="password" >
						</div>
					</div>
					<script>
						function changepw(){
							$.ajax({
								type:"POST",
								url:"/member/changeUserPassword",
								data: {"me_id" : $("#me_id")[0].value, "me_password" : $("#me_password")[0].value},
								success(data){
									data = JSON.parse(data);
									if(data.Status == "Success"){
										alert("비밀번호가 성공적으로 변경되었습니다.");
										window.location.href="/member/login";					
									}
								},
							});
						}
					</script>
					<button class="btn btn-secondary btn-lg btn--half-width" id= "change" onclick="changepw()" >변경</button>
					<button class="btn btn-secondary btn-lg btn--half-width" >취소</button>
				</div>
			</div>
		</div>
	</div>

<!-- ... end Your Account Personal Information -->




<?php $this->load->view('layout/footer'); ?>