<?php
class ProFileModel extends CI_Model{

//    유저 정보

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function comp_repr($param){
        $sql ="
                select cust.custName from team
                inner join customer as cust
                on cust.idx = team.reprUserIdx
                where team.reprUserIdx = ?;
                ";
        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

    function comp_intro($param){
        $sql ="
            select introTeam
            from teamProfile
            where teamIdx = ?;
        ";
        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

    function comp_getRow($param){
        $sql ="
            SELECT  *
            FROM company
            WHERE idx = ?
        ";
        $query = $this->db->query($sql, array($param));
        $row = $query->result_array();
        return $row;
    }

    function career_countRow($param){
        $sql = "
            SELECT      count(cU.content)  as cnt
            FROM        userProfile As uP
            LEFT JOIN careerUser As cU
            ON uP.userIdx = cU.userIdx
            where cU.userIdx = ?;
              ";
        $query = $this->db->query($sql, array($param));
        $row = $query->row();
        $result = $row->cnt;
        return $result;
    }

    function career_getRow($param){
        $sql = "
          select cU.* from userProfile As uP
          LEFT JOIN careerUser As cU
          ON uP.userIdx = cU.userIdx
          where cU.userIdx = ?;
            ";
        $query = $this->db->query($sql, array($param));
        $row = $query->result_array();
        return $row;
    }

    function profile_intro($param){
        $sql = "
            select introUser
            from userProfile
            where userIdx = ?;
        ";
        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

    function profile_jobtype($param){
        $sql = "
            select jT.userjobType 
            from userProfile as uPro
            INNER JOIN jobType as jT
            ON uPro.userIdx= jT.userIdx
            where jT.userIdx = ?;
        ";
        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

    function project_countrow($param){
        $sql = "
            select count(*) AS cnt
            from userProfile As uProf
            LEFT JOIN userProject As uProj
            ON uProf.userIdx = uProj.userIdx
            where uProf.userIdx = ?;
        ";
        $query = $this->db->query($sql, array($param));
        $row = $query->row();
        $result = $row->cnt;
        return $result;
    }

    function project_getrow($param){
        $sql = "
            select uProj.projectName, uProj.projectIntro, uProj.projectPicture 
            from userProfile As uProf
            LEFT JOIN userProject As uProj
            ON uProf.userIdx = uProj.userIdx
            where uProf.userIdx = ?;
        ";

        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

    function educationlevel_countrow($param){
        $sql ="
            select count(*) AS cnt
            from userProfile As uProf
            LEFT JOIN educationLevel As eduLevel
            ON uProf.userIdx = eduLevel.userIdx
            where uProf.userIdx = ?;
        ";
        $query = $this->db->query($sql, array($param));
        $row = $query->row();
        $result = $row->cnt;
        return $result;
    }

    function educationlevel_getrow($param){
        $sql = "
            select eduLevel.eduName, eduLevel.eduContent, eduLevel.startDate, eduLevel.endDate, eduLevel.eduLevelPicture 
            from userProfile As uProf
            LEFT JOIN educationLevel As eduLevel
            ON uProf.userIdx = eduLevel.userIdx
            where uProf.userIdx = ?;
        ";

        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

    function tag_countrow($param){
        $sql ="
            select count(pT.tag) as cnt
            from profileTags as pT
            INNER JOIN userProfile as uPro
            ON pT.userIdx = uPro.userIdx
            where pT.userIdx = ?;
        ";
        $query = $this->db->query($sql,array($param));
        $row = $query->row();
        $result = $row->cnt;
        return $result;
    }

    function tag_getrow($param){
        $sql ="
             select pT.tag
            from profileTags as pT
            INNER JOIN userProfile as uPro
            ON pT.userIdx = uPro.userIdx
            where pT.userIdx = ?;
        ";
        $query = $this->db->query($sql,array($param));
        $row = $query->result_array();
        return $row;
    }

//    회사 정보

    function belong_company($param){}

    function belong_team($param){}

}