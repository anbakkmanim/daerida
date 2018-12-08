<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends CI_Controller
{

    /**
     * Hiring 생성자.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HiringModel');
        $this->load->model('RecruitModel');
    }

    public function resume_send()
    {
        $data['re_idx'] = $_POST['re_idx'];
        $data['me_n_id'] = $_POST['me_n_id'];
        $data['re_ap_info'] = $_POST['re_ap_info'];
        $data['re_ap_date'] = $_POST['re_ap_date'];

        $this->Hiring_m->send_resume($data);
        $this->load->view('hiring/list');
    }

    public function resume_list()
    {
        $return = $this->Hiring_m->read_resume();
        $this->load->view('hiring/resume_list', $return);
    }

    /**
     * 채용공고 작성 페이지 (Only Get)
     * METHOD : GET
     * Params : X
     */
    public function broadcastWrite() {
        // load View
        $this->load->view('hiring/broadcastWrite');
    }
    /**
     * 채용공고 작성
     * METHOD : POST
     * Params : co_idx, re_startDate, re_endDate, re_content
     */
    public function recruitAdd() {
        // Get Params - POST
        $co_idx = $_POST['co_idx'];
        $re_startDate = $_POST['re_startDate'];
        $re_endDate = $_POST['re_endDate'];
        $re_content = $_POST['re_content'];

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
     * METHOD : POST
     * Params: co_idx
     */
    public function hiringList() {
        // Get Params - POST
        $co_idx = $_POST['co_idx'];

        // select 문 내용들 (list)
        $return = $this->RecruitModel->listRecruit($co_idx);

        // load View
        $this->load->view('hiring/hiringList', $return);
    }

    /**
     * 구인공고 상세보기
     * METHOD : POST
     * Params : re_idx
     */
    public function detail() {
        // Get Params - POST
        $re_idx = $_POST['re_idx'];

        // Select 문 내용들 (list)
        $return = $this->RecruitModel->detailRecruit($re_idx);

        // load View
        $this->load->view('hiring/detail', $return);
    }
}