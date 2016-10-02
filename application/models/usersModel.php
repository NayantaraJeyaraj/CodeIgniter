<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:29 PM
 */
class usersModel extends CI_Model
{
    public function getUserName($id)
    {
        $query = $this->db->query("select name from users where uid=".$id);
        $res = $query->result_array();
        return $res[0
        ]['name'];
    }
}