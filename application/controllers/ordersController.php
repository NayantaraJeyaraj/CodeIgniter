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

    }

    public function getOrders($meal)
    {
        $this->load->model('ordersModel');
        $this->load->model('usersModel');

        $orderCount['breakfastCount'] = $this->ordersModel->getOrderCountForMeal("breakfast");
        $orderCount['lunchCount'] = $this->ordersModel->getOrderCountForMeal("lunch");
        $orderCount['otherCount'] = $this->ordersModel->getOrderCountForMeal("other");


        $data['orderDetails'] = $this->setTable($this->ordersModel->getAllOrdersFor($meal));

        $this->load->view('dashboard');
        $this->load->view('ordersHeader',$orderCount);
        $this->load->view('orders',$data);
    }

    public function viewOrderDetails($oid)
    {
        $this->load->model('ordersModel');
        $data['order'] = $this->model->getOrderItemsOf($oid);
    }

    private function setTable($orders)
    {
        $this->load->model('usersModel');
        $table = array();
        $count = 0;
        foreach($orders  as $row)
        {
            $row['name'] = $this->usersModel->getUserName($row['user']);
            $table[$count] = $row;
            $count++;
        }

        return $table;
    }

    public function dispatched($oid,$meal)
    {
        $this->load->model('ordersModel');
        $this->ordersModel->dispatched($oid);

        header("Location: ".base_url('index.php/ordersController/getOrders/'.$meal));

    }
}