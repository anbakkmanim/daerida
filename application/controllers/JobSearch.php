<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobSearch extends CI_Controller
{

    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JobSearch_Model');
        $this->load->model('ProFile_Model');
    }

    /**
     * 메인화면
     */
    public function main()
    {
        $data['listdata'] = $this->JobSearch_Model->jobhunting_list();
        $data['listcount'] = $this->JobSearch_Model->jobhunting_count();
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('jobSearch/main',$data);
        $this->load->view('layout/footer');
    }

}