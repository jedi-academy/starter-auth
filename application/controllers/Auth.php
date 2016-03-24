<?php

/** 
  * Auth Controller class
  *
  * Created by Spencer 24/03/2016 04:03:20 pm PDT
  */

class Auth extends Application {
    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        $this->data['pagebody'] = 'login';
        $this->render();
    }
    function submit()
    {
        $key = $_POST['userid'];
        $user = $this->users->get($key);
        if (password_verify($this->input->post('password'), $user->password))
        {
            $this->session->set_userdata('userID', $key);
            $this->session->set_userdata('userName', $user->name);
            $this->session->set_userdata('userRole', $user->role);
        }
        redirect('/');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
