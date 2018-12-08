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
     */
    public function teamList() {
        $this->load->view('team/list');
    }

    /**
     * 팀 생성
     * METHOD : POST
     * Params : 
     */
    public function createTeam() {
        $te_name = $_POST['te_name'];
        $te_info = $_POST['te_info'];
        $fi_l_idx = $_POST['fi_l_idx'];
        $te_isOpen = $_POST['te_isOpen'];

        $result = $this->TeamModel->createTeam($te_name, $te_info , $fi_l_idx, $te_isOpen);
        if ($result) {
            alert('팀 생성 성공!');
        } else {
            alert('팀 생성 실패');
        }
        location_href(site_url('team/teamList'));
    }


}