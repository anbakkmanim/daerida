<?php
/**
 * Created by PhpStorm.
 * User: KMG
 * Date: 2018-12-08
 * Time: 오후 12:16
 */

Class ProfileModel extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    public function getCareer($param){
        $sql = "
                SELECT *
                FROM    CAREER_TB
                WHERE   me_n_idx = ?
                AND     ca_type != 'portfolio';
        ";

        $query = $this->db->query($sql, array($param['me_n_idx']));

        return $query->result();
    }

    public function getHistory($param){
        $sql = "
                SELECT *
                FROM HISTORY_TB
                WHERE me_c_idx = ?
        ";

        $query = $this->db->query($sql, array($param['me_c_idx']));

        return $query->result();
    }

    public function getPortfolio($param){
        $sql = "
                SELECT *
                FROM    CAREER_TB
                WHERE   me_n_idx = ?
                AND     ca_type = 'portfolio';
        ";

        $query = $this->db->query($sql, array($param['me_n_idx']));

        return $query->result();
    }

    public function getOnePortfolio($param){
        $sql = "
                SELECT *
                FROM CAREER_TB
                WHERE ca_idx = ?
        ";

        $query = $this->db->query($sql, array($param['ca_idx']));

        return $query->result_array();
    }

    public function getComData($param){
        $sql = "
                SELECT *
                FROM   MEMBER_COMPANY_TB
                WHERE  me_c_idx = ?;
        ";

        $query = $this->db->query($sql, array($param['me_c_idx']));

        return $query->row();
    }

    public function getCompanyData($me_c_idx) {
        $sql = "
                SELECT *
                FROM   MEMBER_COMPANY_TB
                left outer join FIELD_TB as b on b.me_id = me_c_id 
                left outer join FIELD_SMALL_RF as c on b.fi_s_idx = c.fi_s_idx 
                left outer join FIELD_LARGE_RF as d on c.fi_l_idx = d.fi_l_idx  
                left outer WHERE  me_c_idx = ?;
        ";

        $query = $this->db->query($sql, array($me_c_idx));

        return $query->row();
    }

    public function setField($param, $table){
        if($table == "MEMBER_NORMAL_TB"){
            $sql = "
                SELECT *
                FROM ".$table."
                WHERE me_n_idx = ?
            ";

            $result = $this->db->query($sql, array($param['me_n_idx']));
        } else {
            $sql = "
                SELECT *
                FROM ".$table."
                WHERE me_c_idx = ?
            ";

            $result = $this->db->query($sql, array($param['me_c_idx']));
        }

        $me_id = $result->result_array()[0];

        if($table == "MEMBER_NORMAL_TB"){
            $me_id = $me_id['me_n_id'];
        } else {
            $me_id = $me_id['me_c_id'];
        }

        $sql = "
                SELECT *
                FROM FIELD_TB
                WHERE  me_id = ?
        ";

        $result = $this->db->query($sql, array($me_id));
        $result = $result->row();
        if($result == null) {
            $sql = "
                    INSERT INTO FIELD_TB(
                                          fi_s_idx,
                                          me_id
                                          )
                                          VALUES
                                          (
                                          ?,
                                          ?
                                          )
            ";
        }else{
            $sql = "
                    UPDATE FIELD_TB
                    SET fi_s_idx = ?
                    WHERE me_id = ?
            ";
        }

        $result = $this->db->query($sql, array($param['me_sfield'], $me_id));

        return $result;
    }

    public function getUserData($me_n_idx) {
        $sql = "
                select * from MEMBER_NORMAL_TB 
                left outer join FIELD_TB as b on me_id = me_n_id 
                left outer join FIELD_SMALL_RF as c on b.fi_s_idx = c.fi_s_idx 
                left outer join FIELD_LARGE_RF as d on c.fi_l_idx = d.fi_l_idx  
                where me_n_idx = ?;
        ";

        $query = $this->db->query($sql, array($me_n_idx));

        return $query->row();
    }

    public function getFollowData($param){
        $sql = "
                SELECT *
                FROM   MEMBER_FOLLOW_TB
                WHERE  me_n_idx = ?
                AND    me_c_idx = ?;
        ";

        $query = $this->db->query($sql, array($param['me_n_idx'], $param['me_c_idx']));

        if($query->row() == null){
            return false;
        }else{
            return true;
        }
    }

    public function setProfileCompany($param){
        if(isset($param['me_c_profile'])) {
            $sql = "
                  UPDATE  MEMBER_COMPANY_TB
                  SET
                  me_c_manager = ?,
                  me_c_name = ?,
                  me_c_email = ?,
                  me_c_phone = ?,
                  me_c_profile = ?,
                  me_c_salary = ?,
                  me_c_sido = ?,
                  me_c_isMilitary = ?,
                  me_c_benefit = ?,
                  me_c_info = ?
                  WHERE
                  me_c_idx = ?
            ";

            $bind = array(
                $param['me_c_manager'],
                $param['me_c_name'],
                $param['me_c_email'],
                $param['me_c_phone'],
                $param['me_c_profile'],
                $param['me_c_salary'],
                $param['me_c_sido'],
                $param['me_c_isMilitary'],
                $param['me_c_benefit'],
                $param['me_c_info'],
                $param['me_c_idx']
            );
        } else {
            $sql = "
                  UPDATE  MEMBER_COMPANY_TB
                  SET
                  me_c_manager = ?,
                  me_c_name = ?,
                  me_c_email = ?,
                  me_c_phone = ?,
                  me_c_salary = ?,
                  me_c_sido = ?,
                  me_c_isMilitary = ?,
                  me_c_benefit = ?,
                  me_c_info = ?
                  WHERE
                  me_c_idx = ?
            ";

            $bind = array(
                $param['me_c_manager'],
                $param['me_c_name'],
                $param['me_c_email'],
                $param['me_c_phone'],
                $param['me_c_salary'],
                $param['me_c_sido'],
                $param['me_c_isMilitary'],
                $param['me_c_benefit'],
                $param['me_c_info'],
                $param['me_c_idx']
            );
        }


        $result = $this->db->query($sql, $bind);
        return $result;
    }

    public function setProfileNormal($param){
        if(isset($param['me_n_profile'])) {
            $sql = "
                    UPDATE MEMBER_NORMAL_TB
                    SET
                    me_n_name = ?,
                    me_n_email = ?,
                    me_n_phone = ?,
                    me_n_sido = ?,
                    me_n_isMilitary = ?,
                    me_n_age = ?,
                    me_n_hopeSalary = ?,
                    me_n_profile = ?,
                    me_n_info = ?,
                    me_n_isOpen = ?,
                    me_n_findpw = ?,
                    me_n_gender = ?
                    WHERE
                    me_n_idx = ?
            ";

            $bind = array(
                $param['me_n_name'],
                $param['me_n_email'],
                $param['me_n_phone'],
                $param['me_n_sido'],
                $param['me_n_isMilitary'],
                $param['me_n_age'],
                $param['me_n_hopeSalary'],
                $param['me_n_profile'],
                $param['me_n_info'],
                $param['me_n_isOpen'],
                $param['me_n_answer'],
                $param['me_n_gender'],
                $param['me_n_idx']
            );
        } else {
            $sql = "
                    UPDATE MEMBER_NORMAL_TB
                    SET
                    me_n_name = ?,
                    me_n_email = ?,
                    me_n_phone = ?,
                    me_n_sido = ?,
                    me_n_isMilitary = ?,
                    me_n_age = ?,
                    me_n_hopeSalary = ?,
                    me_n_info = ?,
                    me_n_isOpen = ?,
                    me_n_findpw = ?,
                    me_n_gender = ?
                    WHERE
                    me_n_idx = ?
            ";

            $bind = array(
                $param['me_n_name'],
                $param['me_n_email'],
                $param['me_n_phone'],
                $param['me_n_sido'],
                $param['me_n_isMilitary'],
                $param['me_n_age'],
                $param['me_n_hopeSalary'],
                $param['me_n_info'],
                $param['me_n_isOpen'],
                $param['me_n_answer'],
                $param['me_n_gender'],
                $param['me_n_idx']
            );
        }

        $result = $this->db->query($sql, $bind);
        return $result;
    }

    public function addCareer($param){
        if(isset($param['ca_image'])) {
            $sql = "
                INSERT INTO CAREER_TB(
                        me_n_idx,
                        ca_career,
                        ca_info,
                        ca_type,
                        ca_image        
                        )
                        VALUES
                        (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                        )
            ";

            $bind = array(
                $param['me_n_idx'],
                $param['ca_career'],
                $param['ca_info'],
                $param['ca_type'],
                $param['ca_image']
            );
        } else {
            $sql = "
                INSERT INTO CAREER_TB(
                        me_n_idx,
                        ca_career,
                        ca_info,
                        ca_type    
                        )
                        VALUES
                        (
                        ?,
                        ?,
                        ?,
                        ?
                        )
            ";

            $bind = array(
                $param['me_n_idx'],
                $param['ca_career'],
                $param['ca_info'],
                $param['ca_type']
            );
        }
        $result = $this->db->query($sql, $bind);
        return $result;
    }

    public function delCareer($param){
        $sql = "
                DELETE FROM CAREER_TB
                WHERE
                ca_idx = ?
                AND 
                me_n_idx = ?
        ";

        $bind = array(
            $param['ca_idx'],
            $param['me_n_idx']
        );

        $result = $this->db->query($sql, $bind);
        return $result;
    }

    public function getCompanyQnA($param){
        $sql = "SELECT *
                FROM COMPANY_QNA_TB as a
                JOIN MEMBER_NORMAL_TB as b on a.me_n_idx = b.me_n_idx
                JOIN MEMBER_COMPANY_TB as c on a.me_c_idx = c.me_c_idx
                WHERE a.me_c_idx = ?
        ";

        $result = $this->db->query($sql, array($param['me_c_idx']));
        return $result->result_array();
    }

    public function addQuestion($param){
        $sql = "INSERT INTO COMPANY_QNA_TB(
                              me_c_idx,
                              me_n_idx,
                              co_qna_content
                              )
                              VALUES
                              (
                              ?,
                              ?,
                              ?
                              )
        ";

        $bind = array(
            $param['me_c_idx'],
            $param['me_n_idx'],
            $param['qna_question']
        );

        $result = $this->db->query($sql, $bind);
        return $result;
    }

    public function addAnswer($param){
        $sql = "UPDATE COMPANY_QNA_TB
                SET co_qna_answer = ?
                WHERE co_qna_idx = ?
        ";

        $result = $this->db->query($sql,array($param['qna_answer'],$param['qna_idx']));
        return $result;
    }

    public function addHistory($param){
        $sql = "INSERT INTO HISTORY_TB
                (
                me_c_idx,
                hi_year,
                hi_content
                )
                VALUES
                (
                ?,
                ?,
                ?
                )
        ";

        $bind = array(
            $param['me_c_idx'],
            $param['hi_year'],
            $param['hi_content'],
        );

        $result = $this->db->query($sql, $bind);
        return $result;
    }
}
?>