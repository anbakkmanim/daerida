<?php
/**
 * Created by PhpStorm.
 * User: Jin
 * Date: 2018-11-24
 * Time: 오전 11:34
 */

class Register_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function register_user($param){
        if($param['me_table'] == "MEMBER_NORMAL_TB") {
            $sql = "
               INSERT INTO ".$param['me_table']."(
                                me_n_id, 
                                me_n_password, 
                                me_n_name,
                                me_n_findpw,
                                me_n_email,
                                me_n_phone,
                                me_n_sido,
                                me_n_isMillitary,
                                me_n_age,
                                me_n_hopeSalary,
                                me_n_profile,
                                me_n_info,
                                me_n_isOpen
                                )
                                VALUES
                                (
                                ?,
                                password_hash(?),
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?
                                )
            ";
            $bind = array(
                $param['me_id'],
                $param['me_password'],
                $param['me_name'],
                $param['me_answer'],
                $param['me_email'],
                $param['me_phone'],
                $param['me_region'],
                $param['me_isMillitary'],
                $param['me_n_age'],
                $param['me_salary'],
                $param['me_profile'],
                $param['me_info'],
                $param['me_n_isOpen']
            );
        } else if ($param['me_table'] == "MEMBER_COMPANY_TB") {
            $sql = "
               INSERT INTO ".$param['me_table']."(
                                me_c_id, 
                                me_c_password, 
                                me_c_name,
                                me_c_manager,
                                me_c_findpw,
                                me_c_email,
                                me_c_phone,
                                me_c_sido,
                                me_c_isMillitary,
                                me_c_benefit,
                                me_c_category,
                                me_c_profile,
                                me_c_salary,
                                )
                                VALUES
                                (
                                ?,
                                password_hash(?),
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?,
                                ?
                                )
            ";
            $bind = array(
                $param['me_id'],
                $param['me_password'],
                $param['me_name'],
                $param['me_c_manager'],
                $param['me_answer'],
                $param['me_email'],
                $param['me_phone'],
                $param['me_region'],
                $param['me_isMillitary'],
                $param['me_c_benefit'],
                $param['me_c_category'],
                $param['me_profile'],
                $param['me_salary']
            );
        }

        $result = $this->db->query($sql,$bind);
        return $result;
    }
}