<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '기업 지원',
    'content' => "기업에 지원합니다.",
    'color' => 1
]); ?>

<div class="container mt-3">
  <div class="row">
    <div class="col col-xl-8 order-xl-1 col-lg-8 order-lg-1 col-md-12 order-md-1 col-sm-12 col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          내 프로필
        </div>
        <div class="ui-block-content align-center align-content-center">
            <img alt="author" src="/uploads/profile/<?= $user->me_n_profile ?>" style="width:288px; height:120px" class="avatar">
            <h3 class="mt-2"><?= $user->me_n_name ?></h3>
            <h4 class="mt-2"><?= $user->me_n_email ?> / <?= $user->me_n_phone ?></h4>
            <h5 class="mt-2">희망연봉 : <?= $user->me_n_hopeSalary ?></h5>
            <h5 class="mt-2">자기소개 : <?= $user->me_n_info ?></h5>
        </div>
      </div>
    </div>
    <form class="col col-xl-4 order-xl-2 col-lg-4 order-lg-2 col-md-12 order-md-2 col-sm-12 col-12" method="POST" action="/hiring/resumeInfoSend">
      <div class="ui-block">
        <div class="ui-block-title">
          지원 정보 확인
        </div>
        <div class="ui-block-content">
          <ul class="widget w-personal-info item-block">
            <li>
              <span class="title">지원 분야</span>
              <span class="text mt-1"><h5><span class="badge badge-pill badge-primary"><?= $fields['fi_l_name'] ?></span>&nbsp;<span class="badge badge-pill badge-danger"><?= $fields['fi_s_name'] ?></span></h5></span>
            </li>
            <li>
              <span class="title">지원 공고</span>
              <span class="text mt-1"><?= $fields['re_fi_explain'] ?></span>
            </li>
            <li>
            <input type="hidden" name="re_fi_idx" value="<?= $fields['re_fi_idx'] ?>" >
              <span class="title">포트폴리오</span>
              <div class="form-group label-floating is-empty">
                <label class="control-label" for="portfolio-url">포트폴리오 URL</label>
                <input type="url" class="form-control mt-2" name="re_ap_info" id="portfolio-url">
                <span class="material-input"></span>
              </div>
              <!-- <span class="text">URL 대신 파일 업로드</span>
              <input type="file" class="mt-2" name="portfolio-file" id="portfolio-file"> -->
            </li>
          </ul>

          <input type="submit" class="btn btn-primary d-block mt-3 mb-0" value="지원하기" >
        </div>
      </div>
    </form>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>