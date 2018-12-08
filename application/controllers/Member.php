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
    }

    public function index(){
        location_href(site_url('Member/login'));
    }

    public function login(){
        $m_id = $this->session->m_id;

        if($m_id != null){
            location_href(site_url("Hiring/list"));
        }else{
            $this->load->view('Member/login');
        }
    }

    public function authUser()
    {
        $data['me_id'] = $this->input->post('me_id');
        $data['me_pw'] = $this->input->post('me_pw');

        $auth = $this->AuthModel->authUser($data);
        $data['me_table'] = $auth;
        $type = null;

        if ($auth == false){
            alert("아이디 또는 비밀번호가 맞지 않습니다.");
            location_href(site_url("Member/login"));
        } else if ($auth == "MEMBER_NORMAL_TB") {
            $type = "me_n_";
        } else if ($auth == "MEMBER_COMPANY_TB") {
            $type = "me_c_";
        }

        $row = $this->AuthModel->getCust($data);
        $user_data = array(
            'me_idx' => $row[$type . 'idx'],
            'me_name' => $row[$type . 'name'],
            'me_profile' => $row[$type . 'profile'],
            'me_id' => $row[$type . 'id'],
            'me_password' => $row[$type . 'password'],
            'me_table' => $data['table'],
            'me_type' => $type
        );

        $this->session->set_userdata($user_data);
        location_href(site_url("/hiring/list"));
    }

    public function logout(){
        $this->session->sess_destroy();
        alert('로그아웃 되었습니다.', site_url('member/login'));
    }

    public function registerNormal(){
        $this->load->view('Member/registerNormal');
    }

    public function registerCompany(){
        $this->load->view('Member/registerCompany');
    }
    
    //회원가입
    public function register(){
        $config['upload_path'] = './uploads/profile/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);

        $data['me_table'] = $this->input->post('me_table');
        $data['me_name'] = $this->input->post('me_name');
        $data['me_id'] = $this->input->post('me_id');
        $data['me_password'] = $this->input->post('me_password');
        $data['me_email'] = $this->input->post('me_email');
        $data['me_phone'] = $this->input->post('me_phone');

        if($this->upload->do_upload('me_profile')){

            $data['me_profile'] = $this->upload->data('full_path');
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

        if($result){
            alert('회원가입에 성공하였습니다.');
            location_href(site_url('Member/login'));
        }else{
            alert("회원가입에 실패했습니다. 다시 시도해주세요");
            location_href(site_url('Member/login'));
        }
    }

    public function findId(){
        $this->load->view('Member/findId');
    }

    public function findPassword(){
        $this->load->view('Member/findPassword');
    }

    public function findUserId(){
        $data['me_email'] = $this->input->post('me_email');
        $data['me_phone'] = $this->input->post('me_phone');

        $result = $this->AuthModel->findId($data);

        if($result){
            $this->load->view('Member/findId',$result);
        } else {
            alert("아이디가 존재하지 않습니다.");
            location_href(site_url('Member/findId'));
        }
    }

    public function findUserPassword(){
        $data['me_id'] = $this->input->post('me_id');
        $data['me_answer'] = $this->input->post('me_answer');

        $result = $this->AuthModel->findPassword($data);

        if($result){
            $this->load->view('Member/findPassword',$result);
        } else {
            alert("답변이 일치하지 않거나 존재하지 않는 아이디입니다.");
            location_href(site_url('Member/findPassword'));
        }
    }
}