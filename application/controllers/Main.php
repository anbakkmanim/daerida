<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MemberModel');
        $this->load->model('ProFileModel');
    }

    /**
     * 메인화면
     */
    public function index()
    {
        location_href(site_url('main/login'));
    }

    /**
     * 로그인폼
     */
    public function login()
    {
        $custEmail = $this->session->custEmail;
//        $userSnsId = $this->session->userSnsId;
//        alert($userSnsId);

        if ($custEmail != null):
            location_href(site_url('JobSearch/main'));
            return;
        endif;

        $this->load->view('layout/header');
        $this->load->view('main/register');
        $this->load->view('layout/footer');
    }

    /**
     * 사용자 인증
     */
    public function auth_user()
    {
        $param['custEmail'] = $this->input->post('custEmail');
        $param['custPw'] = $this->input->post('custPw');

            $result = $this->Member_m->is_auth($param);

            $home_url = 'jobSearch/main';

            // 로그인 성공 시 세션 생성
            if ($result) {
                $is_auth = true;

            if ($this->session->custEmail == null) {

                $row = $this->Member_m->get_cust($param);
                $jobtype = $this->ProFile_Model->profile_jobtype($row->idx);

                // 세션에 회원 정보 등록
                $user_data = array(
                    'idx'=> $row->idx,
                    'jointype' => $row->joinType,
                    'custName' => $row->custName,
                    'custTel' => $row->custTel,
                    'custAddr' => $row->custAddr,
                    'custEmail' => $row->custEmail,
                    'joinDate' => $row->joinDate,
                    'custGender' => $row->custGender,
                    'custbirth' => $row->custbirth,
                    'userImage' => $row->userImage,
                    'userSnsId' => $row->userSnsId,
                    'homepage' => $row->homepage,
                    'custContactEmail' => $row->custContactEmail,
                    'jobSearchYN' => $row->jobSearchYN,
                    'backgroundImage' => $row->backgroundImage,
                    'jobType' => $jobtype['0']['userjobType']
                );
                $this->session->set_userdata($user_data);
            }
        } else {
            $is_auth = false;
        }

        // 인증 실패 시 로그인화면으로 이동
        if ($is_auth) {
            location_href(site_url($home_url));
            return;
        } else {
            alert('아이디 또는 비밀번호가 맞지 않습니다.', site_url('main/login'));
        }
    }

    /**
     * 로그아웃
     */
    public function logout()
    {
        $this->session->sess_destroy();
        alert('로그아웃 되었습니다.', site_url('intro/main'));
    }

    /**
     * 사용자 등록
     */
    public function register()
    {

        $this->load->model('Member_model');
        $param['custName'] = $this->input->post('custName');
        $param['custEmail'] = $this->input->post('custEmail');
        $param['custPw'] = $this->input->post('custPw');
        $param['custGender'] = $this->input->post('custGender');
        $param['custTel'] = $this->input->post('custTel');
        $param['custbirth'] = $this->input->post('datetimepicker');
		$param['joinType'] = 'email';

        $this->Member_m->insert_cust($param);

        alert('정상 등록되었습니다.\n등록하신 정보로 로그인 하세요.', site_url('main/login'));

    }

    /**
     * 메인 페이지
     */
}