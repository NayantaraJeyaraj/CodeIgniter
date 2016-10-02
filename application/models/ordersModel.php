<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:38 PM
 */
class ordersModel extends CI_Model
{
    public function getAllOrdersFor($meal)
    {
        $query = $this->db->query("select * from orders where meal='".$meal."' and stat not like 'dispatched'");
        $res = $query->result_array();
        return $res;
    }

    public function insertNewOrder($data)
    {
        try
        {
            $this->db->insert('orders', $data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
        catch (Exception $exception)
        {
            return false;
        }
    }

    public function getOrderCountForMeal($meal)
    {
        $this->db->select('COUNT(*) AS num');
        $this->db->group_by('meal');
        $this->db->having("meal ='".$meal."'");
        $q = $this->db->get('orders');
        $res = $q->result_array();

        foreach($res as $row)
        {
            return $row['num'];
        }
    }

    public function dispatched($oid)
    {
        $data = array(
            'stat' => "dispatched"
        );

        $this->db->where('oid', $oid);
        $this->db->update('orders', $data);

    }

}