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

    public function index(){
        location_href(site_url('/member/login'));
    }

    public function login(){
        $me_idx = $this->session->me_idx;

        if($me_idx != null){
            location_href(site_url("/hiring/list"));
        }else{
            $this->load->view('layout/header');
            $this->load->view('Member/login');
            $this->load->view('layout/footer');
        }
    }

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
        location_href(site_url("/hiring/list"));
    }

    public function logout(){
        $this->session->sess_destroy();
        alert('로그아웃 되었습니다.', site_url('/member/login'));
    }

    public function registerNormal(){
        $rfield = $this->RegisterModel->getRField();
        $this->load->view('Member/registerNormal', $rfield);
    }

    public function registerCompany(){
        $rfield = $this->RegisterModel->getRField();
        $this->load->view('Member/registerCompany', $rfield);
    }

    public function getSmallField(){
        $data['rfield'] = $this->input->post('rfield');
        $sfield = $this->RegisterModel->getSField($data);

        foreach($sfield as $row){
            $array[] = array(
                "fi_s_idx" => $row->fi_s_idx,
                "fi_s_name" => $row->fi_s_name);
        }

        echo json_encode($array);
    }

    public function idCheck(){
        $data['me_id'] = $this->input->post('me_id');

        $result = $this->RegisterModel->idCheck($data);

        echo $result;
    }

    //회원가입
    public function register(){
        $config['upload_path'] = './uploads/profile/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['file_name'] = uniqid();
        $this->load->library('upload', $config);

        $data['me_table'] = $this->input->post('me_table');
        $data['me_name'] = $this->input->post('me_name');
        $data['me_id'] = $this->input->post('me_id');
        $data['me_password'] = $this->input->post('me_password');
        $data['me_email'] = $this->input->post('me_email');
        $data['me_phone'] = $this->input->post('me_phone');

        $data['me_profile'];
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
            location_href(site_url('/member/login'));
        }else{
            alert("회원가입에 실패했습니다. 다시 시도해주세요");
            location_href(site_url('/member/login'));
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

        if($result) {
            if ($result->me_n_id != null){
                $id = $result->me_n_id;
            } else {
                $id = $result->me_c_id;
            }

            $this->load->view('Member/findId', $id);
        } else {
            alert("아이디가 존재하지 않습니다.");
            location_href(site_url('/member/findId'));
        }
    }

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

            $this->load->view('Member/findPassword', $password);
        } else {
            alert("답변이 일치하지 않거나 존재하지 않는 아이디입니다.");
            location_href(site_url('/member/findPassword'));
        }
    }

    public function profileNormal(){
        $data['me_id'] = $this->session->me_id;
        $data['me_password'] = $this->session->me_password;
        $data['me_table'] = $this->session->me_table;
        $data['me_type'] = $this->session->me_type;
        $row = $this->AuthModel->getCust($data);

        $data['me_n_idx'] = $row->me_n_idx;
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

        $this->load->view('Member/profileNormal', $user_data, $career);
    }

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

    public function rating(){
        $data['me_c_idx'] = $this->input->post('me_c_idx');

        
    }
}