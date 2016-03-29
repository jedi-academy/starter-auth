<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 23/03/2016
 * Time: 10:32 AM
 */
class Users extends MY_Model {
    public function __construct() {
        parent::__construct('users', 'id');
    }
}