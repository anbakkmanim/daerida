<?php
class JobSearchModel extends CI_Model{
    function jobhunting_list(){
        $sql = "
            select * 
            from jobHunting 
        ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    function jobhunting_count(){
        $sql = "
            select count(*) As cnt
            from jobHunting 
        ";
        $query = $this->db->query($sql);
        $row = $query->row();
        $result = $row->cnt;

        return $result;
    }
}
?>