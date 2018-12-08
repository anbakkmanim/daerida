<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MemberModel extends CI_Model {
	/**
	 * 생성자
	 */
	function __construct() {
		parent::__construct();
	}

    function sns_is_auth($param){
	    $sql = "
	        SELECT      count(*) as cnt
	        FROM		customer
			WHERE 		custEmail = ?
	        ";
	    $query = $this->db->query($sql, array($param['custEmail']));
	    $row = $query->row();
	    $result = $row->cnt;
	    $result = $result > 0 ? true : false;
	    return $result;
    }

	/**
	 * 로그인 인증
	 * @param  array  $param custEmail, custPw
	 * @return boolean       로그인 인증 여부
	 */
	function is_auth($param) {
		$sql = "
				SELECT		count(*) as cnt
				FROM		customer
				WHERE 		custEmail = ?
				AND			custPw = md5(?)
				";
		$query = $this->db->query($sql, array($param['custEmail'], $param['custPw']));
		$row = $query->row();
		$result = $row->cnt;
		$result = $result > 0 ? true : false;
		return $result;
	}


	/**
	 * 회원 정보 리턴
	 * @param  Array $param custEmail
	 * @return [type]       customer
	 */
	function get_cust($param) {
		$sql = "
				SELECT		*
				FROM		customer
				WHERE		1=1
				AND		    custEmail = ?
				";
		$query = $this->db->query($sql, array($param['custEmail']));
		$row = $query->row();

		return $row;
	}

	function get_custarray($param){
        $sql = "
				SELECT		*
				FROM		customer
				WHERE		1=1
				AND		    custEmail = ?
				";
        $query = $this->db->query($sql, array($param['custEmail']));
        $row = $query->result_array();
        return $row;
    }

    function get_custarrayidx($param){
        $sql = "
				SELECT		*
				FROM		customer
				WHERE		1=1
				AND		    idx = ?
				";
        $query = $this->db->query($sql, array($param));
        $row = $query->result_array();
        return $row;
    }

	function get_snscust($param){
	    $sql = "
	            SELECT      *
	            FROM        customer
	            WHERE       custEmail = ?
	           ";
	    $query = $this->db->query($sql, array($param['custEmail']));
	    $row = $query->row();
	    return $row;
    }

	/**
	 * 회원 등록
	 * @param  [type] $param [description]
	 * @return [type]        [description]
	 */
	function insert_cust($param) {
		$sql = "
				INSERT INTO customer
									(
									custName,
									custEmail,
									custPw,
									joinDate,
									custGender,
									custTel,
									custbirth,
									joinType
									)
				VALUES		 		(
									?,
									?,
									md5(?),
									now(),
									?,
									?,
									?,
									?
									)
				";
		$bind = array(
					$param['custName'],
					$param['custEmail'],
					$param['custPw'],
					$param['custGender'],
                    $param['custTel'],
                    $param['custbirth'],
                    $param['joinType']
					);
		$result = $this->db->query($sql, $bind);

		return $result;
	}

    function insert_sns($param) {
        $sql = "
				INSERT INTO customer
									(
									custEmail,
									userSnsId,
									custName,
									userImage,
									joinDate,
									joinType
									)
				VALUES		 		(
				                    ?,
									?,
									?,
									?,
									now(),
									?
									)
				";
        $bind = array(
            $param['custEmail'],
            $param['userSnsId'],
            $param['custName'],
            $param['userImage'],
            $param['joinType']
        );
        $result = $this->db->query($sql, $bind);

        return $result;
    }
}