<?php
/**
 * Created by PhpStorm.
 * User: Jin
 * Date: 2018-11-24
 * Time: 오전 11:34
 */

class AuthModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function authUser($param){
        $sql = "
                   SELECT   count(*) as cnt
                   FROM     MEMBER_NORMAL_TB
                   WHERE    me_n_id = ?
                   AND      me_n_password = PASSWORD(?);
            ";

        $query = $this->db->query($sql, array($param['me_id'], $param['me_password']));
        $row = $query->row();
        $normalMember = $row->cnt;

        $normalMember = $normalMember > 0 ? true : false;

        $sql = "
                   SELECT   count(*) as cnt
                   FROM     MEMBER_COMPANY_TB
                   WHERE    me_c_id = ?
                   AND      me_c_password = PASSWORD(?);
            ";

        $query = $this->db->query($sql, array($param['me_id'], $param['me_password']));
        $row = $query->row();
        $companyMember = $row->cnt;

        $companyMember = $companyMember > 0 ? true : false;

        return $normalMember == true ? "MEMBER_NORMAL_TB" : ($companyMember == true ? "MEMBER_COMPANY_TB" : false);
    }

    public function getCust($param){
        $sql = "
                SELECT *
                FROM    ".$param['me_table']."
                WHERE   ".$param['me_type']."id = ?
                AND     ".$param['me_type']."password = PASSWORD(?);
        ";

        $query = $this->db->query($sql, array($param['me_id'], $param['me_password']));

        return $query->row();
    }

    public function getCustAfterLogin($param){
        $sql = "
                SELECT *
                FROM    ".$param['me_table']."
                WHERE   ".$param['me_type']."id = ?
                AND     ".$param['me_type']."password = ?;
        ";

        $query = $this->db->query($sql, array($param['me_id'], $param['me_password']));

        return $query->row();
    }

    public function findId($param){
        $sql = "
                SELECT me_n_id
                FROM MEMBER_NORMAL_TB
                WHERE me_n_email = ?
                AND   me_n_phone = ?
        ";

        $query = $this->db->query($sql, array($param['me_email'], $param['me_phone']));

        $normalMember = $query->row();

        $sql = "
                SELECT me_c_id
                FROM MEMBER_COMPANY_TB
                WHERE me_c_email = ?
                AND   me_c_phone = ?
        ";

        $query = $this->db->query($sql, array($param['me_email'], $param['me_phone']));

        $companyMember = $query->row();

        return $normalMember == null ? $companyMember : $normalMember;
    }

    public function findPassword($param){
        $sql = "
                SELECT me_n_password
                FROM MEMBER_NORMAL_TB
                WHERE me_n_id = ?
                AND   me_n_findPw = ?
        ";

        $query = $this->db->query($sql, array($param['me_id'], $param['me_answer']));

        $normalMember = $query->row();

        $sql = "
                SELECT me_c_password
                FROM MEMBER_COMPANY_TB
                WHERE me_c_id = ?
                AND   me_c_findPw = ?
        ";

        $query = $this->db->query($sql, array($param['me_id'], $param['me_answer']));

        $companyMember = $query->row();

        return $normalMember == null ? $companyMember : $normalMember;
    }
}