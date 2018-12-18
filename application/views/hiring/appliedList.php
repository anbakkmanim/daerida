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
            <?php
              foreach($recruits as $recruit) {
            ?>
            <div class="list-group">
              <div class="list-group-item d-inline-block">
                <div class="align-content-center">
                  <img alt="author" src="/uploads/profile/<?= $this->session->me_profile ?>" style="width:72px" class="avatar rounded-circle d-inline-block">
                  <div class="d-inline-block ml-2">
                    <h5><?= $recruit['re_fi_explain'] ?></h5>
                  </div>
                  <ul class="widget w-personal-info item-block mt-2">
                    <li>
                      <span class="title">기업</span>
                      <span class="text mt-1"><a href="<?='/member/Company?me_c_idx='.$recruit['me_c_idx']?>"><?= $recruit['me_c_name'] ?></a></span>
                    </li>
                    <li>
                      <span class="title">포트폴리오</span>
                      <span class="text mt-1"><a href="<?= $recruit['re_ap_info'] ?>"><?= $recruit['re_ap_info'] ?></a></span>
                    </li>
                    <li>
                      <span class="title">지원 시간</span>
                      <span class="text mt-1"><?= $recruit['re_ap_date'] ?></span>
                    </li>
                    <li>
                      <span class="title">지원 상태</span>
                      <span class="text mt-1"><?= $recruit['re_ap_state'] ?></span>
                    </li>
                  </ul>
                  <!-- <a href="#" class="btn btn-danger float-right">취소</a> -->
                </div>
              </div>
            </div>
            <?php
              }
            ?>
            <!-- Iteratable Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>