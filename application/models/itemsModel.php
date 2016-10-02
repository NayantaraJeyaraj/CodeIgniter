<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:33 PM
 */
class itemsModel extends CI_Model
{

     function __construct()
      {
         // Call the Model constructor
         parent::__construct();
      }
      //we will use the select function
      public function select()
      {
         return $this->db->get('items')->result();
      }
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

    public function getItemData()
    {
        $query = $this->db->get('items');
        return $query;
    }

    public function getItemForCart($item)
    {
       /* $this->db->select('name','price');
        $this->db->where('itemId ',$item);
        $query = $this->db->get('items');
        $res = $query->result_array();*/
       $query = $this ->db->get_where('items',array('itemId '=> $item));
        return  $query;

    }



    public function insertNewItem($data)
    {
        try
        {
            $this->db->insert('items', $data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
        catch (Exception $exception)
        {
            return false;
        }
    }
}