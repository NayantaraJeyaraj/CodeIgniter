<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menupageController extends CI_Controller {

    public  function _construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('itemsModel');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->view('index');
    }
    public function getImageOf($item)
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $data['image'] = $this->model->getImageOf($oid);
    }

}
