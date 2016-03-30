<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

	protected $data = array();   // parameters for view components
	protected $id; // identifier for our content

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = "Top Secret Government Site"; // our default title
		$this->errors = array();
		$this->data['pageTitle'] = 'welcome';   // our default page
	}

	/**
	 * Render this page
	 */
	function render()
	{
		$mychoices = array('menudata' => $this->makemenu());
                $this->data['sessionid'] = session_id();
		$this->data['menubar'] = $this->parser->parse('_menubar', $mychoices, true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

		// finally, build the browser page!
		$this->data['data'] = &$this->data;
		$this->parser->parse('_template', $this->data);
	}

	// build menu choices depending on the user role
	/*function makemenu()
	{
		$choices = array();

		$choices[] = array('name' => "Alpha", 'link' => '/alpha');
		$choices[] = array('name' => "Beta", 'link' => '/beta');
		$choices[] = array('name' => "Gamma", 'link' => '/gamma');
                $choices[] = array('name' => "Login", 'link' => './auth');
                $choices[] = array('name' => "Logout", 'link' => '/auth/logout');
		return $choices;
	}*/
        
        function restrict($roleNeeded = null) {
            $userRole = $this->session->userdata('userRole');
            if ($roleNeeded != null) {
                if (is_array($roleNeeded)) {
                    if (!in_array($userRole, $roleNeeded))
                    {
                        redirect("/");
                        return;
                    }
                } else if ($userRole != $roleNeeded) {
                    redirect("/");
                    return;
                }
            }
        }
        
        function makemenu() {
            $choices = array();
            //get role & name from session
            $userRole = $this->session->userdata('userRole');
            // make array, with menu choice for alpha
            $choices[] = array('name' => "Alpha", 'link' => '/alpha');
            if (!in_array($userRole, array(ROLE_USER,ROLE_ADMIN))) {
                // if not logged in, add menu choice to login
                $choices[] = array('name' => "Login", 'link' => './auth');
            } else if ($userRole == ROLE_USER) {
                // if user, add menu choice for beta and logout
                $choices[] = array('name' => "Beta", 'link' => '/beta');
                $choices[] = array('name' => "Logout", 'link' => '/auth/logout');
            } else if ($userRole == ROLE_ADMIN) {
                // if admin, add menu choices for beta, gamma and logout
                $choices[] = array('name' => "Beta", 'link' => '/beta');
                $choices[] = array('name' => "Gamma", 'link' => '/gamma');
                $choices[] = array('name' => "Logout", 'link' => '/auth/logout');
            }
            // return the choices array
            return $choices;
        }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */