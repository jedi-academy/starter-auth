<?php
/**
 * Created by PhpStorm.
 * User: brandon
 * Date: 31/03/16
 * Time: 2:48 PM
 */
class Auth extends Application {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users');
    }

    //-------------------------------------------------------------
    //  Homepage: show home-y stuff
    //-------------------------------------------------------------

    function index()
    {
        $this->data['pagebody'] = 'login';
        $this->render();
    }

    function submit() {
        $key = $_POST['userid'];

        $user = $this->users->get($key);

        if (password_verify($this->input->post('password'),$user->password)) {
            $this->session->set_userdata('userID',$key);
            $this->session->set_userdata('userName',$user->name);
            $this->session->set_userdata('userRole',$user->role);

            redirect('/');
        }

        redirect('/auth/');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }
}