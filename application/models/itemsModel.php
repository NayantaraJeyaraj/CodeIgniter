<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:33 PM
 */
class itemsModel extends CI_Model
{
    public function getAllItemsOfType($type)
    {
        $this->db->select('*');
        $this->db->where('type ',$type);
        $q = $this->db->get('items');
        $res = $q->result_array();
        return $res;
    }

    public function getPriceOf($item)
    {
        $this->db->select('price');
        $this->db->where('itemId ',$item);
        $q = $this->db->get('items');
        $res = $q->result_array();
        return $res[0];
    }
}