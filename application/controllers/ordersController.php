<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/2/2016
 * Time: 12:59 PM
 */
class ordersController extends CI_Controller
{
    public  function _construct()
    {
        parent::__construct();
        $this->load->model('ordersModel');
    }

    public function index()
    {
        $data['orderDetails'] = $this->ordersModel();
    }

    public function viewOrderDetails($oid)
    {
        $data['order'] = $this->model->getOrderItemsOf($oid);
    }
}