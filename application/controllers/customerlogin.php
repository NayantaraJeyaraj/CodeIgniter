<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerlogin extends CI_Controller {

    public  function _construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('login');
    }

    public function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->view('customer');
    }


    public function sign_in()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules('email', 'email','valid_email|max_length[40]|required');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[15]|min_length[6]');

        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->check_database($email, $password);
        }

    }

    public function check_database($email, $password)
    {
        $this->load->model('login');
        $result = $this->login->signin($email, $password);

        if($result)
        {
            $this->load->view('customer');

        }
        else
        {
            $this->load->view('cust_login');
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}
?>