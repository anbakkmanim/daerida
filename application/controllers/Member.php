<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Codeigniter 잘만쓰면 진짜 유용함 php 생코딩혐오. 갠적으론 라라벨보다 편한거같다.
//각종 라이브러리들이 좋다 쓰기 편하게 되어 있다.
// 라라벨이 아직 한국에 그렇게 안들어와서 그런지 몰라도 정보가 너무 없다.
//Controller 첫글자는 무조건 대문자로 소문자하면 컨트롤러를 인식못함.
//http://www.ciboard.co.kr/user_guide/kr/general/controllers.html (자세한내용 참고)
//application/hook에서 추가할것 hook란 컨트롤러 로드되기전에 수행되는 기능임 주로 로그인 여부 확인할때 사용함.
/*ex)
$allow_page['member(컨트롤러 이름)'] = array(
    'login'(function) 이런 형식
);
hook 활성화랑 정의는 다해둠 건들 ㄴㄴ
*/
//  config/routes에서 daerida.com url로 접속 시 기본으로 탈 컨트롤러 정의할수 있음 나중에 바꿔라
class Member extends CI_Controller
{
    /**
     * 생성자
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('memberEx_m');
    }

    //URI에서 두번째 섀그먼트가 전달되지 않을 때 실행됨 ex)daerida.com/Member 다음 비었을 때 index()로 넘어감
    public function index(){
        location_href('/member/login'); //php에 없는 함수임 application/helpers에 쓰고 싶은 함수를 직접 만들어서 쓸 수 있음.
    }

    //login 보여줌 + 세션있을때는 로그인 페이지 안보여주도록 함
    public function login(){
        //세션 불러오기
        //세션에 관한 내용은 http://www.ciboard.co.kr/user_guide/kr/libraries/sessions.html 참고
        $m_id = $this->session->m_id;
        //$m_id가 안비었을때
        if($m_id != null){
            location_href("/member/welcome");
        }else{
            $this->load->view('loginEx/login'); //제일 기본 view불러오기
            //view페이지를 보여줄때는 header main footer 이런식으로 나눠서 뿌려주는게 가능
//        예시
//        $this->load->view('header'); 웹페이지들을 조각조각 나누자
//        $this->load->view('main');
//        $this->load->view('side_bar');
//        $this->load->view('footer');
        }
    }

    //유저 확인후 세션처리
    public function auth_user(){
        $data['m_id'] = $this->input->post('m_id'); //codeigniter 방식 post받기
        $data['m_pw'] = $_POST['m_pw']; //일반 php 방식 post받기 (둘다 사용가능)

        $auth = $this->memberEx_m->auth_user($data);
        //boolean
        //회원정보가 있을때
        if($auth){
            $row = $this->memberEx_m->get_cust($data);
            $user_data = array(
                'm_idx'         =>  $row['m_idx'],
                'm_id'          =>  $row['m_id'],
                'm_pw'          =>  $row['m_pw'],
                'm_nickname'    =>  $row['m_nickname']
            );
            //세션 처리
            $this->session->set_userdata($user_data);
            //세션 들어가면 로그인 확인은 hook에서 컨트롤러 타기전에 계속 확인해줌.
            location_href("/member/welcome");
            //회원정보가 없을 때
        }else{
            alert("아이디 또는 비밀번호가 맞지 않습니다.");
            location_href("/member/login");
        }
    }

    //메인페이지
    public function welcome(){
        $data['m_id'] = $this->session->m_id;
        $param = $this->memberEx_m->get_cust($data);
        $data['m_nickname'] = $param['m_nickname'];
        $this->load->view('loginEx/welcome',$data);
        //view에 배열이나 object에 값을 보낼수있음. view에서 사용법은 이걸 몰랐었는데 보낼땐 $userdata['m_id']가 view에서 사용할때는 $m_id 이렇게 바뀜
        //welcome 페이지는 hook 등록 안시켜둠 == 로그인 검사할때 세션 없으면 페이지 접근 못함.
    }

    //로그아웃
    public function logout(){
        $this->session->sess_destroy(); //세션에 등록된 정보를 삭제해줌.
        alert('로그아웃 되었습니다.', site_url('member/login'));
    }

    //멤버 수정 페이지 view
    public function modifyMember(){
        $get['m_id'] = $this->session->m_id;
        $param = $this->memberEx_m->get_cust($get);
        $data['m_nickname'] = $param['m_nickname'];


        $this->load->view('loginEx/modify',$data);
    }

    //멤버 수정 처리
    public function modify(){
        $data['m_pw'] = $_POST['m_pw'];
        $data['m_nickname'] = $_POST['m_nickname'];
        $data['m_id'] = $this->session->m_id;

        $result = $this->memberEx_m->modify_pw_nickname($data);
        if($result){
            alert("수정되었습니다.");
            location_href("/member/welcome");
        }else{
            alert("수정 실패");
            location_href("/member/modifyMember");
        }
    }

    //멤버 탈퇴
    public function deleteMember(){
        $this->memberEx_m->delete($this->session->m_id);

        $this->session->sess_destroy(); //세션 삭제

        alert("탈퇴되었습니다.");
        location_href('/member/login');
    }

    //회원가입 페이지 view
    public function create_account(){
        $this->load->view('loginEx/create_account');
    }
    
    //회원가입
    public function register(){
        $data['m_id'] = $this->input->post('m_id');
        $data['m_pw'] = $_POST['m_pw'];
        $data['m_nickname'] = $_POST['m_nickname'];

        $result = $this->memberEx_m->register_user($data); //쿼리결과 반환 값 성공 시 1 실패 시 null반환

        if($result){
            alert('회원가입에 성공하였습니다.');
            location_href('/member/login');
        }else{
            alert("회원가입에 실패했습니다. 다시 시도해주세요");
            location_href('/member/login');
            //null 반환될일 거의 없다.
        }

    }
}