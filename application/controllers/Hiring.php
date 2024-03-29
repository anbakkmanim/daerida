<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends CI_Controller
{

    /**
     * 이력서 작성 페이지
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HiringModel');
        $this->load->model('RecruitModel');
        $this->load->model('RegisterModel');
        $this->load->model('AuthModel');
    }

    /**
     * 이력서 신청 페이지
     * @METHOD GET
     * @MainURL hiring/resumeSend
     * @Params X
     */
    public function resumeSend()
    {
        $re_fi_idx = $_GET['re_fi_idx'];

        $result = $this->RecruitModel->getField($re_fi_idx);
        $mydata = $this->AuthModel->getCustAfterLogin($_SESSION);
        $return = array (
            "fields" => $result[0],
            "user" => $mydata
        );
        $this->load->view('hiring/resumeSend', $return);
    }

    /**
     * 이력서 정보 전송 페이지
     * @METHOD POST
     * @MainURL hiring/resumeInfoSend
     * @Params re_fi_idx, me_n_id,, re_ap_info, re_ap_date
     */
    public function resumeInfoSend()
    {
        $data['re_fi_idx'] = $_POST['re_fi_idx'];
        $data['me_n_idx'] = $this->session->me_idx;
        $data['re_ap_info'] = $_POST['re_ap_info'];

        $result = $this->HiringModel->sendResume($data);
        if ($result == true) {
            alert("성공적으로 이력서를 제출하였습니다!");
        } else {
            alert("이력서를 제출하는데 실패하였습니다.");
        }
        location_href("/hiring/appliedList");
    }

    /**
     * 이력서 리스트
     * @METHOD GET
     * @MainURL hiring/resumeList
     */
    public function resumeList()
    {
        if ($this->session->me_type == "me_n_") {
            alert("잘못된 요청입니다.");
            location_previous();
        }
        $re_idx = $this->input->get("re_idx");

        $resumes = $this->HiringModel->listResume($re_idx);

        $detail = $this->RecruitModel->detailRecruit($re_idx);
        $result = array(
            "resumes" => $resumes,
            "detail" => isset($detail[0]) ? $detail[0] : null
        );
        $this->load->view('hiring/resumeList', $result);
    }

    public function resume() {
        if ($this->session->me_type == "me_n_") {
            alert("잘못된 요청입니다.");
            location_previous();
        }

        $co_idx = $this->session->me_idx;
        $return = $this->RecruitModel->listRecruit($co_idx, null, null);

        $return = array(
          "hiringList" => $return
        );
        $this->load->view("hiring/resume", $return);

    }

    /**
     * 지원 상태 변경
     * @METHOD GET
     * @MainURL hiring/updateResume
     */
    public function updateResume() {
        if ($this->session->me_type == "me_n_") {
            alert("잘못된 요청입니다.");
            location_previous();
        }
        $re_ap_idx = $this->input->get("re_ap_idx");
        $state = $this->input->get("state");
        $result = $this->HiringModel->changeResumeStatus($re_ap_idx, $state);

        if ($result == true)
            location_previous();
    }

    /**
     * 채용공고 작성 페이지 (Page)
     * @METHOD GET
     * @MainURL hiring/broadcastWrite
     * @Params X
     */
    public function broadcastWrite() {
        // load View
        $this->load->view('hiring/broadcastWrite');
    }
    /**
     * 채용공고 작성
     * @METHOD POST
     * @MainURL hiring/recruitAdd
     * @Params co_idx, re_startDate, re_endDate, re_content
     */
    public function recruitAdd() {
        // Get Params - POST
        $co_idx = $this->session->me_idx; // 회사 아이디
        $re_startDate = null;
        $re_endDate = null;
        if (isset($_POST['re_startDate']) && $_POST['re_startDate'] != "")
            $re_startDate = $_POST['re_startDate']; // 구인공고 시작일

        if (isset($_POST['re_endDate']) && $_POST['re_endDate'] != "")
            $re_endDate = $_POST['re_endDate']; // 구인공고 종료일

        $re_content = $_POST['re_content']; // 구인공고 내용

        // insert 문 성공 여부
        $return = $this->RecruitModel->insertRecruit($co_idx, $re_startDate, $re_endDate, $re_content);

        if ($return) {
            alert('채용 분야를 작성해 주세요');
            location_href('/hiring/detail?re_idx='.$this->db->insert_id());
        } else {
            alert('채용 공고 작성 실패');
            location_href('/hiring/hiringList');
        }
    }

    /**
     * 채용공고 분야 추가
     * @METHOD POST
     * @MainURL hiring/fieldAdd
     * @Params re_idx, re_fi_explain, fi_s_idx, re_fi_personal
     */
    public function fieldAdd() {
        // Get Params - POST
        $re_idx = $_POST['re_idx'];
        $re_fi_explain = $_POST['re_fi_explain'];
        $fi_s_idx = $_POST['fi_s_idx'];
        $re_fi_personal = $_POST['re_fi_personal'];

        $return = $this->RecruitModel->addField($re_idx, $re_fi_explain, $fi_s_idx, $re_fi_personal);

        if ($return) {
            alert('분야 추가 성공');
            location_href("/hiring/detail?re_idx=".$re_idx);
        } else {
            alert('분야 추가 실패');
        }
    }

    /**
     * 구인공고 리스트
     * @METHOD GET
     * @MainURL hiring/hiringList
     * @Params co_idx
     */
    public function hiringList() {
        // Get Params - POST
        $keyword = null;
        $type = null;
        $co_idx = null;
        if (isset($_GET['type']) && ($_GET['type'] == "re_content" || $_GET['type'] == "me_c_name")) {
            $keyword = $_GET['keyword'];
            $type = $_GET['type'];
        }
        if (isset($_GET['co_idx'])) {
            $co_idx = $_GET['co_idx']; // 회사 번호
            // 특정 회사에 대한 구인공고들
            $return = $this->RecruitModel->listRecruit($co_idx, $keyword, $type);
        } else {
            // 모든 회사에 대한 구인 공고들
            $return = $this->RecruitModel->allRecruit($keyword, $type);
        }
        $data = array(
            "hiringList" => $return,
            "keyword" => $keyword,
            "co_idx" => $co_idx,
            "type" => $type,
            "mode" => "all"
        );
        // load View
        $this->load->view('hiring/hiringList', $data);
    }

    /**
     * 팔로우 한 구인공고 리스트
     * @METHOD GET
     * @MainURL hiring/followList
     * @Params X
     */
    public function followList() {
        $me_n_idx = $this->session->me_idx;

        $return = $this->RecruitModel->followRecruit($me_n_idx);
        if (count($return) == 0)
            $return = array();

        $data = array(
            "hiringList" => $return,
            "keyword" => null,
            "co_idx" => null,
            "type" => null,
            "mode" => "follow"
        );

        $this->load->view("hiring/hiringList", $data);
    }

    /**
     * 구인공고 상세보기
     * @METHOD GET
     * @MainURL hiring/detail
     * @Params re_idx
     */
    public function detail() {
        // Get Params - GET
        $re_idx = $_GET['re_idx']; // 구인공고 아이디

        // Select 문 내용들 (list)
        $details = $this->RecruitModel->detailRecruit($re_idx);
        $fields = $this->RecruitModel->detailField($re_idx);

        $lfields = $this->RegisterModel->getRfield($re_idx);
        $sfields = $this->RegisterModel->getSField(array('rfield' => 1));

        $return = array(
            "details" => $details[0],
            "fields" => $fields,
            "lfields" => $lfields,
            "sfields" => $sfields
        );

        // load View
        $this->load->view('hiring/detail', $return);
    }

    /**
     * 채용 맵
     * @METHOD GET
     * @MainURL hiring/map
     * @Params null
     */
    public function map() {
        $data['me_idx'] = $this->session->me_idx;
        $this->config->load('token', true);

        $data['follow'] = $this->HiringModel->getFollowCompany($data);
        $this->load->view('hiring/map', $data);
    }

    /**
     * 지원한 회사 결과
     * @METHOD GET
     * @MainURL hiring/appliedList
     * @Params null
     */
    public function appliedList() {
        if ($this->session->me_type == "me_c_") {
            alert("잘못된 요청입니다.");
            location_previous();
            return;
        }
        $me_n_idx = $this->session->me_idx;

        $result = $this->RecruitModel->myRecruits($me_n_idx);
        $result = array(
            "recruits" => $result
        );
        $this->load->view('hiring/appliedList', $result);
    }
    
}