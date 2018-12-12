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
                WHERE   me_n_idx = ?;
        ";

        $query = $this->db->query($sql, array($param['me_n_idx']));

        return $query->result();
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
}
?>