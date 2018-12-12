<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>아이디 찾기</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Account -->

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row"></div>
		<div class="col mt-5 col-md-6 offset-md-3">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">아이디 찾기</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Change Password Form -->
					
						<div class="row">
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이메일</label>
									<input class="form-control"  name="me_email" id="me_email">
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">전화번호</label>
									<input class="form-control" name="me_phone" id="me_phone">
								</div>
							</div>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<script>
									function findid(){
										$.ajax({
											type:"POST",
											url:"/member/findUserId",
											data: {"me_email" : $("#me_email")[0].value, "me_phone" : $("#me_phone")[0].value},
											success(data){
												data = JSON.parse(data);
												if(data.id == null){
													alert("해당 정보의 아이디는 존재하지 않습니다.");
													window.location.href="/member/findid";					
												}else{
													alert("아이디는 "+data.id + " 입니다.");
													window.location.href="/member/login";					
												}
											},
										});
									}
								</script>
								<button class="btn btn-primary btn-lg full-width" id="submit" onclick="findid()">Find ID Now!</button>
							</div>
					
						</div>
					
					<!-- ... end Change Password Form -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->




<?php $this->load->view('layout/footer'); ?>