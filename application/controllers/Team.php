<?php

class Team extends CI_Controller
{
    /**
     * Team constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TeamModel');
    }

    /**
     * 팀 목록 페이지 (Page)
     * @METHOD GET
     * @MainURL team/teamList
     * @Params X
     */
    public function teamList() {
        $this->load->view('team/list');
    }

    /**
     * 팀 생성
     * @METHOD POST
     * @MainURL team/createTeam
     * @Params te_name, te_info, fi_l_idx, te_isOpen
     */
    public function createTeam() {
        $te_name = $_POST['te_name']; // 팀 이름
        $te_info = $_POST['te_info']; // 팀 정보
        $fi_l_idx = $_POST['fi_l_idx']; // 팀 분야 소분류
        $te_isOpen = $_POST['te_isOpen']; // 팀 공개 여부

        $result = $this->TeamModel->createTeam($te_name, $te_info , $fi_l_idx, $te_isOpen);
        if ($result) {
            alert('팀 생성 성공!');
        } else {
            alert('팀 생성 실패');
        }

        location_href(site_url('team/teamList'));
    }

    /**
     * 팀 초대
     * @METHOD POST
     * @MainURL team/joinTeam
     * @Params te_idx, me_n_idx, fi_s_idx
     *
     * @Redirect : team/teamList
     */
    public function invite() {

        $te_idx = $_POST['te_idx']; // 팀 인덱스
        $me_n_idx = $_POST['me_n_idx']; // 멤버 아이디
        $fi_s_idx = $_POST['fi_s_idx']; // 역할 분야 소분류
        
        $result = $this->TeamModel->joinTeam($te_idx, $me_n_idx, $fi_s_idx);
        if ($result) {
            alert('초대 성공!');
        } else {
            alert('초대 실패');
        }

        location_href(site_url('team/teamList'));
    }

    /**
     * 팀 가입 신청
     * @METHOD : POST
     * @MainURL : team/hiringTeam
     * @Params : te_idx, me_n_idx, te_a_content
     */
    public function hiringTeam() {
        $te_idx = $_POST['te_idx']; // 팀 인덱스
        $me_n_idx = $_POST['me_n_idx']; // 멤버 아이디
        $te_a_content = $_POST['te_a_content']; // 자기 소개

        $result = $this->TeamModel->hiringTeam($te_idx, $me_n_idx, $te_a_content);
        if ($result) {
            alert('팀 가입 신청 성공!');
        } else {
            alert('팀 가입 신청 실패');
        }

        location_href(site_url('team/hiringTeam'));
    }

    /**
     * 팀 게시물 목록 (Page)
     * @METHOD : GET
     * @MainURL : team/board
     * @Params : te_idx
     */
    public function board() {
        $te_idx = $_POST['te_idx']; // 팀 인덱스

        $result = $this->TeamModel->listPost($te_idx);

        // 뷰 로딩
        $this->load->view('team/board', $result);
    }

    /**
     * 팀 게시물  추가
     * @METHOD POST
     * @MainURL team/addPost
     * @Params te_idx, me_n_idx, te_po_title, te_po_content
     *
     * @Redirect team/board
     */
    public function addPost() {
        $te_idx = $_POST['te_idx'];
        $me_n_idx = $_POST['me_n_idx'];
        $te_po_title = $_POST['te_po_title'];
        $te_po_content = $_POST['te_po_content'];

        $result = $this->TeamModel->addPost($te_idx, $me_n_idx, $te_po_title, $te_po_content);

        if ($result) {
            alert('게시 성공!');
        } else {
            alert('게시 실패');
        }

        // Redirect
        location_href(site_url('team/board'));
    }

}