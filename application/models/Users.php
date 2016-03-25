<?php

/** 
  * Users Model class
  *
  * Created by Spencer 24/03/2016 03:57:55 pm PDT
  */

class Users extends MY_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct('users', 'id');
    }
}
