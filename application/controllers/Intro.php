<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro extends CI_Controller
{

    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 메인화면
     */
    public function index(){
        location_href(site_url('intro/main'));
    }
    public function profile()
    {
        $this->load->view('layout/header');
        $this->load->view('intro/intro1');
        $this->load->view('layout/footer');
    }
    public function main()
    {
//        if(isset($this->session->custEmail)) {
//            $this->load->view('layout/header');
//            $this->load->view('layout/navbar');
//            $this->load->view('jobSearch/main');
//            $this->load->view('layout/footer');
//        }
        $this->load->view('layout/header');
        $this->load->view('intro/intro2');
        $this->load->view('layout/footer');
    }
    public function contactUs()
    {
        $this->load->view('layout/header');
        $this->load->view('intro/intro3');
        $this->load->view('layout/footer');
    }
    public function company()
    {
        $this->load->view('layout/header');
        $this->load->view('intro/intro4');
        $this->load->view('layout/footer');
    }
    public function aaa()
    {
        $this->load->view('intro/0001팀소개');
    }

}