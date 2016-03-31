<?php

class Alpha extends Application {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'alpha';
		$this->render();
	}

}
