<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProFile_Model');
    }

    public function seeprofile($param)
    {
        $data['compData'] = $this->ProFile_Model->comp_getRow($param);
        $data['compIntro'] = $this->ProFile_Model->comp_intro($param);
        $data['comprepr'] = $this->ProFile_Model->comp_repr($param);


//        print_r($data['compData']);
//        print_r($data['compIntro']);
//        print_r($data['comprepr']);

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('companyProfile/main/main',$data);
        $this->load->view('layout/footer');
    }

    public function main()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/main/main');
    }

    public function empl()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/main/empl');
    }

    public function jobOffer()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/main/jobOffer');
    }

    public function setting()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/main/setting');
    }

}