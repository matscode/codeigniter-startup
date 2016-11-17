<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * Description of CI
	 *
	 * @author  Akanji Michael <promatmot@gmail.com>
	 * @package Melio
	 *
	 */
	if (!function_exists('ci')) {
		
		function ci ()
		{
			$ci =& get_instance();
			
			return $ci;
		}
		
	}
	
	
	if (!function_exists('migration_timestamp')) {
		/**
		 * Return valid timestamp format for migration naming
		 *
		 * @return    string
		 */
		function migration_timestamp ()
		{
			return date("YmdHis");
		}
	}
	
	
	if (!function_exists('output_json')) {
		
		function output_json ($data)
		{
			
			$_ci =& get_instance();
			
			return
				$_ci->output
					->set_status_header(200)
					->set_content_type('application/json', 'utf-8')
					->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
			
		}
	}