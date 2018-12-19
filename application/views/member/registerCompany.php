<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '기업 회원가입',
    'content' => '기업 회원으로 데리다에 회원가입 합니다.',
    'color' => 2
]); ?>

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">회원 정보 입력</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Change Password Form -->
					
					<form action="/member/register" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="me_table" value="MEMBER_COMPANY_TB">
							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">회사 이름</label>
									<input class="form-control" placeholder="" type="text" name="me_name">
								</div>
							</div>
							
							<div class="col">
									<div class="form-group label-floating">
										<label class="control-label">담당자 이름</label>
										<input class="form-control" placeholder="" type="text" name="me_c_manager">
									</div>
                </div>
							<div class="col">
							<div class="row">
							<div class="col">
										<div class="form-group label-floating">
											<label class="control-label">아이디</label>
											<input class="form-control" placeholder="" type="text" id="me_id" name="me_id">
										</div>
									</div>
									<div class="col col-lg-4 col-md-4 col-3 pl-0">
										<script>
											function checkID() {
											    if($("#me_id")[0].value == ""){
											        alert("아이디를 기입해주십시오.")
                                                }else {
                                                    $.ajax({
                                                        type: "GET",
                                                        url: "/member/idCheck",
                                                        data: {"me_id": $("#me_id")[0].value},
                                                        success(data) {
                                                            console.log(data)
                                                            if (data == 1) {
                                                                alert("사용 가능한 아이디입니다.");
                                                                $("#submit").attr("disabled", false);
                                                                $("#me_id").attr("readonly", true);
                                                            } else {
                                                                alert("중북된 아이디입니다.");
                                                            }
                                                        }
                                                    })
                                                }
											}
										</script>
									<a onclick="checkID()" class="btn btn-purple btn-lg" style="color:#fff" id="checkid">중복확인<div class="ripple-container"></div></a>
									</div>
									</div>
									</div>
									<div class="col">
										<div class="row">
												<div class="col">
														<div class="form-group label-floating is-empty">
																<label class="control-label">비밀번호</label>
																<input class="form-control" id="pwd" placeholder="" type="password" name="me_password">
														</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="form-group label-floating is-empty has-success">
																<label class="control-label">비밀번호 확인</label>
																<input class="form-control" id="pwd_result" placeholder="" type="password">
														</div>
												</div>
											</div>
                  	</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">이메일</label>
									<input class="form-control" placeholder="" type="email" name="me_email">
								</div>
							</div>

							<div class="col">
								<div class="form-group label-floating">
									<label class="control-label">전화번호</label>
									<input class="form-control" placeholder="" type="text" name="me_phone">
								</div>
              </div>
              
				
							<div class="col">
								<label for="">Q. 가장 기억에 남는 장소는?</label>
								<div class="form-group label-floating">
									<label class="control-label">답변</label>
									<input class="form-control" placeholder="" type="text" name="me_answer">
								</div>
							</div>

							<div class="col">
							<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
								<script>
										function getsfield(e) {
											$.ajax({
												type: "GET",
												url: "/member/getSmallField",
												data: {"rfield" : e.target.value},
												success (data) {
													data = JSON.parse(data);
													$("#sfield").html("");
													for(var i of data) {
														var a = $("<option></option>")
															.attr("value",i.fi_s_idx)
															.text(i.fi_s_name);
														$("#sfield").append(a); 
													}
													$("#sfield").selectpicker("refresh"); 
												}
											})
										}
										</script>
										<select class="selectpicker form-control" id="selectPart"tabindex="-98" onchange="getsfield(event)" name="me_rfield">
											<?php
												foreach($rfield as $row){
													echo "<option name='me_rfield' value=".$row['fi_l_idx'].">".$row['fi_l_name']."</option>";
												}
											?>
										</select>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<select class="selectpicker form-control" id="sfield" name="me_sfield">
										<?php
											foreach($sfield as $row){
												echo "<option value=".$row['fi_s_idx'].">".$row['fi_s_name']."</option>";
											}
										?>
									</select>
								</div>
							</div>
							</div></div>
                <div class="col">
									<div class="form-group label-floating">
										<label class="control-label">지역</label>
										<input class="form-control" placeholder="" type="text" name="me_region">
									</div>
                </div>

                
                <div class="col">
									<div class="form-group label-floating">
										<label class="control-label">연봉</label>
										<input class="form-control" placeholder="" type="text" name="me_salary">
									</div>
                </div>

					
            <div class="col">
								<div class="row">
									<div class="checkbox col">
										<label>
											<input type="checkbox" name="me_military">
											병역 특례 여부
										</label>
									</div>
								</div>
							</div>
							
							<div class="col">
									<div class="form-group label-floating">
										<label class="control-label">복리후생</label>
										<input class="form-control" placeholder="" type="text" name="me_c_benefit">
									</div>
                </div>
              
							<div class="col">
									<label class="control-label">로고 사진</label>
									<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
										<div class="file-upload d-inline-block">
											<label for="upload" class="file-upload__label">Upload Button</label>
											<input id="upload" class="file-upload__input" type="file" name="me_profile">
										</div>
										<div id="uploaded-file" class="d-inline-block">
											<img id="preview" src="">
										</div>
									</div>
								</div>
                
                <div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
                    <div class="remember">
                    </div>
                  </div>
					
							<div class="col">
								<button class="btn btn-purple btn-lg full-width" id="submit" disabled>회원가입하기</button>
							</div>
					</form>
					
					<!-- ... end Change Password Form -->
				</div>
			</div>
		</div>

		
	</div>
</div>

<!-- ... end Your Account Personal Information -->





<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
<img src="/assets/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>


<?php $this->load->view('layout/footer'); ?>


<script>
document.onkeyup = e => {
  const password = document.getElementById('pwd').value;
  const password_check = document.getElementById('pwd_result').value;

  const pwd_result = document.getElementById("pwd_result").parentElement;

  if (password == "" || password_check == "") {
    pwd_result.classList.remove("has-error");
    pwd_result.classList.remove("has-success");
    pwd_result.classList.add("has-error");
  } else if (password == password_check) {
    pwd_result.classList.remove("has-error");
    pwd_result.classList.remove("has-success");
    pwd_result.classList.add("has-success");
  } else if (password != password_check) {
    pwd_result.classList.remove("has-error");
    pwd_result.classList.remove("has-success");
    pwd_result.classList.add("has-error");
  } else {
    pwd_result.classList.remove("has-error");
    pwd_result.classList.remove("has-success");
    pwd_result.classList.add("has-error");
  }
};

$("#upload").change(function() {
  readImage(this);
});

const readImage = input => {
  if (input.files && input.files[0]) {
    const reader = new FileReader();

    reader.onload = function(e) {
      let image = document.getElementById("preview");
      image.setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
};
</script>

</body>
</html>

