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
        $this->load->model('RegisterModel');
        $this->load->model('ProfileModel');
    }

    /**
     * 팀 목록 페이지 (Page)
     * @METHOD GET
     * @MainURL team/teamList
     * @Params X
     */
    public function teamList() {
        $data['me_n_idx'] = $this->session->me_idx;

        $result = $this->TeamModel->listTeam($data);

        $return = array(
          "teamList" => $result
        );
        $this->load->view('team/teamList', $return);
    }

    /**
     * 내 팀 목록 페이지
     * @METHOD GET
     * @MainURL team/myTeamList
     * @Param X
     */
    public function myTeamList() {
        if ($this->session->me_type != "me_n_") {
            alert("일반 사용자만 팀을 사용할 수 있습니다.");
            location_previous();
            return;
        }
        $me_n_idx = $this->session->me_idx;

        $result = $this->TeamModel->myTeam($me_n_idx);

        $return = array(
            "teamList" => $result
        );
        $this->load->view("team/myTeamList", $return);
    }

    public function teamWrite(){
        $data['rfield'] = $this->RegisterModel->getRField();
        $this->load->view('team/teamWrite', $data);
    }

    /**
     * 팀 생성
     * @METHOD POST
     * @MainURL team/createTeam
     * @Params te_name, te_info, fi_l_idx, te_isOpen
     */
    public function createTeam() {
        $me_n_idx = $_POST['me_n_idx'];
        $te_name = $_POST['te_name']; // 팀 이름
        $te_info = $_POST['te_info']; // 팀 정보
        $fi_l_idx = $_POST['fi_l_idx']; // 팀 분야 대분류
        $te_isOpen = $_POST['te_isOpen']; // 팀 공개 여부

        $return = $this->TeamModel->createTeam($te_name, $te_info , $fi_l_idx, $te_isOpen);

        if($return){
            $te_idx = $this->db->insert_id();
        }
        $fi_s_idx = $this->ProfileModel->mySField($me_n_idx);

        $result = $this->TeamModel->joinTeam($te_idx, $me_n_idx, $fi_s_idx);
        if ($result) {
            alert('팀 생성 성공!');
        } else {
            alert('팀 생성 실패');
        }

        location_href('/team/teamList');
    }

    /**
     * 팀 초대
     * @METHOD POST
     * @MainURL team/joinTeam
     * @Params te_idx, me_n_idx, fi_s_idx
     *
     * @Redirect : team/teamList
     */
    public function joinTeam() {
        $te_idx = $_POST['te_idx']; // 팀 인덱스
        $me_n_idx = $_POST['me_n_idx']; // 멤버 아이디
        $fi_s_idx = $_POST['fi_s_idx']; // 역할 분야 소분류
        
        $result = $this->TeamModel->joinTeam($te_idx, $me_n_idx, $fi_s_idx);
        if ($result) {
            alert('초대 성공!');
        } else {
            alert('초대 실패');
        }

        location_href('/team/invite?te_idx='.$te_idx);
    }

    public function inviteTeam(){
        $data['te_idx'] = $this->input->post('te_idx');
        $user['me_n_idx'] = $this->input->post('me_n_idx');
        $user['fi_s_idx'] = $this->input->post('fi_s_idx');
        if(count($data['me_n_idx']) != 1){
            foreach($user as $row){
                $this->TeamModel->joinTeam($data['te_idx'],$row['me_n_idx'],$row['fi_s_idx']);
            }
        }else{
            $this->TeamModel->joinTeam($data['te_idx'],$user['me_n_idx'][0],$user['fi_s_idx'][0]);
        }

        alert("팀 초대 성공!");
        location_href('/team/teamList');
    }

    /**
     * 팀 공고 작성
     * @METHOD GET
     * @MainURL team/invite
     * @Params null
     */

    public function invite() {
        $data['te_idx'] = $this->input->get('te_idx');
        $data['user'] = $this->TeamModel->getAllUser($data);
        $this->load->view('team/invite',$data);
    }

    public function searchUser(){
        $data['te_idx'] = $this->input->post('te_idx');
        $data['me_name'] = $this->input->post('me_n_name');
 
        $data['result'] = $this->TeamModel->searchUser($data);

        echo json_encode($data);
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

        location_href('/team/hiringTeam');
    }

    /**
     * 팀 게시물 목록 (Page)
     * @METHOD : GET
     * @MainURL : team/board
     * @Params : te_idx
     */
    public function board() {
        $te_idx = $_GET['te_idx']; // 팀 인덱스

        $this->session->set_userdata(array(
            "te_idx" => $te_idx
        ));

        $result = $this->TeamModel->listPost($te_idx);
        $data = [
            "te_idx" => $te_idx,
            "boards" => $result
        ];
        // 뷰 로딩
        $this->load->view('team/board', $data);
    }

    /**
     * 팀 게시물 보기
     * @METHOD GET
     * @MainURL team/board_view
     * @Params te_po_idx
     */

     public function boardView() {
         $te_po_idx = $_GET['te_po_idx'];

         $result = $this->TeamModel->getPost($te_po_idx);
         $data = [
             "result" => $result
         ];
         $this->load->view('team/boardView', $data);
     }

    /**
     * 팀 게시물 보기
     * @METHOD GET
     * @MainURL team/board_view
     * @Params te_po_idx
     */

    public function boardWrite() {
        $return = array(
            "te_idx" => $_GET['te_idx']
        );
        $this->load->view('team/boardWrite', $return);
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
        $te_idx = $this->session->te_idx;
        $me_n_idx = $this->session->me_idx;
        $te_po_title = $_POST['te_po_title'];
        $te_po_content = $_POST['te_po_content'];

        $result = $this->TeamModel->addPost($te_idx, $me_n_idx, $te_po_title, $te_po_content);

        if ($result) {
            alert('게시 성공!');
        } else {
            alert('게시 실패');
        }

        // Redirect
        location_href('/team/board?te_idx='.$te_idx);
    }

}