<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '기업 구인 공고',
    'content' => $details['me_c_name']." 기업의 기업 구인 공고들입니다.",
    'color' => 1
]); ?>

<div class="container mt-3">
	<div class="row">
		<div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <!-- Administration Tool -->
            <?php if ($details['me_c_id'] == $this->session->me_id) { ?>

            <div class="ui-block">
                <div class="ui-block-content">
                    <div class="col">
                        <div class="form-group label-floating">
                            <label class="control-label">모집 공고 제목</label>
                            <input class="form-control" placeholder="" type="text" name="">
                        </div>
                    </div>
                    <div class="col">
                        <label for="">분야</label>
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
                                        <select class="selectpicker form-control" tabindex="-98" onchange="getsfield(event)" name="me_rfield">
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
                                    <select class="selectpicker form-control" tabindex="-98" id="sfield" name="me_sfield">
                                                <?php
                                                    foreach($sfield as $row){
                                                        echo "<option value=".$row['fi_s_idx'].">".$row['fi_s_name']."</option>";
                                                    }
                                                ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group label-floating">
                            <label class="control-label">모집 인원</label>
                            <input class="form-control" placeholder="" type="text" name="">
                        </div>
                    </div>
                    <a class="btn btn-primary mt-3 mb-0 d-block text-white">공고 추가</a>
                </div>
            </div>
            <?php } ?>

            <!-- End Administration Tool -->
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
                        <div class="mt-3 text-muted">모집 인원: <span class="text-primary"><?= $field['re_fi_personal'] ?></span></div>
                        <?php if ($this->session->me_type == "me_n_") { ?>
                        <a href="/hiring/resumeSend?re_fi_idx=<?= $field['re_fi_idx'] ?>" class="btn btn-primary mt-3 mb-0 d-block text-white">지원하기</a>
                        <?php } ?>
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