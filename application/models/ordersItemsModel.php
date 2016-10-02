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
        $query = $this->db->query("select * from orderItems where orderId= ".$oid);
        $res = $query->result_array();
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