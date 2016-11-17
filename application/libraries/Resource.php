<?php if (!defined('BASEPATH'))	exit('No direct script access allowed');
	
	class Resource
	{
		
		private $_ci;
		
		public function __construct() {
			$this->_ci = ci();
		}
		
		public function allow_cors($origin) {
			// setting using the php native function - use the output library after the Tpl library is upgraded
			
			// access is granted to self origin
			header('Access-Control-Allow-Origin: ' . $origin);
			
		}
		
		public function melio_script(){
			// alias for the helper 'melio_script'
			return melio_script();
		}
		
	}
