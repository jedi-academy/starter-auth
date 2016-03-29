<?php

/**
 * Our homepage. 
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  Homepage: show home-y stuff
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'homepage';
                var_dump($_SESSION['userRole']);
		$this->render();
	}

}
