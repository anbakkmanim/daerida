<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '팀 만들기',
    'content' => '나만의 팀을 만들어 많은 사람들과 더 크고 더 창의적인 프로젝트를 진행해봐요!.',
    'color' => 2
]); ?>

<div class="container">
	<div class="row">
		<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">팀 만들기</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Form Favorite Page Information -->
					
					<form action="/team/createteam" method="post">
						<input type="hidden" name="me_n_idx" value="<?=$this->session->me_idx?>">

						<div class="col">
							<div class="form-group label-floating">
								<label class="control-label">팀 이름</label>
								<input class="form-control" placeholder="" type="text" name="te_name">
							</div>
						</div>
				
						<div class="col">
							<div class="form-group label-floating">
								<label class="control-label">팀정보</label>
								<textarea class="form-control" placeholder="" name="te_info"></textarea>
							<span class="material-input"></span></div>
						</div>
				
						<div class="col">
								<div class="row">
									<div class="col">
										<div class="form-group label-floating is-empty">
												<select class="selectpicker form-control" tabindex="-98" name="fi_l_idx">
														<?php
															foreach($rfield as $row){
																echo "<option name='fi_l_idx' value=".$row['fi_l_idx'].">".$row['fi_l_name']."</option>";
															}
														?>
													</select>
										</div>
									</div>
								</div>
							</div>

						<div class="col">
								<label class="control-label mb-3">공개여부</label>
								<div class="row">
									<div class="radio col">
										<label>
											<input type="radio" name="te_isOpen" value="공개"><span class="circle"></span><span class="check"></span>
											공개
										</label>
									</div>
									<div class="radio col">
										<label>
											<input type="radio" name="te_isOpen" value="비공개"><span class="circle"></span><span class="check"></span>
											비공개
										</label>
									</div>
								</div>
							</div>
				
						
				
						<div class="col mt-2 ">
							<input type="submit" class="btn btn-secondary btn-lg  btn--half-width  m-0 mb-2 mr-4" value="생성">
							<input type="button" class="btn btn-secondary btn-lg btn--half-width  m-0 mb-2" data-dismiss="modal" aria-label="Close" value="취소">
						</div>
					</form>
					
					<!-- ... end Form Favorite Page Information -->
					

				</div>
			</div>
			
		</div>
	</div>
</div>

<?php $this->load->view('layout/footer'); ?>