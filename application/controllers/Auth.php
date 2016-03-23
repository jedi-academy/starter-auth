<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 23/03/2016
 * Time: 10:34 AM
 */
class Auth extends Application {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    function index() {
        $this->data['pagebody'] = 'login';
        $this->render();
    }
}