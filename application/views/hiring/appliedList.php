<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          지원 목록
        </div>
        <div class="ui-block-content">
          <div class="list mt-0">
            <!-- Iteratable Item -->
            <div class="list-group">
              <div class="list-group-item d-inline-block">
                <div class="align-content-center">
                  <img alt="author" src="/assets/img/avatar1-sm.jpg" style="width:72px" class="avatar rounded-circle d-inline-block">
                  <div class="d-inline-block ml-2">
                    <h5>프론트엔드 개발자</h5>
                  </div>
                  <ul class="widget w-personal-info item-block mt-2">
                    <li>
                      <span class="title">기업</span>
                      <span class="text mt-1"><a href="#">대구소프트웨어고등학교</a></span>
                    </li>
                    <li>
                      <span class="title">포트폴리오</span>
                      <span class="text mt-1"><a href="https://github.com/tbvjaos510">https://github.com/tbvjaos510</a></span>
                    </li>
                    <li>
                      <span class="title">지원일</span>
                      <span class="text mt-1">2018년 12월</span>
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
                  <a href="#" class="btn btn-danger float-right">취소</a>
                </div>
              </div>
            </div>
            <!-- Iteratable Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>