<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MemberEx_model extends CI_Model {

    //codeigniter model 치면 한글 설명이 잘나와있는데 그 설명에 나오는 메서드들 거의 잘안씀 $this->db->query(쿼리문,들어갈 값)이 진리임.
    /**
     * 생성자
     */
    function __construct() {
        parent::__construct();
    }
    
    //해당 회원정보가 있는지 확인
    public function auth_user($param){
        $sql = "
                   SELECT   count(*) as cnt
                   FROM     test
                   WHERE    m_id = ?
                   AND      m_pw = md5(?);
            ";

        $query = $this->db->query($sql, array($param['m_id'], $param['m_pw']));
        $row = $query->row();
        $result = $row->cnt;
        //해당 쿼리에 맞는값 1보다 크면 true 작으면 false
        $result = $result > 0 ? true : false;

        return $result;
    }
    
    //회원정보 가져옴
    function get_cust($param){
        $sql ="
            SELECT *
            FROM test
            WHERE m_id =?
            ";
        $result = $this->db->query($sql,$param['m_id']);

        $row = $result->row_array();
        //쿼리 결과를 다양한 형식으로 가져올수 있다. 자세한 내용은
        //http://www.ciboard.co.kr/user_guide/kr/database/results.html 에서 확인 이거 많이 헷갈려서 가끔씩 문서 볼때도 있음
        return $row;
    }

    //회원가입
    function register_user($param){
        $sql ="
               INSERT INTO test(
                                m_id, 
                                m_pw, 
                                m_nickname
                                )
                                VALUES
                                (
                                ?,
                                md5(?),
                                ?
                                )
            ";
        $bind = array(
            $param['m_id'],
            $param['m_pw'],
            $param['m_nickname']
            //차례대로 ?에 값이 들어간다. 이런 방법을 뭐라고 했는지 기억이 안난다 ㅎㅎ 아 바인딩
            //비밀번호는 보안을 위해 md5암호화라도 시켜주자.
        );
        $result = $this->db->query($sql,$bind);
        return $result;
        //쿼리 실행결과를 반환해준다.
    }

    //pw nickname 수정
    function modify_pw_nickname($param){
        $sql ="
				UPDATE		test
				SET			m_pw = md5(?),
				            m_nickname = ? 
				WHERE		m_id =?
			";
        $bind = array(
            $param['m_pw'],
            $param['m_nickname'],
            $param['m_id']
        );
        $result = $this->db->query($sql,$bind);
        return $result;
    }

    //멤버 삭제
    function delete($param){
        $sql ="
            DELETE FROM test WHERE m_id = ?;
        ";
        $result = $this->db->query($sql,$param);
        return $result;
    }
}
?>