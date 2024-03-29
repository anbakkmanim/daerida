<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TeamModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 팀 생성
     * @param $te_name 팀 이름
     * @param $te_info 팀 정보 (소개)
     * @param $fi_l_idx 팀 분야 (대분류)
     * @param $te_isOpen 팀 공개여부
     * @return bool SQL Value 쿼리 성공 여부
     */
    public function createTeam($te_name, $te_info, $fi_l_idx, $te_isOpen) {
        // SQL 문 생성
        $sql = "insert into TEAM_TB (te_name, te_info, fi_l_idx, te_isOpen) values (?, ?, ?, ?)";

        // bind
        $bind = array(
          $te_name,
          $te_info,
          $fi_l_idx,
          $te_isOpen
        );
        // bool로 반환
        return $this->db->query($sql, $bind);
    }
    /**
     * 팀 목록
     * @return array SQL Value 팀 array 값
     */
    public function listTeam() {
        // SQL 문 생성
        $sql = "select a.*, COUNT(b.te_po_idx) post_Count, c.* from TEAM_TB as a left join TEAM_POST_TB as b on a.te_idx = b.te_idx join FIELD_LARGE_RF as c on a.fi_l_idx = c.fi_l_idx where a.te_isOpen = '공개' group by a.te_idx;";

        // array로 반환
        return $this->db->query($sql)->result_array();
    }

    /**
     * 내 팀 목록
     * @param $me_n_idx 일반 사용자 인덱스
     * @return array SQL Value 내 팀 array 값
     */
    public function myTeam($me_n_idx) {
        // SQL 문 생성
        $sql = "select a.*, b.*, d.*, e.*, COUNT(c.te_po_idx) post_Count from TEAM_JOIN_TB as a join TEAM_TB as b on a.te_idx = b.te_idx left join TEAM_POST_TB as c on b.te_idx = c.te_idx 
                join FIELD_SMALL_RF as d on a.fi_s_idx = d.fi_s_idx join FIELD_LARGE_RF as e on d.fi_l_idx = e.fi_l_idx where a.me_n_idx = ? group by b.te_idx";

        $bind = array(
            $me_n_idx
        );
        
        // array로 반환
        return $this->db->query($sql, $bind)->result_array();
    }

    /**
     * @param $te_idx 팀 인덱스
     * @param $me_n_idx 사용자 인덱스
     * @param $fi_s_idx 소분야 아이디
     * @return bool SQL_Value 성공 여부 (Boolean)
     */
    public function joinTeam($te_idx, $me_n_idx, $fi_s_idx) {
        // SQL 문 생성
        $sql = "insert into TEAM_JOIN_TB (te_idx, me_n_idx, fi_s_idx) values (?, ?, ?)";

        // bind
        $bind = array(
            $te_idx,
            $me_n_idx,
            $fi_s_idx
        );

        // bool 로 반환
        return $this->db->query($sql, $bind);
    }

    /**
     * 팀 가입 신청
     * @param $te_idx 팀 아이디
     * @param $me_n_idx 사용자 번호
     * @param $te_a_content 자기 소개
     * @return bool SQL Value 성공 여부
     */
    public function hiringTeam($te_idx, $me_n_idx, $te_a_content) {
        // SQL 문 작성
        $sql = "insert into TEAM_APPLICATION_TB (te_idx, me_n_idx, te_a_idx) values (?, ?, ?)";

        // bind
        $bind = array(
            $te_idx,
            $me_n_idx,
            $te_a_content
        );
        
        // bool 로 반환
        return $this->db->query($sql, $bind);
    }

    /**
     * 팀 포스트 추가
     * @param $te_idx 팀 인덱스
     * @param $me_n_idx 사용자 인덱스
     * @param $te_po_title 포스트 제목
     * @param $te_po_content 포스트 내용
     * @return bool SQL Value 성공 여부 (boolean)
     */
    public function addPost($te_idx, $me_n_idx, $te_po_title, $te_po_content) {
        // SQL 문 생성
        $sql = "insert into TEAM_POST_TB (te_idx, me_n_idx, te_po_title, te_po_content) values (?, ?, ?, ?)";

        // bind
        $bind = array(
            $te_idx,
            $me_n_idx,
            $te_po_title,
            $te_po_content
        );

        // bool 로 반환
        return $this->db->query($sql, $bind);
    }

    /**
     * 포스트 목록
     * @param $te_idx 팀 인덱스
     * @return array SQL Value 팀 포스트 목록
     */
    public function listPost($te_idx) {
        // SQL 문 생성
        $sql = "select a.*, b.me_n_name, b.me_n_profile from TEAM_POST_TB as a join MEMBER_NORMAL_TB as b on a.me_n_idx = b.me_n_idx where te_idx = ?";

        // bind
        $bind = array(
            $te_idx
        );

        // array 로 반환
        return $this->db->query($sql, $bind)->result_array();
    }

    /**
     * @param $te_po_idx 팀 포스트 인덱스
     * @return mixed SQL Value
     */
    public function getPost($te_po_idx) {
        $sql = "select * from TEAM_POST_TB as a join MEMBER_NORMAL_TB as b on a.me_n_idx = b.me_n_idx where te_po_idx = ?";

        $bind = array (
            $te_po_idx
        );

        return $this->db->query($sql, $bind)->result_array();
    }

    public function getAllUser($param){
        $sql = "SELECT * 
                FROM MEMBER_NORMAL_TB
                left outer join FIELD_TB as b on me_id = me_n_id 
                left outer join FIELD_SMALL_RF as c on b.fi_s_idx = c.fi_s_idx 
                left outer join FIELD_LARGE_RF as d on c.fi_l_idx = d.fi_l_idx  
                WHERE me_n_idx NOT IN (SELECT me_n_idx FROM TEAM_JOIN_TB WHERE te_idx = ?);
        ";

        $query = $this->db->query($sql, array($param['te_idx']));
        return $query->result_array();
    }

    public function searchUser($param){
        $sql = "SELECT * 
                FROM MEMBER_NORMAL_TB
                left outer join FIELD_TB as b on me_id = me_n_id 
                left outer join FIELD_SMALL_RF as c on b.fi_s_idx = c.fi_s_idx 
                left outer join FIELD_LARGE_RF as d on c.fi_l_idx = d.fi_l_idx  
                WHERE me_n_name LIKE '%".$param['me_name']."%'
                AND me_n_idx NOT IN (SELECT me_n_idx FROM TEAM_JOIN_TB WHERE te_idx = ?);
        ";

        $query = $this->db->query($sql, array($param['te_idx']));
        return $query->result_array();
    }
}