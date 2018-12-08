<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 서서섯서핫사삿아상희흐히히히ㅣㅎ
 * Date: 2018-11-24
 * Time: 오전 11:06
 */

class Hiring extends CI_Controller
{

    /**
     * Hiring 생성자.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RecruitModel');
    }

    public function addRecruit()
    {
        $co_idx = $this->session->co_idx;

    }
}