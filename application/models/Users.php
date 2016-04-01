<?php
/**
 * Created by PhpStorm.
 * User: brandon
 * Date: 31/03/16
 * Time: 2:34 PM
 */
class Users extends MY_Model {
    public function __construct() {
        parent::__construct('users', 'id');
    }
}