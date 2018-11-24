<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamBuilding extends CI_Controller
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
        $this->load->view('teamBuilding/main');
        $this->load->view('layout/footer');
    }
    public function detail()
    {

}
}