<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends CI_Controller
{

    /**
     * Hiring 생성자.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hiring_model');
    }

    public function resume_send()
    {
        $data['re_idx'] = $_POST['re_idx'];
        $data['me_n_id'] = $_POST['me_n_id'];
        $data['re_ap_info'] = $_POST['re_ap_info'];
        $data['re_ap_date'] = $_POST['re_ap_date'];

        $this->Hiring_m->send_resume($data);
        $this->load->view('hiring/list');
    }

    public function resume_list()
    {
        $return = $this->Hiring_m->read_resume();
        $this->load->view('hiring/resume_list', $return);
    }
}