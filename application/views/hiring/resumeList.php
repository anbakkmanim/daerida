<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '지원자 목록',
    'content' => '합격, 불합격 여부를 설정해 주세요.',
    'color' => 1
]); ?>


<div class="container mt-3">
  <div class="row">
    <div class="col col-xl-8 order-xl-1 col-lg-8 order-lg-1 col-md-12 order-md-1 col-sm-12 col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          지원자
        </div>
        <div class="ui-block-content">
          <div class="list mt-0">
              <?php
                foreach($resumes as $resume) {
                    ?>
                    <!-- Iteratable Item -->
                    <div class="list-group">
                        <div class="list-group-item d-inline-block">
                            <div class="align-content-center">
                                <img alt="author" src="/uploads/profile/<?= $resume['me_n_profile'] ?>" style="width:72px"
                                     class="avatar rounded-circle d-inline-block">
                                <div class="d-inline-block ml-2">
                                    <a href="/member/User?me_n_idx=<?= $resume['me_n_idx'] ?>"><h5><?= $resume['me_n_name'] ?></h5></a>
                                </div>
                                <ul class="widget w-personal-info item-block mt-2">
                                    <li>
                                        <span class="title">분야</span>
                                        <span class="text mt-1"><?= $resume['re_fi_explain'] ?></span>
                                    </li>
                                    <li>
                                        <span class="title">현재 상태</span>
                                        <span class="text mt-1"><?= $resume['re_ap_state'] ?></span>
                                    </li>
                                    <li>
                                        <span class="title">포트폴리오</span>
                                        <span class="text mt-1"><a href="<?= $resume['re_ap_info'] ?>"><?= $resume['re_ap_info'] ?></a></span>
                                    </li>
                                    <li>
                                        <span class="title">지원일</span>
                                        <span class="text mt-1"><?= $resume['re_ap_date'] ?></span>
                                    </li>
                                    <li>
                                        <span class="title">전화번호</span>
                                        <span class="text mt-1"><?= $resume['me_n_phone'] ?></span>
                                    </li>
                                    <li>
                                        <span class="title">희망 연봉</span>
                                        <span class="text mt-1"><?= $resume['me_n_hopeSalary'] ?></span>
                                    </li>
                                </ul>
                                <a href="/hiring/updateResume?re_ap_idx=<?= $resume['re_ap_idx'] ?>&state=채용됨" class="btn btn-success float-right ml-2">수락</a>
                                <a href="/hiring/updateResume?re_ap_idx=<?= $resume['re_ap_idx'] ?>&state=탈락" class="btn btn-danger float-right">거절</a>
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
    <div class="col col-xl-4 order-xl-2 col-lg-4 order-lg-2 col-md-12 order-md-2 col-sm-12 col-12">
      <div class="ui-block">
        <div class="ui-block-title">
          채용 정보
        </div>
        <div class="ui-block-content">
          <ul class="widget w-personal-info item-block">
          <li>
              <span class="title">채용 공고</span>
              <span class="text mt-1"><?= $detail['re_content'] ?></span>
          </li>
            <li>
              <span class="title">채용 날짜</span>
                <p class="published">
                                        <?php
                                        if ($detail['re_startDate'] != null) {
                                            echo $detail['re_startDate'] . " ~ ";
                                        }
                                        if ($detail['re_endDate'] != null) {
                                            echo $detail['re_endDate'];
                                        } else {
                                            echo "상시";
                                        }
                                        ?>
									</p>
            </li>

        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>