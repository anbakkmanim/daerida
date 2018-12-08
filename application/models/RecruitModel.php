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
        $sql = "select * from RECRUIT_TB where co_idx = ?";
        $bind = array(
            $co_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }

    /**
     * 채용 공고의 자세한 정보를 반환합니다.
     * @param $re_idx 채용 공고 번호
     * @return mixed SQL Value (Array)
     */
    public function detailRecruit($re_idx) {
        $sql = "select * from RECRUIT_TB where re_idx = ?";
        $bind = array(
            $re_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }
}