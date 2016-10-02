<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerlogin extends CI_Controller {

    public  function _construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('login_model');
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

        $this->form_validation->set_rules('username', 'username','max_length[40]|required');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[15]|min_length[6]');

        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $username = $this->input->post('username');
            //$password = md5($this->input->post('password'));
            $password = $this->input->post('password');
            $this->check_database($username, $password);
        }

    }

    public function check_database($username, $password)
    {
        $this->load->model('login_model');
        $result = $this->login_model->login($username, $password);

        if($result)
        {
            $this->load->view('dashboard');

        }
        else
        {
            $this->load->view('customer');
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}
?>