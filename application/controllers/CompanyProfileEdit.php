<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProfileEdit extends CI_Controller
{

    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function main()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/edit/main');
    }

    public function empl()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/edit/empl');
    }

    public function jobOffer()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/edit/jobOffer');
    }

    public function setting()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/footer');
        $this->load->view('companyProfile/edit/setting');
    }

}