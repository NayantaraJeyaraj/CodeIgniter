<?php

class addtocart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('itemsModel');
    }


    public function getItem($item){

        $this->load->model('itemsModel');
        $data['posts'] = $this->itemsModel->getItemForCart($item);
        //return $data[];
        $this->load->view('cart',$data);
    }

    public function addItem(){



        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $quantity= $this->input->post('quantity');
        $total = $price* $quantity;
        //echo $name;
        $this->load->model('ordersModel');
        $result= $this->ordersModel->insertOrderItem($name,$price,$total);

        if($result){

            echo 'items added successfully';
        }

    }


}
?>