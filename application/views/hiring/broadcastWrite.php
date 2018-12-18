<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php
    if ($this->session->me_type != "me_c_") {
        alert("이 페이지에 접근 할 권한이 없습니다.");
        location_previous();
        return;
    }
?>


<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>구인 공고 작성</h1>
					<p>구인 공고를 만들어서 사람들을 구하세요!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title"><?= $this->session->me_name ?> 구인공고 작성</h6>
				</div>
				<div class="ui-block-content">
					<!-- Form Favorite Page Information -->
                    <script>
                        function checkForm(e) {
                            if ($("#content").val().length < 4) {
                                alert("공고 제목은 4글자 이상으로 해주세요.");
                                e.preventDefault();
                                return false;
                            }
                            return true;
                        }
                    </script>
					<form method="POST" action="/hiring/recruitAdd" onsubmit="checkForm(event)">
						<div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">공고 제목</label>
                                    <input class="form-control" id="content" name="re_content" placeholder="" type="text">
                                    <span class="material-input"></span>
                                </div>
                            </div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

								<div class="form-group date-time-picker label-floating">
                                    <label class="control-label">공고 시작 일자</label>
                                    <input class="datetimepicker" id="startDate" name="re_startDate">
                                    <span class="input-group-addon">
															<svg class="olymp-calendar-icon icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
														</span>
                                </div>
							</div>

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group date-time-picker label-floating">
                                    <label class="control-label">공고 종료 일자 (설정하지 않을 시 상시 모집)</label>
                                    <input class="datetimepicker" id="endDate" name="re_endDate">
                                    <span class="input-group-addon">
															<svg class="olymp-calendar-icon icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
														</span>
                                </div>
							</div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="submit" class="btn btn-primary btn-lg full-width" value="구인 공고 생성">
                            </div>
						</div>
					</form>

					<!-- ... end Form Favorite Page Information -->
				</div>
			</div>

		</div>
	</div>
</div>

<?php $this->load->view('layout/footer'); ?>