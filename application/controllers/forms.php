<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/<controller>
	 *	- or -  
	 * 		http://example.com/index.php/<controller>/<method>
	 *
	 */
	 
    public function index()
    {
        $this->template->build('forms');
    }
}