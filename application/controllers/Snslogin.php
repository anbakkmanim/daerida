<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Snslogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

//     public function kakao()
//     {
//             $this->load->library("kakao_login");
//             $result = $this->kakao_login->get_profile();
// //            print_r($result);

//             $this->load->model('Member_model');
//             $param['custEmail'] = 'kakao'.$result['id'];
//             $param['userSnsId'] = $result['id'];
//             $param['userImage'] = $result['properties']['thumbnail_image'];
//             $param['custName'] = $result['properties']['nickname'];
//             $param['joinType'] = 'kakao';

//             print_r($result);
//             $authParm['custEmail'] = $param['custEmail'];

//             $AuthResult = $this->Member_m->sns_is_auth($authParm);

//             if($AuthResult)
//             {
//                 $row = $this->Member_m->get_snscust($authParm);

//                 $user_data = array(
//                     'idx'=> $row->idx,
//                     'jointype' => $row->joinType,
//                     'custName' => $row->custName,
//                     'custTel' => $row->custTel,
//                     'custAddr' => $row->custAddr,
//                     'custEmail' => $row->custEmail,
//                     'joinDate' => $row->joinDate,
//                     'custGender' => $row->custGender,
//                     'custbirth' => $row->custbirth,
//                     'userImage' => $row->userImage,
//                     'userSnsId' => $row->userSnsId,
//                     'homepage' => $row->homepage,
//                     'custContactEmail' => $row->custContactEmail,
//                     'jobSearchYN' => $row->jobSearchYN
//                 );

//                 $this->session->set_userdata($user_data);

//                 location_href('/main/login');
//             }
//             else
//             {
//                 $this->Member_m->insert_sns($param);

//                 $row = $this->Member_m->get_snscust($authParm);

//                 $user_data = array(
//                     'idx'=> $row->idx,
//                     'jointype' => $row->joinType,
//                     'custName' => $row->custName,
//                     'custTel' => $row->custTel,
//                     'custAddr' => $row->custAddr,
//                     'custEmail' => $row->custEmail,
//                     'joinDate' => $row->joinDate,
//                     'custGender' => $row->custGender,
//                     'custbirth' => $row->custbirth,
//                     'userImage' => $row->userImage,
//                     'userSnsId' => $row->userSnsId,
//                     'homepage' => $row->homepage,
//                     'custContactEmail' => $row->custContactEmail,
//                     'jobSearchYN' => $row->jobSearchYN
//                 );

//                 $this->session->set_userdata($user_data);

//                 alert('회원가입 처리되었습니다!\n프로필 정보에 이메일을 기입해주세요.', '/main/login');
//             }
//     }

//     public function google()
//     {
//         $this->load->library("google_login");
//         $result = $this->google_login->get_profile();
//         $json_result = json_decode($result,true);
//         print_r($json_result);

//         $this->load->model("Member_model");
//         $param['custEmail'] = $json_result['emails']['0']['value'];
//         $param['userSnsId'] = $json_result['id'];
//         $param['custName'] = $json_result['displayName'];
//         $param['userImage'] = $json_result['image']['url'];
//         $param['joinType'] = 'google';

//         $authParm['custEmail'] = $param['custEmail'];

//         $AuthResult = $this->Member_m->sns_is_auth($authParm);

//         if($AuthResult)
//         {
//             $row = $this->Member_m->get_snscust($authParm);

//             $user_data = array(
//                 'idx'=> $row->idx,
//                 'jointype' => $row->joinType,
//                 'custName' => $row->custName,
//                 'custTel' => $row->custTel,
//                 'custAddr' => $row->custAddr,
//                 'custEmail' => $row->custEmail,
//                 'joinDate' => $row->joinDate,
//                 'custGender' => $row->custGender,
//                 'custbirth' => $row->custbirth,
//                 'userImage' => $row->userImage,
//                 'userSnsId' => $row->userSnsId,
//                 'homepage' => $row->homepage,
//                 'custContactEmail' => $row->custContactEmail,
//                 'jobSearchYN' => $row->jobSearchYN
//             );

//             $this->session->set_userdata($user_data);
// //            print_r($row);
// //            print_r($this->session->custEmail);
//                 location_href('/main/login');
//         }
//         else
//         {
//             $this->Member_m->insert_sns($param);

//             $row = $this->Member_m->get_snscust($authParm);

//             $user_data = array(
//                 'idx'=> $row->idx,
//                 'jointype' => $row->joinType,
//                 'custName' => $row->custName,
//                 'custTel' => $row->custTel,
//                 'custAddr' => $row->custAddr,
//                 'custEmail' => $row->custEmail,
//                 'joinDate' => $row->joinDate,
//                 'custGender' => $row->custGender,
//                 'custbirth' => $row->custbirth,
//                 'userImage' => $row->userImage,
//                 'userSnsId' => $row->userSnsId,
//                 'homepage' => $row->homepage,
//                 'custContactEmail' => $row->custContactEmail,
//                 'jobSearchYN' => $row->jobSearchYN
//             );

//             $this->session->set_userdata($user_data);

//             alert('회원가입 처리되었습니다!', '/main/login');
//         }
//     }

    public function naver() {
        $this->config->load('token', true);
        $token = $this->config->item('naver_login', 'token');
        print_r($token['client_id']);
    }
}