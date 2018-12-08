<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * SNS Login Setting
 */

// Naver Login (관리자: 남현욱, na*u**lu*er)
$config['naver_login']['client_id']         = "xeFvURPpx1MEbsoxUBg6";
$config['naver_login']['client_secret']     = "QLE9kphYYh";
$config['naver_login']['authorize_url'] = "https://nid.naver.com/oauth2.0/authorize";
$config['naver_login']['token_url']     = "https://nid.naver.com/oauth2.0/token";
$config['naver_login']['info_url']      = "https://openapi.naver.com/v1/nid/me";

// Kakao Login (관리자: 남현욱, na*u**lu*er)
$config['kakao_login']['client_id']     = "d69287aa5bb7a680f63116e28c78e72c";
$config['kakao_login']['authorize_url'] = "https://kauth.kakao.com/oauth/authorize";
$config['kakao_login']['token_url']     = "https://kauth.kakao.com/oauth/token";
$config['kakao_login']['info_url']      = "https://kapi.kakao.com/v2/user/me";

// Google Login (관리자: 남현욱, h*0**am)
$config['google_login']['client_id']        = "1008786008947-j8b6aqhlllks6rg54j536f6i1uj1s6sd.apps.googleusercontent.com";
$config['google_login']['client_secret']    = "I0N2MbQMVxLAwS1xSXgMDoTG";
$config['google_login']['authorize_url']    = "https://accounts.google.com/o/oauth2/auth";
$config['google_login']['token_url']        = "https://www.googleapis.com/oauth2/v4/token";
$config['google_login']['info_url']         = "https://www.googleapis.com/plus/v1/people/me";