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
        $this->load->model('Auth_Model');
        $this->load->model('Register_Model');
    }

    public function index(){
        location_href('/member/login');
    }

    public function login(){
        $m_id = $this->session->m_id;

        if($m_id != null){
            location_href("/hiring/list");
        }else{
            $this->load->view('member/login');
        }
    }

    public function auth_user()
    {
        $data['me_id'] = $this->input->post('me_id');
        $data['me_pw'] = $this->input->post('me_pw');

        $auth = $this->Auth_Model->auth_user($data);
        $data['me_table'] = $auth;
        $type = null;

        if ($auth == false){
            alert("아이디 또는 비밀번호가 맞지 않습니다.");
            location_href("/member/login");
        } else if ($auth == "MEMBER_NORMAL_TB") {
            $type = "me_n_";
        } else if ($auth == "MEMBER_COMPANY_TB") {
            $type = "me_c_";
        }

        $row = $this->Auth_Model->get_cust($data);
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
        location_href("/hiring/list");
    }

    public function logout(){
        $this->session->sess_destroy();
        alert('로그아웃 되었습니다.', site_url('member/login'));
    }

    public function register_normal(){
        $this->load->view('member/register_normal');
    }

    public function register_company(){
        $this->load->view('member/register_company');
    }
    
    //회원가입
    public function register(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
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
        $data['me_profile'] = $this->upload->do_upload('me_profile');
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

        $result = $this->Register_Model->register_user($data);

        if($result){
            alert('회원가입에 성공하였습니다.');
            location_href('/member/login');
        }else{
            alert("회원가입에 실패했습니다. 다시 시도해주세요");
            location_href('/member/login');
        }
    }

    public function find_id(){
        $this->load->view('/member/find_id');
    }

    public function find_password(){
        $this->load->view('/member/find_password');
    }

    public function findId(){
        $data['me_email'] = $this->input->post('me_email');
        $data['me_phone'] = $this->input->post('me_phone');

        $result = $this->Auth_Model->findId($data);

        if($result){
            $this->load->view('member/find_id',$result);
        } else {
            alert("아이디가 존재하지 않습니다.");
            location_href('member/find_id');
        }
    }

    public function findPassword(){
        $data['me_id'] = $this->input->post('me_id');
        $data['me_answer'] = $this->input->post('me_answer');

        $result = $this->Auth_Model->findPassword($data);

        if($result){
            $this->load->view('member/find_password',$result);
        } else {
            alert("정답이 일치하지 않거나 존재하지 않는 아이디입니다.");
            location_href('member/find_password');
        }
    }
}