<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class login_model extends CI_Model
{
    public  function _construct()
    {
        parent::__construct();
    }

    public function login($username,$password)
    {
        $this->load->database();
        $this->db->select('uid,name,username,pw');//select id,email,password from  table users
        $this->db->from('users');
        $this->db->where('username', $username); //where username == fname attribute of table users AND
        $this->db->where('pw', $password);//where password == password attribute of table users
        $this->db->limit(1);
        $query = $this->db->get();//run the query
        $row = $query->row();

        if($query->num_rows() == 1)//if username and password exits then return result
        {
            $session_data = array(
                'id'    => $row->id,
                'name'  => $row->name,
                'email' => $row->username,
                'type' => 'customer',
                //'type' => 'user',
            );

            $this->set_session($session_data);
            return 'logged_in';
        }
        else
        {
            return false;
        }	//if it doesnot exits then return false
    }

    public function set_session($session_data)
    {
        $sess_data = array(
            'id' 	=> $session_data['id'],
            'name'  => $session_data['name'],
            'email' => $session_data['username'],
            'type'  => $session_data['type'],
            'logged_in' => 1,
            'ip_address'=> $_SERVER['REMOTE_ADDR'],
        );

        $this->session->set_userdata($sess_data);
        $this->user_session($sess_data);

    }

    public function user_session($sess_data)
    {
        $this->db->insert('cisession',$sess_data);

        if($this->db->affected_rows()>0)
        {
            return true;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        //redirect('Nurse/registration', 'refresh');

    }
}
?>