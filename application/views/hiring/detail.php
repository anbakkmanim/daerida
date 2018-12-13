<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

<div class="container mt-3">
	<div class="row">
		<div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <?php
            foreach ($fields as $field) {
                ?>
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h4><?= $field['re_fi_explain'] ?></h4>
                    </div>
                    <div class="ui-block-content">
                        <h5><span class="badge badge-pill badge-primary"><?= $field['fi_l_name'] ?></span>&nbsp;<span
                                    class="badge badge-pill badge-danger"><?= $field['fi_s_name'] ?></span></h5>
<!--                        <div class="mt-3">설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명</div>-->
                        <div class="mt-3 text-muted">모집 인원: <span class="text-primary"><?= $field['re_fi_personal'] ?></span></div>
                        <a href="/hiring/resumeSend?re_fi_idx=<?= $field['re_fi_idx'] ?>" class="btn btn-primary mt-3 d-block text-white">지원하기</a>
                    </div>
                </div>
                <?php
            }
            ?>
		</div>

		<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">회사 정보</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">

					
					<!-- W-Personal-Info -->
					
					<ul class="widget w-personal-info">
                        <li>
                            <span class="title">기업명:</span>
                            <a href="/member/Company?me_c_idx=<?= $details['me_c_idx'] ?>" class="text"><?= $details['me_c_name']?></a>
                        </li>
                        <li>
                            <span class="title">기업담당자:</span>
                            <span class="text"><?= $details['me_c_manager'] ?></span>
                        </li>
                        <li>
                            <span class="title">이메일:</span>
                            <a href="mailto:<?= $details['me_c_email'] ?>" class="text"><?= $details['me_c_email'] ?></a>
                        </li>
                        <li>
                            <span class="title">초봉:</span>
                            <span class="text"><?= $details['me_c_salary'] ?></span>
                        </li>
                        <li>
                            <span class="title">지역:</span>
                            <span class="text"><?= $details['me_c_sido'] ?></span>
                        </li>
                        <li>
                            <span class="title">복리후생:</span>
                            <span class="text"><?= $details['me_c_benefit'] ?></span>
                        </li>
                        <li>
                            <span class="title">병역 여부:</span>
                            <span class="text"><?= $details['me_c_isMilitary'] ?></span>
                        </li>
					</ul>
					
					<!-- ... end W-Personal-Info -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('layout/footer'); ?>