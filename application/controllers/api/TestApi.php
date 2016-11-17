<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * Class Welcome
	 *
	 * @author  Michael Akanji  <matscode@gmail.com>
	 * @link    http://www.michaelakanji.com
	 *
	 */
	class TestApi extends CI_Controller
	{
		
		public function index ()
		{
			
			echo file_get_contents('http://cib.vcom');
			
		}
	}
