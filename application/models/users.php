<?php
/**
 * Created by PhpStorm.
 * User: jojoman46
 * Date: 2016-03-23
 * Time: 10:07 AM
 */
class Users extends MY_Model {
    public function __construct() {
        parent::__construct('users', 'id');
    }
}
