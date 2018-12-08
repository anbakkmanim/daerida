<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileEdit extends CI_Controller{
    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->model('ProfileEdit_Model');
        $this->load->model('ProFile_Model');
    }

    public function profile1()
    {
        $Emailparam['custEmail'] = $this->session->custEmail;
        $idxparam = $this->session->idx;
        $data['intro'] = $this->ProFile_Model->profile_intro($idxparam);
        $data['custdata']= $this->Member_m->get_custarray($Emailparam);
        if($data['intro']==null){
            $data['intro']['0']['introUser']='';
        }
//        print_r($data['custdata']);
//        print_r( $Emailparam['custEmail']);
//        print_R($data['intro']);
//        print_r($data['custdata']);
//        print_r($param['custEmail']);
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/edit/profile1',$data);
        $this->load->view('layout/footer');
    }

    public function profile2()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/edit/profile2');
        $this->load->view('layout/footer');
    }

    public function profile3()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/edit/profile3');
        $this->load->view('layout/footer');
    }

    public function profile4()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/edit/profile4');
        $this->load->view('layout/footer');
    }

    public function updatecustomer()
    {
        $param['custContactEmail'] = $this->input->post('custContactEmail');
        $param['custbirth'] = $this->input->post('datetimepicker');
        $param['custName'] = $this->input->post('custName');
        $param['custTel'] = $this->input->post('custTel');
        $param['custAddr'] = $this->input->post('custAddr');
        $param['homepage'] = $this->input->post('homepage');
        $param['custGender'] = $this->input->post('custGender');
        $param['introUser'] = $this->input->post('introUser');
        $param['userjopType'] = $this->input->post('userjopType');
        print_r($param);
    }
}