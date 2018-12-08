<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobOffer extends CI_Controller
{

    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobOfferModel');
        $this->load->model('ProFileModel');
    }

    /**
     * 메인화면
     */
    public function main()
    {
        $data['listdata'] = $this->JobOffer_Model->customer_jobofferlist();
        $data['listcount'] = $this->JobOffer_Model->customer_joboffercount();
//        $param;
        for($i = 0; $i< $data['listcount']; $i++){
            $param[$i] =array(
                $data['listdata'][$i]['idx']
            );
        $data['jobtypedata'][$i]=$this->ProFile_Model->profile_jobtype($param[$i]['0']);
        $data['profiledata'][$i]=$this->ProFile_Model->profile_intro($param[$i]['0']);
        }
//        $data['intro'] = $this->ProFile_Model->profile_intro($param);
//        print_r($data['listdata']);
//        print_r($param);
//        print_r($data['jobtypedata']);
//        print_r($data['profiledata']);
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('jobOffer/main',$data);
//        $this->load->view('companyProfile/main/empl');
    }
}