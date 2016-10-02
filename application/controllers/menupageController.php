<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menupageController extends CI_Controller {

    public  function _construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('itemsModel');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('itemsModel');
        $data['products'] = $this->itemsModel->select();
        $this->load->view('index',$data);
    }
    public function getItemData($item)
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->data['posts'] = $this->itemsModel->getItemData($item);
    }

}
