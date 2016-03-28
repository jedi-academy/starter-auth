<?php

/**
 * Created by PhpStorm.
 * User: jacky
 * Date: 16-03-28
 * Time: 1:27 PM
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