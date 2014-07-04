<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

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
        $this->template->title('About')->build('welcome_message');
    }
}