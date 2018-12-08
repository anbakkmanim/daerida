<?php
class JobOfferModel extends CI_Model{
    function customer_jobofferlist(){
        $sql="
            select * 
            from customer 
            where jobsearchYN = 'Y';
        ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function customer_joboffercount(){
    $sql= "
        select count(custName) As cnt 
        from customer 
        where jobsearchYN = 'Y';    
    ";
    $query = $this->db->query($sql);
    $row = $query->row();
    $result = $row->cnt;
    return $result;
    }
}