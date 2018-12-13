<?php
/**
 * Created by PhpStorm.
 * User: KMG
 * Date: 2018-11-29
 * Time: 오후 7:34
 */
Class HiringModel extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    function sendResume($param){
        $sql="
            insert into RECRUIT_APPLICATION_TB(
                                              re_fi_idx, 
                                              me_n_idx, 
                                              re_ap_info
                                              )
                                              values 
                                              (
                                                ?, 
                                                ?, 
                                                ?
                                              ); 
            
        ";

        $data = array(
            $param['re_fi_idx'],
            $param['me_n_idx'],
            $param['re_ap_info']
        );
        $query = $this->db->query($sql, $data);
        return $query;
    }

    function readResume(){
        $sql="
            SELECT *
            FROM RECRUIT_APPLICATION_TB
            INNER JOIN MEMBER_NORMAL_TB 
            ON RECRUIT_APPLICATION_TB.me_n_id = MEMBER_NORMAL_TB.me_n_id;
        ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function listResume($re_idx) {
        $sql = "select * from RECRUIT_APPLICATION_TB as a join MEMBER_NORMAL_TB as b on a.me_n_idx = b.me_n_idx 
                join RECRUIT_FIELD_TB as c on a.re_fi_idx = c.re_fi_idx 
                where c.re_idx = ? and a.re_ap_state = '서류 접수'";
        $bind = array(
            $re_idx
        );
        return $this->db->query($sql, $bind)->result_array();
    }

    function changeResumeStatus($re_ap_idx, $state) {
        $sql = "update RECRUIT_APPLICATION_TB set re_ap_state = ? where re_ap_idx = ?";

        $bind = array(
            $state,
            $re_ap_idx
        );
        return $this->db->query($sql, $bind);
    }
}

?>
