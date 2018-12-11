<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subpage extends CI_Controller
{
    /**
     * Subpage constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 정보 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/about
     */
    public function about() {
        $this->load->view('layout/header');
        $this->load->view('subpage/about');
        $this->load->view('layout/footer');
    }

    /**
     * 크레딧 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/credits
     */
    public function credits() {
        $this->load->view('layout/header');
        $this->load->view('subpage/credits');
        $this->load->view('layout/footer');
    }

    /**
     * 팀터뷰 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/teamterview
     */
    public function teamterview() {
        $this->load->view('layout/header');
        $this->load->view('subpage/teamterview');
        $this->load->view('layout/footer');
    }

    /**
     * 지원 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/support
     */
    public function support() {
        $this->load->view('layout/header');
        $this->load->view('subpage/support');
        $this->load->view('layout/footer');
    }

    /**
     * 에러 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/error
     */
    public function error() {
        $this->load->view('layout/header');
        $this->load->view('subpage/error');
        $this->load->view('layout/footer');
    }

    /**
     * 404 Not Found 페이지
     * @METHDO ALL
     * @MainURL subpage/_404
     */
    public function _404() {
        $this->load->view('layout/header');
        $this->load->view('subpage/404');
    }
}