<?php

/**
 * Created by PhpStorm.
 * User: jacky
 * Date: 16-03-28
 * Time: 1:25 PM
 */
class Users extends MY_Model
{
    public function __construct() {
        parent::__construct('users', 'id');
    }
}
