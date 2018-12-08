<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProFile_Model');
        $this->load->model('Member_model');
    }

    public function main()
    {
        $param = $this->session->idx;
        $data['countresult'] = $this->ProFile_Model->career_countRow($param);
        $data['careerdata'] = $this->ProFile_Model->career_getRow($param);
        $data['customerdata'] = $this->Member_m->get_custarrayidx($param);
        $data['intro'] = $this->ProFile_Model->profile_intro($param);
        $data['projectcount'] = $this->ProFile_Model->project_countrow($param);
        $data['projectdata'] = $this->ProFile_Model->project_getrow($param);
        $data['educationlevelcount'] = $this->ProFile_Model->educationlevel_countrow($param);
        $data['educationleveldata'] = $this->ProFile_Model->educationlevel_getrow($param);
        $data['jobtype'] = $this->ProFile_Model->profile_jobtype($param);
        $data['tagcount'] = $this->ProFile_Model->tag_countrow($param);
        $data['tagdata'] = $this->ProFile_Model->tag_getrow($param);

        if($data['intro']==null){
            $data['intro']['0']['introUser']='';
        }
        if($data['jobtype']==null){
            $data['jobtype']['0']['userjobType']='';
        }
//        print_r($param);
//        print_r($data['data']);
//        print_r($data['countresult']);
//        print_r($data['intro']);
//        print_r($data['projectcount']);
//        print_r($data['projectdata']);
//        print_r($data['educationleveldata']);
//        print_r($data['educationlevelcount']);
//        print_r($data['tagdata']);
//        print_r($data['tagcount']);

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/main/main',$data);
        $this->load->view('layout/footer');
    }

    public function watchprofile($idx,$param)
    {
        $data['countresult'] = $this->ProFile_Model->career_countRow($param);
        $data['careerdata'] = $this->ProFile_Model->career_getRow($param);
        $data['customerdata'] = $this->Member_m->get_custarrayidx($param);
        $data['intro'] = $this->ProFile_Model->profile_intro($param);
        $data['projectcount'] = $this->ProFile_Model->project_countrow($param);
        $data['projectdata'] = $this->ProFile_Model->project_getrow($param);
        $data['educationlevelcount'] = $this->ProFile_Model->educationlevel_countrow($param);
        $data['educationleveldata'] = $this->ProFile_Model->educationlevel_getrow($param);
        $data['jobtype'] = $this->ProFile_Model->profile_jobtype($param);
        $data['tagcount'] = $this->ProFile_Model->tag_countrow($param);
        $data['tagdata'] = $this->ProFile_Model->tag_getrow($param);

        if($data['intro']==null){
            $data['intro']['0']['introUser']='';
        }
        if($data['jobtype']==null){
            $data['jobtype']['0']['userjobType']='';
        }
//        print_r($param);
//        print_r($data['data']);
//        print_r($data['countresult']);
//        print_r($data['intro']);
//        print_r($data['projectcount']);
//        print_r($data['projectdata']);
//        print_r($data['educationleveldata']);
//        print_r($data['educationlevelcount']);
//        print_r($data['tagdata']);
//        print_r($data['tagcount']);
//        print_r($data['customerdata']);

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/main/main',$data);
        $this->load->view('layout/footer');
    }

    public function teamCom()
    {
        $param = $this->session->idx;
        $data['customerdata'] = $this->Member_m->get_custarrayidx($param);
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('profile/main/teamCom',$data);
        $this->load->view('layout/footer');
    }
}