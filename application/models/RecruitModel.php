<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: tbvja
 * Date: 2018-11-24
 * Time: 오전 11:07
 */

class RecruitModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * 채용 공고를 추가합니다.
     * @param $co_idx number 회사 번호
     * @param $re_startDate DateTime 시작 시간
     * @param $re_endDate DateTime 종료 시간
     * @param $re_content String 내용
     * @return bool SQL Value (Boolean)
     */
    public function insertRecruit($co_idx, $re_startDate, $re_endDate, $re_content) {
        $sql = "insert into RECRUIT_TB (co_idx, re_startDate, re_endDate, re_content) values (?, ?, ?, ?)";
        $bind = array(
           $co_idx,
           $re_startDate,
           $re_endDate,
           $re_content
        );

        return $this->db->query($sql, $bind);
    }

    /**
     * 채용 공고를 삭제합니다.
     * @param $re_idx number 채용공고 번호
     * @return bool SQL Value (Boolean)
     */
    public function deleteRecruit($re_idx) {
        $sql = "delete from RECRUIT_tB where re_idx = ?";
        $bind = array(
           $re_idx
        );

        return $this->db->query($sql, $bind);
    }


    /**
     * 채용 공고를 변경합니다.
     * @param $re_idx number 채용공고 번호
     * @param $re_startDate DateTime 시작 시간 수정 값
     * @param $re_endDate DateTime 종료 시간 수정 값
     * @param $re_content String 채용공고 내용 수정 값
     * @return mixed SQL Value (Boolean)
     */
    public function updateRecruit($re_idx, $re_startDate, $re_endDate, $re_content) {
        $sql = "update RECRUIT_TB set re_startDate = ?, re_endDate = ?, re_content = ? where re_idx = ?";
        $bind = array(
           $re_startDate,
           $re_endDate,
           $re_content,
           $re_idx
        );

        return $this->db->query($sql, $bind);
    }

    /**
     * 채용 공고의 리스트를 들고 옵니다.
     * @param $co_idx number 회사 번호
     * @return mixed SQL Value (Array)
     */
    public function listRecruit($co_idx) {
        $sql = "select * from RECRUIT_TB as a join MEMBER_COMPANY_TB as b on a.co_idx = b.me_c_idx where co_idx = ?";
        $bind = array(
            $co_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }

    /**
     * 모든 최근 채용 공고를 가지고 옵니다.
     * @return mixed SQL Value (Array)
     */
    public function allRecruit() {
        $sql = "select a.*, b.*, COUNT(c.re_fi_idx) recruitCnt from RECRUIT_TB as a join MEMBER_COMPANY_TB as b on a.co_idx = b.me_c_idx join RECRUIT_FIELD_TB as c on a.re_idx = c.re_idx order by re_idx desc";

        return $this->db->query($sql)->result_array();
    }

    /**
     * 채용 공고의 자세한 정보를 반환합니다.
     * @param $re_idx 채용 공고 번호
     * @return mixed SQL Value (Array)
     */
    public function detailRecruit($re_idx) {
        $sql = "select * from RECRUIT_TB as a join MEMBER_COMPANY_TB as b on a.co_idx = b.me_c_idx where re_idx = ?";
        $bind = array(
            $re_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }

    /**
     * 채용 공고의 필드 정보들을 반환합니다.
     * @param $re_idx 채용 공고 번호
     * @return mixed SQL Value (Array)
     */
    public function detailField($re_idx) {
        $sql = "select * from RECRUIT_FIELD_TB as a join FIELD_SMALL_RF as b on a.fi_s_idx = b.fi_s_idx join FIELD_LARGE_RF as c on b.fi_l_idx = c.fi_l_idx where re_idx = ?";
        $bind = array(
            $re_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }

    /**
     * 채용 공고의 필드 하나를 불러옵니다.
     * @param $re_fi_idx 채용 필드 번호
     * @return mixed SQL Value (One)
     */
    public function getField($re_fi_idx) {
        $sql = "select * from RECRUIT_FIELD_TB as a join FIELD_SMALL_RF as b on a.fi_s_idx = b.fi_s_idx join FIELD_LARGE_RF as c on b.fi_l_idx = c.fi_l_idx where re_fi_idx = ?";
        $bind = array(
            $re_fi_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }


    /**
     * 팔로우 한 회사의 채용 공고의 리스트를 띄웁니다.
     * @param $me_n_idx 채용 공고
     * @return mixed SQL Value (Array)
     */
    public function followRecruit($me_n_idx) {
        $sql = "select a.*, b.*, COUNT(c.re_fi_idx) recruitCnt from RECRUIT_TB as a join MEMBER_COMPANY_TB as b on a.co_idx = b.me_c_idx join RECRUIT_FIELD_TB as c on a.re_idx = c.re_idx join MEMBER_FOLLOW_TB as d on d.me_c_idx = a.co_idx where d.me_n_idx = ? order by re_idx desc";
        $bind = array(
            $me_n_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }

    public function myRecruits($me_n_idx) {
        $sql = "select * from RECRUIT_APPLICATION_TB as a 
                join RECRUIT_FIELD_TB as b on a.re_fi_idx = b.re_fi_idx 
                join RECRUIT_TB as c on b.re_idx = c.re_idx 
                join MEMBER_COMPANY_TB as d on c.co_idx = d.me_c_idx 
                where me_n_idx = ?
                order by re_ap_idx desc";
        $bind = array(
            $me_n_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }
}