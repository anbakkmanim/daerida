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
        $this->load->view('hiring/resumeSend', $result[0]);
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
        location_href(site_url("/"));
    }

    /**
     * 이력서 리스트
     * @METHOD GET
     * @MainURL hiring/resumeList
     * @Params X
     */
    public function resumeList()
    {
        $return = $this->HiringModel->read_resume();
        $this->load->view('hiring/resumeList', $return);
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
        $co_idx = $_POST['co_idx']; // 회사 아이디
        if (isset($_POST['re_startDate'])) {
            $re_startDate = $_POST['re_startDate']; // 구인공고 시작일
        } else {
            $re_startDate = null;
        }
        if (isset($_POST['re_endDate']))
            $re_endDate = $_POST['re_endDate']; // 구인공고 종료일
        else
            $re_endDate = null;
        $re_content = $_POST['re_content']; // 구인공고 내용

        // insert 문 성공 여부
        $return = $this->RecruitModel->insertRecruit($co_idx, $re_startDate, $re_endDate, $re_content);

        if ($return) {
            alert('채용 공고 작성을 성공하였습니다');
            location_href(site_url('hiring/hiringList'));
        } else {
            alert('채용 공고 작성 실패');
            location_href(site_url('hiring/hiringList'));
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
        if (isset($_GET['co_idx'])) {
            $co_idx = $_GET['co_idx']; // 회사 번호
            // 특정 회사에 대한 구인공고들
            $return = $this->RecruitModel->listRecruit($co_idx);
        } else {
            // 모든 회사에 대한 구인 공고들
            $return = $this->RecruitModel->allRecruit();
        }
        $data = array(
            "hiringList" => $return
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
        if ($return[0]['re_idx'] == null)
            $return = array();

        $data = array(
            "hiringList" => $return
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

        $return = array(
            "details" => $details[0],
            "fields" => $fields
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
        $data = [
            'value' => '대구소프트웨어고등학교'
        ];
        $this->load->view('hiring/map', $data);
    }
    
}