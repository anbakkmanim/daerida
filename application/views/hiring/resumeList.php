<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div class="container mt-3">
  <div class="row">
    <div class="col col-xl-8 order-xl-1 col-lg-8 order-lg-1 col-md-12 order-md-1 col-sm-12 col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          지원자
        </div>
        <div class="ui-block-content">
          <div class="list mt-0">
            <!-- Iteratable Item -->
            <div class="list-group">
              <div class="list-group-item d-inline-block">
                <div class="align-content-center">
                  <img alt="author" src="/assets/img/avatar1-sm.jpg" style="width:72px" class="avatar rounded-circle d-inline-block">
                  <div class="d-inline-block ml-2">
                    <h5>서상희</h5>
                  </div>
                  <ul class="widget w-personal-info item-block mt-2">
                    <li>
                      <span class="title">포트폴리오</span>
                      <span class="text mt-1"><a href="https://github.com/tbvjaos510">https://github.com/tbvjaos510</a></span>
                    </li>
                    <li>
                      <span class="title">지원일</span>
                      <span class="text mt-1">2018년 12월 13일</span>
                    </li>
                    <li>
                      <span class="title">전화번호</span>
                      <span class="text mt-1">010-9999-9999</span>
                    </li>
                    <li>
                      <span class="title">희망 연봉</span>
                      <span class="text mt-1">24,000 원</span>
                    </li>
                  </ul>
                  <a href="#" class="btn btn-success float-right ml-2">수락</a>
                  <a href="#" class="btn btn-danger float-right">거절</a>
                </div>
              </div>
            </div>
            <!-- Iteratable Item -->
          </div>
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
              <span class="title">지원 분야</span>
              <span class="text mt-1"><h5><span class="badge badge-pill badge-primary">aa</span>&nbsp;<span class="badge badge-pill badge-danger">aa</span></h5></span>
            </li>
            <li>
              <span class="title">지원 공고</span>
              <span class="text mt-1">aa</span>
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