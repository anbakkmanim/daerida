<?php
class Before {

	private $CI;


	function __construct() {
        $this->CI =& get_instance();
	}


	// 사용자 인증
	function auth_user()
    {
        $controller = $this->CI->uri->segment(1);
        $method = $this->CI->uri->segment(2);

//		if (!$controller) {
//			$controller = 'main';
//			$method = 'login';
//		}
        if (!$controller) {
            $controller = 'member';
            $method = 'login';
        }
//		 $allow_page['컨트롤러'][0] = 메소드;
        $allow_page['member'] = array(
            'login',
            'authUser',
            'register',
            'findUserId',
            'findUserPassword',
            'idCheck',
            'getSmallField'
        );
        $allow_page['subpage'] = array(
            'about',
            'credits',
            'teamterview',
            'support',
            'error'
        );
        // 익명 접근 허용 페이지 여부 체크
        $is_allowed = FALSE;
        if (isset($allow_page[$controller])) {    // 정의돼 있지 않은 controller 일 경우 에러 대비
            // 허용 컨트롤러와 메소드인지를 체크
            foreach ($allow_page[$controller] as $allow_method) {
                if ($allow_method == $method) {
                    $is_allowed = TRUE;        // 허용 리스트에 있을 경우 허용
                    break;
                }
            }
        }

		// 익명 접근 허용되지 않은 페이지일 경우 로그인 페이지로 강제 이동
		if ($is_allowed == FALSE) {
            // 로그인 여부 확인
            if ($this->CI->session->me_idx == null) {
                alert('로그인 후 이용해 주세요.', site_url('member/login'));
            }
        }
	}

}
