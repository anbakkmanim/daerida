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
}

?>
