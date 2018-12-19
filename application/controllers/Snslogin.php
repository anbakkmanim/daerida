<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Snslogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->config->load('token', true);
        $this->load->model('AuthModel');
    }


    /**
     * private 메소드.
     * @param $auth 인증 데이터
     */
    private function auth($row) {
        $user_data = array(
            'me_idx' => $row['me_n_idx'],
            'me_name' => $row['me_n_name'],
            'me_profile' => $row['me_n_profile'],
            'me_id' => $row['me_n_id'],
            'me_password' => $row['me_n_password'],
            'me_table' => $row,
            'me_type' => "me_n_"
        );
        $this->session->set_userdata($user_data);
        location_href("/hiring/hiringList");
    }

    public function authNaver() {
        $this->session->set_userdata("authMode", "auth");
        $naver = $this->config->item("naver_login", "token");
        location_href($naver['authorize_url'] . "?response_type=code&client_id=".$naver['client_id']."&redirect_uri=".site_url('/snslogin/naver')."&state=RANDOM_STATE");
    }

    public function addNaver() {
        if ($this->session->me_idx == null) {
            alert("로그인 해주세요");
            location_previous();
            return;
        }
        $this->session->set_userdata("authMode", "add");
        $naver = $this->config->item("naver_login", "token");
        location_href($naver['authorize_url'] . "?response_type=code&client_id=".$naver['client_id']."&redirect_uri=".site_url('/snslogin/naver')."&state=RANDOM_STATE");
    }

    public function authKakao() {
        $this->session->set_userdata("authMode", "auth");
        $kakao = $this->config->item("kakao_login", "token");
        location_href($kakao['authorize_url']."?response_type=code&client_id=" . $kakao['client_id'] ."&redirect_uri=" . site_url('/snslogin/kakao'));
    }

    public function addKakao() {
        if ($this->session->me_idx == null) {
            alert("로그인 해주세요");
            location_previous();
            return;
        }
        $this->session->set_userdata("authMode", "add");
        $kakao = $this->config->item("kakao_login", "token");
        location_href($kakao['authorize_url']."?response_type=code&client_id=" . $kakao['client_id'] ."&redirect_uri=" . site_url('/snslogin/kakao'));
    }

    public function authGoogle() {
        $this->session->set_userdata("authMode", "auth");
        $google = $this->config->item("google_login", "token");
        location_href($google['authorize_url']."?scope=profile&access_type=offline&include_granted_scopes=true&state=state_parameter_passthrough_value&response_type=code&client_id=" . $google['client_id'] ."&redirect_uri=" . site_url('/snslogin/google'));
    }

    public function addGoogle() {

    }

    public function naver() {
        $naver = $this->config->item('naver_login', 'token');
        $url = $naver['token_url'] . "?grant_type=authorization_code"
        . "&client_id=" . $naver['client_id']
        . "&client_secret=" . $naver['client_secret']
        . "&redirect_uri=" . site_url('/snslogin/naver')
        . "&code=" . $_GET["code"]
        . "&state=" . $_GET["state"];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $accessToken = get_object_vars(json_decode($response));
        $accessToken = $accessToken['access_token'];

        $url = $naver['info_url'];
        $header = "Authorization: Bearer " . $accessToken;

        $headers = [];
        array_push($headers, $header);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $token = get_object_vars(get_object_vars(json_decode($response))['response'])['id'];
        if ($this->session->authMode == "auth") {
            $result = $this->AuthModel->authSNS('naver', $token);
            if (count($result) == 0) {
                alert("해당 네이버 계정이 연결되어있지 않습니다. 회원가입 뒤에 연결해 주세요");
                location_href("/member/registerNormal");
                return;
            } else {
                $this->auth($result[0]);
            }
        } else {
            $success = $this->AuthModel->addSNS($this->session->me_idx, 'naver', $token);
            if ($success) {
                alert("추가 성공");
                location_previous();
            } else {
                alert("추가 실패");
                location_previous();
            }
        }
    }

    public function kakao() {
        $kakao = $this->config->item('kakao_login', 'token');
        $url =
        $kakao['token_url'] . "?grant_type=authorization_code"
        . "&client_id=" . $kakao['client_id']
        . "&redirect_uri=" . site_url('/snslogin/kakao')
        . "&code=" . $_GET["code"];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $accessToken = get_object_vars(json_decode($response));
        $accessToken = $accessToken['access_token'];

        $url = $kakao['info_url'];
        $header = "Authorization: Bearer " . $accessToken;

        $headers = [];
        array_push($headers, $header);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        $token = get_object_vars(json_decode($response))['id'];
        if ($this->session->authMode == "auth") {
            $result = $this->AuthModel->authSNS('kakao', $token);
            if (count($result) == 0) {
                alert("해당 카카오 계정이 연결되어있지 않습니다. 회원가입 뒤에 연결해 주세요");
                location_href("/member/registerNormal");
                return;
            } else {
                $this->auth($result[0]);
            }
        } else {
            $success = $this->AuthModel->addSNS($this->session->me_idx, 'kakao', $token);
            if ($success) {
                alert("추가 성공");
                location_previous();
            } else {
                alert("추가 실패");
                location_previous();
            }
        }

    }

    public function google() {
        print_r($_GET);
    }
}