<?php

/**
 * ===============================
 * ===== DECREPATED SETTINGS =====
 * ===============================
 * 
 * This setting is decrepated. use new setting file sns_login.php!
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * SOCIAL Setting
 **/
$config['naver_login']['client_id']         = "네아로 클라이언트 ID";
$config['naver_login']['client_secret']     = "네아로 클라이언트 secret";
$config['naver_login']['redirect_uri']  = "네아로 Redirect URI";
$config['naver_login']['authorize_url'] = "https://nid.naver.com/oauth2.0/authorize";
$config['naver_login']['token_url']     = "https://nid.naver.com/oauth2.0/token";
$config['naver_login']['info_url']      = "https://openapi.naver.com/v1/nid/me";
$config['naver_login']['token_request_post'] = FALSE;

//facebook 로그인은 https아니면 안해줌
$config['facebook_login']['client_id']  = "193713634597898";      // 페이스북 앱 ID 입력
$config['facebook_login']['client_secret']= "3665139992f047372dbc6a54eaf84932";   // 페이스북 앱 시크릿 코드
$config['facebook_login']['redirect_uri']   = "https://daerida.com/snslogin/facebook";
$config['facebook_login']['authorize_url']= "https://www.facebook.com/dialog/oauth";
$config['facebook_login']['token_url']  = "https://graph.facebook.com/v2.4/oauth/access_token";
$config['facebook_login']['info_url']       = "https://graph.facebook.com/v2.4/me";
$config['facebook_login']['token_request_post'] = FALSE;

$config['kakao_login']['client_id']     = "bd1ed76128c107ee8e98b3ae47772ab6";   // REST API 키를 입력
$config['kakao_login']['client_secret'] = "";   // 카카오는 Client Secret 안씀
$config['kakao_login']['redirect_uri']  = "http://daerida.com/snslogin/kakao";
$config['kakao_login']['authorize_url'] = "https://kauth.kakao.com/oauth/authorize";
$config['kakao_login']['token_url']     = "https://kauth.kakao.com/oauth/token";
$config['kakao_login']['info_url']      = "https://kapi.kakao.com/v2/user/me";
$config['kakao_login']['token_request_post'] = FALSE;

$config['google_login']['client_id']        = "119957462660-j7aprabmvt4tsm1mlk7d0vit077b2420.apps.googleusercontent.com";
$config['google_login']['client_secret']    = "uk-t2eGEzDeFPWR9lkz91iGh";
$config['google_login']['redirect_uri']     = "http://www.daerida.com/snslogin/google";
$config['google_login']['authorize_url']    = "https://accounts.google.com/o/oauth2/auth";
$config['google_login']['token_url']        = "https://www.googleapis.com/oauth2/v4/token";
$config['google_login']['info_url']         = "https://www.googleapis.com/plus/v1/people/me";
$config['google_login']['token_request_post'] = TRUE;