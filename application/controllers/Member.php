<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{
    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('RegisterModel');
        $this->load->model('ProfileModel');
    }

    // url 이 /member 까지만 적었을시 /member/login 으로 리다이렉트
    public function index(){
        location_href(site_url('/member/login'));
    }

    // 세션에 자신의 인덱스가 존재하면 메인페이지 아니면 로그인 페이지로 리다이렉트
    public function login(){
        $me_idx = $this->session->me_idx;

        if($me_idx != null){
            location_href(site_url("/hiring/hiringList"));
        }else{
            $this->load->view('member/login');
        }
    }

    /**
     * 로그인
     * @METHOD POST
     * @MainURL /member/authUser
     * @REQUEST me_id, me_password
     */
    public function authUser()
    {
        $data['me_id'] = $this->input->post('me_id');
        $data['me_password'] = $this->input->post('me_password');

        $auth = $this->AuthModel->authUser($data);
        $data['me_table'] = $auth;
        $type = null;

        if ($auth == false){
            alert("아이디 또는 비밀번호가 맞지 않습니다.");
            location_href(site_url("/member/login"));
            return;
        } else if ($auth == "MEMBER_NORMAL_TB") {
            $type = "me_n_";
        } else if ($auth == "MEMBER_COMPANY_TB") {
            $type = "me_c_";
        }
        $data['me_type'] = $type;

        $row = $this->AuthModel->getCust($data);

        if($data['me_table'] == "MEMBER_NORMAL_TB") {
            $user_data = array(
                'me_idx' => $row->me_n_idx,
                'me_name' => $row->me_n_name,
                'me_profile' => $row->me_n_profile,
                'me_id' => $row->me_n_id,
                'me_password' => $row->me_n_password,
                'me_table' => $data['me_table'],
                'me_type' => $type
            );
        } else {
            $user_data = array(
                'me_idx' => $row->me_c_idx,
                'me_name' => $row->me_c_name,
                'me_profile' => $row->me_c_profile,
                'me_id' => $row->me_c_id,
                'me_password' => $row->me_c_password,
                'me_table' => $data['me_table'],
                'me_type' => $type
            );
        }

        $this->session->set_userdata($user_data);
        location_href(site_url("/hiring/hiringList"));
    }

    // 로그아웃
    public function logout(){
        $this->session->sess_destroy();
        alert('로그아웃 되었습니다.', site_url('/member/login'));
    }

    // 일반회원 회원가입 페이지
    public function registerNormal(){
        $data['rfield'] = $this->RegisterModel->getRField();
        $data['sfield'] = $this->RegisterModel->getSField(array('rfield' => '1'));
        $this->load->view('Member/registerNormal', $data);
    }

    // 기업회원 회원가입 페이지
    public function registerCompany(){
        $data['rfield'] = $this->RegisterModel->getRField();
        $data['sfield'] = $this->RegisterModel->getSField($param = array('rfield' => '1'));
        $this->load->view('Member/registerCompany', $data);
    }

    // 소분류 받아오기
    public function getSmallField(){
        $data['rfield'] = $this->input->get('rfield');
        $sfield = $this->RegisterModel->getSField($data);
        foreach($sfield as $row){
            $array[] = array(
                "fi_s_idx" => $row['fi_s_idx'],
                "fi_s_name" => $row['fi_s_name']);
        }

        echo json_encode($array);
    }


    /**
     * 아이디 중복체크
     * @METHOD GET
     * @MainURL /main/idCheck
     * @REQUEST me_id
     */
    public function idCheck(){
        $data['me_id'] = $this->input->get('me_id');

        $result = $this->RegisterModel->idCheck($data);

        echo $result;
    }

    /**
     * 회원가입
     * @METHOD POST
     * @MainURL /main/register
     * @REQUEST me_table, me_name, me_id, me_password, me_email, me_phone, me_profile, me_answer, me_rfield, me_sfield, me_region, me_salary, me_military, me_info
     * 일반 회원일시 me_n_age, me_n_gender, me_n_isOpen
     * 기업 회원일시 me_c_manager, me_c_benefit, me_c_category
     * 몇몇 리퀘스트는 없어도 됨
     */
    public function register(){
        $config['upload_path'] = './uploads/profile/';
        $config['allowed_types'] = 'jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        $data['me_table'] = $this->input->post('me_table');

        if($data['me_table'] == "MEMBER_NORMAL_TB"){
            $data['me_type'] = "me_n_";
        } else {
            $data['me_type'] = "me_c_";
        }
        $data['me_name'] = $this->input->post('me_name');
        $data['me_id'] = $this->input->post('me_id');
        $data['me_password'] = $this->input->post('me_password');
        $data['me_email'] = $this->input->post('me_email');
        $data['me_phone'] = $this->input->post('me_phone');

        $data['me_profile'] = null;
        if($this->upload->do_upload('me_profile')){
            $data['me_profile'] = $this->upload->data('file_name');
        }

        $data['me_answer'] = $this->input->post('me_answer');
        $data['me_rfield'] = $this->input->post('me_rfield');
        $data['me_sfield'] = $this->input->post('me_sfield');
        $data['me_region'] = $this->input->post('me_region');
        $data['me_salary'] = $this->input->post('me_salary');
        $data['me_military'] = $this->input->post('me_military');
        $data['me_info'] = $this->input->post('me_info');

        if($data['me_table'] == "MEMBER_NORMAL_TB") {
            $data['me_n_age'] = $this->input->post('me_n_age');
            $data['me_n_gender'] = $this->input->post('me_n_gender');
            $data['me_n_isOpen'] = $this->input->post('me_n_isOpen');
        } else if($data['me_table'] == "MEMBER_COMPANY_TB") {
            $data['me_c_manager'] = $this->input->post('me_c_manager');
            $data['me_c_benefit'] = $this->input->post('me_c_benefit');
            $data['me_c_category'] = $this->input->post('me_c_category');
        }

        $result = $this->RegisterModel->registerUser($data);
        
        $userInfo = $this->AuthModel->getCust($data);
        if($data['me_table'] == "MEMBER_NORMAL_TB"){
            $data['me_idx'] = $userInfo->me_n_idx;
        } else {
            $data['me_idx'] = $userInfo->me_c_idx;
        }

        $result2 = $this->RegisterModel->addField($data);

        if($result && $result2){
            alert('회원가입에 성공하였습니다.');
            location_href(site_url('/member/login'));
        }else{
            alert("회원가입에 실패했습니다. 다시 시도해주세요");
            location_href(site_url('/member/login'));
        }
    }


    // 아이디 찾기
    public function findId(){
        $this->load->view('Member/findId');
    }

    // 패스워드 찾기
    public function findPassword(){
        $this->load->view('Member/findPassword');
    }


    /**
     * 아이디 찾기
     * @METHOD POST
     * @MainURL /main/findUserId
     * @REQUEST me_email, me_phone
     * @RESPONSE id
     */
    public function findUserId(){
        $data['me_email'] = $this->input->post('me_email');
        $data['me_phone'] = $this->input->post('me_phone');

        $result = $this->AuthModel->findId($data);

        if($result) {
            if ($result->me_n_id != null){
                $id = $result->me_n_id;
            } else {
                $id = $result->me_c_id;
            }
            $id = array('id' => $id);
            echo json_encode($id);
        } else {
            $id = array('id' => 'null');
            echo json_encodd($id);
        }
    }

    /**
     * 비밀번호 찾기
     * @METHOD POST
     * @MainURL /main/findUserPassword
     * @REQUEST me_id, me_password
     * @RESPONSE $password
     */
    public function findUserPassword(){
        $data['me_id'] = $this->input->post('me_id');
        $data['me_answer'] = $this->input->post('me_answer');

        $result = $this->AuthModel->findPassword($data);

        if($result){
            if ($result->me_n_password != null){
                $password = $result->me_n_password;
            } else {
                $password = $result->me_c_password;
            }

            $password = array('password' => $password);
            echo json_encode($password);
        } else {
            $password = array('password' => 'null');
            echo json_encode($password);
        }
    }

    /**
     * 일반 프로필 보기
     * @METHOD get
     * @MainURL /main/profileNormal
     * @REQUEST X
     * @RESPONSE (Array)career, name, email, phone, sido, isMillitary, age, hopeSalary, profile, info, isOpen
     */
    public function profileNormal(){
        $data['me_idx'] = $this->session->me_idx;
        $data['me_id'] = $this->session->me_id;
        $data['me_password'] = $this->session->me_password;
        $data['me_table'] = $this->session->me_table;
        $data['me_type'] = $this->session->me_type;
        $row = $this->AuthModel->getCustAfterLogin($data);
        $row2 = $this->ProfileModel->getCareer($data);

        foreach ($row2 as $result){
            $career[] = array(
                'career' => $result->ca_career,
                'info' => $result->ca_info,
                'type' => $result->ca_type,
                'image' => $result->ca_image,
            );
        }

        $user_data = array(
            'name' => $row->me_n_name,
            'email' => $row->me_n_email,
            'phone' => $row->me_n_phone,
            'sido' => $row->me_n_sido,
            'isMillitary' => $row->me_n_isMillitary,
            'age' => $row->me_n_age,
            'hopeSalary' => $row->me_n_hopeSalary,
            'profile' => $row->me_n_profile,
            'info' => $row->me_n_info,
            'isOpen' => $row->me_n_isOpen,
        );

        if(!isset($career)){
            $this->load->view('Member/profileNormal', $user_data);
        } else {
            $this->load->view('Member/profileNormal', $user_data, $career);
        }
    }

    /**
     * 일반 프로필 수정
     * @METHOD POST
     * @MainURL /main/setProfileNormal
     * @REQUEST me_n_idx, me_n_email, me_n_email, me_n_phone, me_n_sido, me_n_isMillitary, me_n_age, me_n_hopeSalary, me_n_profile, me_n_info, me_n_isOpen
     * @RESPONSE X
     */
    public function setProfileNormal(){
        $data['me_n_idx'] = $this->session->me_idx;
        $data['me_n_name'] = $this->input->post('me_n_name');
        $data['me_n_email'] = $this->input->post('me_n_email');
        $data['me_n_phone'] = $this->input->post('me_n_phone');
        $data['me_n_sido'] = $this->input->post('me_n_sido');
        $data['me_n_isMillitary'] = $this->input->post('me_n_isMillitary');
        $data['me_n_age'] = $this->input->post('me_n_age');
        $data['me_n_hopeSalary'] = $this->input->post('me_n_hopeSalary');
        $data['me_n_profile'] = $this->input->post('me_n_profile');
        $data['me_n_info'] = $this->input->post('me_n_info');
        $data['me_n_isOpen'] = $this->input->post('me_n_isOpen');

        $result = $this->ProfileModel->setProfileNormal($data);
        if($result){
            alert('정보 수정을 완료했습니다.');
            location_href('Member/ProfileNormal');
        }else{
            alert('정보를 수정하지 못했습니다');
            location_href('Member/ProfileNormal');
        }
    }

    /**
     * 기업 프로필 보기
     * @METHOD POST
     * @MainURL /main/profileCompany
     * @REQUEST me_c_idx
     * @RESPONSE manager, name, email, phone, category, profile, salary, sido, isMillitary, benefit, isFollowed
     */
    public function profileCompany(){
        $data['me_c_idx'] = $this->input->post('me_c_idx');

        $row = $this->ProfileModel->getComData($data);
        $row2 = $this->ProfileModel->getFollowData($data);
        $com_data = array(
            'manager' => $row->me_c_manager,
            'name' => $row->me_c_name,
            'email' => $row->me_c_email,
            'phone' => $row->me_c_phone,
            'category' => $row->me_c_category,
            'profile' => $row->me_c_profile,
            'salary' => $row->me_c_salary,
            'sido' => $row->me_c_sido,
            'isMillitary' => $row->me_c_isMillitary,
            'benefit' => $row->me_c_benefit,
            'isFollowed' => $row2,
        );

        $this->load->view('Member/profileCompany', $com_data);
    }


    /**
     * 기업 프로필 수정
     * @METHOD POST
     * @MainURL /main/setProfileCompany
     * @REQUEST me_c_idx, me_c_manager, me_c_name, me_c_email, me_c_phone, me_c_category, me_c_profile, me_c_salary, me_c_sido, me_c_isMillitary, me_c_benefit
     * @RESPONSE X
     */
    public function setProfileCompany(){
        $data['me_c_idx'] = $this->session->me_idx;
        $data['me_c_manager'] = $this->input->post('me_c_manager');
        $data['me_c_name'] = $this->input->post('me_c_name');
        $data['me_c_email'] = $this->input->post('me_c_email');
        $data['me_c_phone'] = $this->input->post('me_c_phone');
        $data['me_c_category'] = $this->input->post('me_c_category');
        $data['me_c_profile'] = $this->input->post('me_c_profile');
        $data['me_c_salary'] = $this->input->post('me_c_salary');
        $data['me_c_sido'] = $this->input->post('me_c_sido');
        $data['me_c_isMillitary'] = $this->input->post('me_c_isMillitary');
        $data['me_c_benefit'] = $this->input->post('me_c_benefit');

        $result = $this->ProfileModel->setProfileCompany($data);

        if($result){
            alert('정보 수정을 완료했습니다.');
            location_href('Member/ProfileCompany');
        }else{
            alert('정보를 수정하지 못했습니다');
            location_href('Member/ProfileCompany');
        }
    }

    /**
     * 포트폴리오 보기
     * @METHOD POST
     * @MainURL /main/portfolio
     * @REQUEST me_n_idx
     * @RESPONSE (Array)Career
     */
    public function portfolio(){
        $data['me_n_idx'] = $this->input->post('me_n_idx');

        $row = $this->ProfileModel->getCareer($data);

        foreach ($row as $result){
            $career[] = array(
                'career' => $result->ca_career,
                'info' => $result->ca_info,
                'type' => $result->ca_type,
                'file' => $result->ca_image,
            );
        }

        $this->load->view('Member/portfolio', $career);
    }
    /**
     * 포트폴리오 추가
     * @METHOD POST
     * @MainURL /main/addPortfolio
     * @REQUEST me_n_idx
     * @RESPONSE X
     */
    public function addPortfolio(){
        $data['me_n_idx'] = $this->input->post('me_n_idx');
        $result = $this->ProfileModel->addCareer($data);
        if($result){
            alert('포트폴리오 추가를 완료했습니다.');
            location_href('Member/protfolio');
        }else{
            alert('포트폴리오를 추가하지 못했습니다');
            location_href('Member/protfolio');
        }
    }

    /**
     * 포트폴리오 삭제
     * @METHOD POST
     * @MainURL /main/delPortfolio
     * @REQUEST me_n_idx, ca_idx
     * @RESPONSE X
     */
    public function delPortfolio(){
        $data['me_n_idx'] = $this->input->post('me_n_idx');
        $data['ca_idx'] = $this->input->post('ca_idx');
        $result = $this->ProfileModel->delCareer($data);
        if($result){
            alert('포트폴리오 삭제를 완료했습니다.');
            location_href('Member/protfolio');
        }else{
            alert('포트폴리오를 삭제하지 못했습니다');
            location_href('Member/protfolio');
        }
    }
}
