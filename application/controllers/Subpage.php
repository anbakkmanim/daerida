<?php

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
        $this->load->view('subpage/about');
    }

    /**
     * 크레딧 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/credits
     */
    public function credits() {
        $this->load->view('subpage/credits');
    }

    /**
     * 팀터뷰 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/teamterview
     */
    public function teamterview() {
        $this->load->view('subpage/teamterview');
    }

    /**
     * 지원 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/support
     */
    public function support() {
        $this->load->view('subpage/support');
    }

    /**
     * 에러 페이지
     * @METHOD GET (STATIC)
     * @MainURL subpage/error
     */
    public function error() {
        $this->load->view('subpage/error');
    }
}