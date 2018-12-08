<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Token Setting
 */

// Naver Login (관리자: 남현욱, na*u**lu*er)
$config['naver_login'] = [
  'client_id' => 'xeFvURPpx1MEbsoxUBg6',
  'client_secret' => 'QLE9kphYYh',
  'authorize_url' => 'https://nid.naver.com/oauth2.0/authorize',
  'token_url' => 'https://nid.naver.com/oauth2.0/token',
  'info_url' => 'https://openapi.naver.com/v1/nid/me'
];

// Kakao Login (관리자: 남현욱, na*u**lu*er)
$config['kakao_login'] = [
  'client_id' => 'd69287aa5bb7a680f63116e28c78e72c',
  'authorize_url' => 'https://kauth.kakao.com/oauth/authorize',
  'token_url' => 'https://kauth.kakao.com/oauth/token',
  'info_url' => 'https://kapi.kakao.com/v2/user/me'
];

// Google Login (관리자: 남현욱, h*0**am)
$config['google_login'] = [
  'client_id' => '1008786008947-j8b6aqhlllks6rg54j536f6i1uj1s6sd.apps.googleusercontent.com',
  'client_secret' => 'I0N2MbQMVxLAwS1xSXgMDoTG',
  'authorize_url' => 'https://accounts.google.com/o/oauth2/auth',
  'token_url' => 'https://www.googleapis.com/oauth2/v4/token',
  'info_url' => 'https://www.googleapis.com/plus/v1/people/me'
];

// Daum Map (관리자: 남현욱, na*u**lu*er)
$config['daum_map_token'] = '4ba0a2b6bfd38850e8f7647df782a90c';
