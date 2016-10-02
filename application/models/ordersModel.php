<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:38 PM
 */
class ordersModel extends CI_Model
{
    public function getAllOrdersForBreakfast()
    {
        $this->db->select('*');
        $this->db->where(array('meal '=>"breakfast",'orderPlacedTime', date("Y/m/d")));
        $q = $this->db->get('orders');
        $res = $q->result_array();
        return $res;
    }

    public function getAllOrdersForLunch()
    {
        $this->db->select('*');
        $this->db->where(array('meal '=>"lunch",'orderPlacedTime', date("Y/m/d")));
        $q = $this->db->get('orders');
        $res = $q->result_array();
        return $res;
    }

    public function getAllOtherOrders()
    {
        $this->db->select('*');
        $this->db->where(array('meal '=>"other",'orderPlacedTime', date("Y/m/d")));
        $q = $this->db->get('orders');
        $res = $q->result_array();
        return $res;
    }

}