<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div class="container mt-3">
  <div class="row">
    <div class="col col-xl-8 order-xl-1 col-lg-8 order-lg-1 col-md-12 order-md-1 col-sm-12 col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          내 프로필
        </div>
        <div class="ui-block-content align-center align-content-center">
          <img alt="author" src="<?= "/uploads/profile/".$this->session->me_profile ?>" style="width:72px" class="avatar">
          <h3 class="mt-2"><?= $this->session->me_name ?></h3>
        </div>
      </div>
    </div>
    <div class="col col-xl-4 order-xl-2 col-lg-4 order-lg-2 col-md-12 order-md-2 col-sm-12 col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          지원 정보 확인
        </div>
        <div class="ui-block-content">
          <ul class="widget w-personal-info item-block">
            <li>
              <span class="title">지원 회사</span>
              <span class="text mt-1">대소고</span>
            </li>
            <li>
              <span class="title">지원 분야</span>
              <span class="text mt-1"><h5><span class="badge badge-pill badge-primary">웹</span>&nbsp;<span class="badge badge-pill badge-danger">Vue</span></h5></span>
            </li>
            <li>
              <span class="title">지원 공고</span>
              <span class="text mt-1">프론트엔드 개발자 모집해용 ㅎㅎ</span>
            </li>
            <li>
              <span class="title">포트폴리오</span>
              <div class="form-group label-floating is-empty">
                <label class="control-label" for="portfolio-url">포트폴리오 URL</label>
                <input type="text" class="form-control mt-2" name="portfolio-url" id="portfolio-url">
                <span class="material-input"></span>
              </div>
              <span class="text">URL 대신 파일 업로드</span>
              <input type="file" class="mt-2" name="portfolio-file" id="portfolio-file">
            </li>
          </ul>

          <div class="btn btn-primary d-block mt-3">지원하기</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>