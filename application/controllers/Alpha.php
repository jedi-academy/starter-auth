<?php

/**
 * Our public content. 
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Alpha extends Application {

	function __construct()
	{
		parent::__construct();
                $this->restrict(array(ROLE_USER, ROLE_ADMIN));
	}

	//-------------------------------------------------------------
	//  Stuff for everyone
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'alpha';
		$this->render();
	}

}
