<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:46 PM
 */
class ordersItemsModel extends CI_Model
{
    public function getOrderItemsOf($oid)
    {
        $this->db->select('*');
        $this->db->where(array('oid'=>$oid));
        $q = $this->db->get('orderItems');
        $res = $q->result_array();
        return $res;
    }

    public function insertNewOrderItem($data)
    {
        try
        {
            $this->db->insert('orderItems', $data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
        catch (Exception $exception)
        {
            return false;
        }
    }
}