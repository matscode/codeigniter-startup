<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Migrate extends CI_Controller
	{
		
		public function __construct () {
			parent::__construct();
			
			// disable utl usability via http(s)
//		if ( !$this->input->is_cli_request() )
//		{
//			show_404();
//			exit();
//		}
			
			// Load required Library
			$this->load->library('clu');
			$this->load->library('migration');
			// Load required Config File
			$this->load->config('migration');
		}
		
		public function index () {
			// default method on call which will list the versions of migration available..
			// but for now.. its gonna be doing the work of migration installer
			
			// get migration version
			$mig_version = $this->config->item('migration_version');
			//print the current verion of migration used
			$this->utl->response('Migration Version: ' . $mig_version, 'yellow', false, true)->write();
			// do migration
			$migration = $this->migration->current();
			
			if ($migration == $mig_version) {
				$this->utl->response('Migration Installed Successfully', 'green', false, true)->write();
			} elseif ($migration === true) {
				$this->utl->response('Migration not Found', 'red')->write();
			} else {
				$this->utl->response($this->migration->error_string(), 'red')->error();
			}
			
		}
		
		public function run ($version = null) {
			if (!$version || !is_numeric($version)) {
				$this->utl->response('Please specify the Version to Run', 'red')->error();
				exit();
			}
			//print the current verion of migration used
			$this->utl->response('Migration Version: ' . $version, 'yellow', false, true)->write();
			// do migration
			$migration = $this->migration->version($version);
			if ($migration == $version) {
				$this->utl->response('Migration Installed Successfully', 'green', false, true)->write();
			} elseif ($migration == true) {
				$this->utl->response('Migration not Found', 'red')->write();
			} else {
				$this->utl->response($this->migration->error_string(), 'red')->error();
			}
			
		}
		
		public function latest () {
			// do migration
			$migration = $this->migration->latest();
			//print the current verion of migration used
			$this->utl->response('Migration Version: ' . $migration, 'yellow', false, true)->write();
			if ($migration) {
				$this->utl->response('Migration Installed Successfully', 'green', false, true)->write();
			} else {
				$this->utl->response($this->migration->error_string(), 'red')->error();
			}
			
		}
		
		public function undo ($step = 1) {
			// get migration version and decreament by 1
			$mig_version = $this->config->item('migration_version') - $step;
			//print the current verion of migration used
			$this->utl->response("RollBack Migration Version: " . $mig_version, 'yellow', false, true)->write();
			
			$migration = $this->migration->version($mig_version);
			if ($migration == $mig_version) {
				$this->utl->response('Migration Rolled Back Successfully', 'green', false, true)->write();
			} elseif ($migration === true) {
				$this->utl->response('Migration not Found', 'red')->write();
			} else {
				$this->utl->response($this->migration->error_string(), 'red')->error();
			}
			
			
		}
		
		public function exists ($version = null) {
			// check if any migration exists and show all
			$mig = $this->migration->find_migrations();
			if (count($mig) > 0) {
				// check if user set a migration version and return migration name
				if ($version) {
					$version = sprintf("%'03s", $version);
					if (array_key_exists($version, $mig)) {
						$this->utl->response('Version ')->response($version, 'yellow')->response(' exist as ')->response(basename($mig[$version]) . "\n", 'green');
					} else {
						$this->utl->response('Version ', 'red')->response($version, 'yellow')->response(' does not exist' . "\n", 'red');
					}
				} else {
					foreach ($mig as $key => $value) {
						$mig_name_array = explode("_", basename($value), 2);
						$mig_name = end($mig_name_array);
						
						$this->utl->response('Version: ')->response($key, 'yellow', true)->response(' => ')->response($mig_name, 'green', true, true);
						
					}
				}
				// show report
				$this->utl->write();
			} else {
				// error message
				$error_msg = 'No Migration Found';
				// set error message for http out
				$this->utl->response($error_msg, 'red')->error();
			}
		}
		
		public function reset () {
			// set migration version
			$mig_version = 0;
			
			//print the current verion of migration used
			$this->utl->response("Migration Version: " . $mig_version, 'yellow', false, true)->write();
			
			$migration = $this->migration->version($mig_version);
			if ($migration == $mig_version) {
				$msg = 'All Migration Uninstalled Successfully';
				$this->utl->response($msg, 'green', true, true)->write();
			} elseif ($migration == true) {
				$msg = 'No Migration Found';
				$this->utl->response($msg, 'red')->error();
			} else {
				$msg = $this->migration->error_string();
				$this->utl->response($msg, 'red')->error();
			}
			
			
		}
		
	}