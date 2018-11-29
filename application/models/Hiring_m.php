<?php
/**
 * Created by PhpStorm.
 * User: KMG
 * Date: 2018-11-29
 * Time: 오후 7:34
 */
Class Hiring_m extends CI_Model
{
    function send_resume($param){
        $sql="
            insert into RECRUIT_APPLICATION_TB(
                                              re_idx, 
                                              me_n_id, 
                                              re_ap_info, 
                                              re_ap_date
                                              )
                                              values 
                                              (
                                                ?, 
                                                ?, 
                                                ?, 
                                                ?, 
                                                ?
                                              ); 
            
        ";

        $data = array(
            $param['re_idx'],
            $param['me_n_id'],
            $param['re_ap_info'],
            $param['re_ap_date']
        );
        $query = $this->db->query($sql, $data);
        $result = $query->result_array();
        return $result;
    }

    function read_resume(){
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
}

?>
