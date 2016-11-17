<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Migration_Sample_schema extends CI_Migration
	{
		
		public function up () {
			
			/*	-----------------------------------
				Drop table 'users' if it exists
				----------------------------------- */
			$this->dbforge->drop_table('active_user', true);
			
			// Table structure for table 'active_user'
			$this->dbforge->add_field(array(
				'active_user_id' => array(
					'type' => 'SMALLINT',
					'constraint' => '2',
					'unsigned' => true
					// ,'auto_increment' => TRUE //its not gonna have more than one row of data
				)
			));
			// $this->dbforge->add_key('active_user_id', TRUE);
			$this->dbforge->create_table('active_user');
			
			// Dumping data for table 'active_user'
			$data = array(
				'active_user_id' => '1'
			);
			$this->db->insert('active_user', $data);
			
			
			/*	-----------------------------------
				Drop table 'users' if it exists
				----------------------------------- */
			$this->dbforge->drop_table('users', true);
			
			// Table structure for table 'users'
			$this->dbforge->add_field(array(
				'user_id' => array(
					'type' => 'MEDIUMINT',
					'constraint' => '8',
					'unsigned' => true,
					'auto_increment' => true
				),
				'user_ip_address' => array(
					'type' => 'VARCHAR',
					'constraint' => '16'
				),
				'user_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '100'
				),
				'user_password' => array(
					'type' => 'VARCHAR',
					'constraint' => '100'
				),
				'user_salt' => array(
					'type' => 'VARCHAR',
					'constraint' => '40'
				),
				'user_email' => array(
					'type' => 'VARCHAR',
					'constraint' => '100'
				),
				'user_forgotten_password_code' => array(
					'type' => 'VARCHAR',
					'constraint' => '40',
					'null' => true
				),
				'user_forgotten_password_time' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
					'null' => true
				),
				'user_remember_code' => array(
					'type' => 'VARCHAR',
					'constraint' => '40',
					'null' => true
				),
				'user_created_on' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
				),
				'user_last_login' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
					'null' => true
				),
				'user_first_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '50',
					'null' => true
				),
				'user_middle_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '50',
					'null' => true
				),
				'user_last_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '50',
					'null' => true
				),
				'user_about' => array(
					'type' => 'TEXT',
					'null' => true
				),
				'user_country' => array(
					'type' => 'VARCHAR',
					'constraint' => '50',
					'null' => true
				),
				'user_company' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
					'null' => true
				),
				'user_phone' => array(
					'type' => 'VARCHAR',
					'constraint' => '20',
					'null' => true
				)
			
			));
			$this->dbforge->add_key('user_id', true);
			$this->dbforge->create_table('users');
			
			// Dumping data for table 'users'
			$data = array(
				'user_id' => '1',
				'user_ip_address' => '127.0.0.1',
				'user_name' => 'matscode',
				'user_password' => '$2y$10$qDJEWCx2LTni5exZO2W.F.JMKETZ.MTMfqrRVvTOEiHrQb9fw.LDC', // admin
				'user_salt' => '',
				'user_email' => 'promatmot@gmail.com',
				'user_forgotten_password_code' => null,
				'user_created_on' => '1463755920',
				'user_last_login' => '1463755920',
				'user_first_name' => 'Michael',
				'user_middle_name' => 'O',
				'user_last_name' => 'Akanji',
				'user_about' => 'I am a Web Developer with 4 years Experience. I am a Product Developer with a love
												to new technology and effective solutions developed in person and team with
												succesful project managment. i started in the world of blogging and moved to
												developing Web Applications with great UI/UX using modern Technology. I also have
												passion to make conforming Designs and Print - (Astonishing Flyers, Reputable
												Business cards, Logo Development, Z-Fold Brochure and more).
												Being a software engineer with lenghty experience, I have the
												ability to refactor spaghetti code into reusable and testable code.',
				'user_country' => 'Nigeria',
				'user_company' => 'Tecrum',
				'user_phone' => '08186074929',
			);
			$this->db->insert('users', $data);
			
			
			/*	-------------------------------------
				Drop table 'project_categories' if it exists
				------------------------------------- */
			$this->dbforge->drop_table('project_categories', true);
			
			// Table structure for table 'project_categories'
			$this->dbforge->add_field(array(
				'category_id' => array(
					'type' => 'SMALLINT',
					'unsigned' => true,
					'auto_increment' => true
				),
				'category_abbrv' => array(
					'type' => 'VARCHAR',
					'constraint' => '30',
					'null' => false
				),
				'category_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '30',
					'null' => false
				),
				'category_description' => array(
					'type' => 'TEXT',
					'null' => true
				),
				'category_created_on' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
					'null' => true
				)
			
			));
			$this->dbforge->add_key('category_id', true);
			$this->dbforge->create_table('project_categories');
			
			// Dumping data for table 'projects'
			$data = array(
				array(
					'category_id' => '1',
					'category_abbrv' => 'webdevelopment',
					'category_name' => 'web development',
					'category_description' => '',
					'category_created_on' => time()
				),
				array(
					'category_id' => '2',
					'category_abbrv' => 'webdesigndevelopment',
					'category_name' => 'web design & development',
					'category_description' => '',
					'category_created_on' => strtotime('+2hours')
				),
				array(
					'category_id' => '3',
					'category_abbrv' => 'graphics',
					'category_name' => 'graphics design',
					'category_description' => '',
					'category_created_on' => strtotime('+5hours')
				),
				array(
					'category_id' => '4',
					'category_abbrv' => 'training',
					'category_name' => 'training',
					'category_description' => '',
					'category_created_on' => strtotime('+6hours')
				)
			);
			$this->db->insert_batch('project_categories', $data);
			
			
			/*	-------------------------------------
				Drop table 'projects' if it exists
				------------------------------------- */
			$this->dbforge->drop_table('projects', true);
			
			// Table structure for table 'projects'
			$this->dbforge->add_field(array(
				'project_id' => array(
					'type' => 'BIGINT',
					'unsigned' => true,
					'auto_increment' => true
				),
				'project_user_id' => array(
					'type' => 'MEDIUMINT',
					'constraint' => '8',
					'unsigned' => true,
					'null' => false
				),
				'project_category' => array(
					'type' => 'SMALLINT',
					'constraint' => '5',
					'null' => false
				),
				'project_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '20',
					'null' => false
				),
				'project_description' => array(
					'type' => 'TEXT',
					'null' => true
				),
				'project_image' => array(
					'type' => 'TINYTEXT',
					'null' => true
				),
				'project_status' => array(
					'type' => 'VARCHAR',
					'constraint' => '20',
					'null' => true
				),
				'project_demo_link' => array(
					'type' => 'TEXT',
					'constraint' => '20',
					'null' => true
				),
				'project_date' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
					'null' => true
				)
			
			));
			$this->dbforge->add_key('project_id', true);
			$this->dbforge->create_table('projects');
			
			// Dumping data for table 'projects'
			$data = array(
				array(
					'project_id' => '1',
					'project_user_id' => '1',
					'project_category' => '1',
					'project_name' => 'MyIsusu',
					'project_description' => 'A periodic money saving system',
					'project_image' => 'uploads/images/ssdsds.png',
					'project_status' => 'completed',
					'project_demo_link' => 'http://myisusu.com',
					'project_date' => time()
				),
				array(
					'project_id' => '2',
					'project_user_id' => '1',
					'project_category' => '1',
					'project_name' => 'VoiceIt',
					'project_description' => 'A Plaintif System',
					'project_image' => 'uploads/images/ssdsds.png',
					'project_status' => 'uncompleted',
					'project_demo_link' => '',
					'project_date' => strtotime('+2month')
				),
				array(
					'project_id' => '3',
					'project_user_id' => '1',
					'project_category' => '2',
					'project_name' => 'Round Neck Model',
					'project_description' => 'Cloth sample developed with coreldraw',
					'project_image' => 'uploads/images/ssdsds.png',
					'project_status' => 'completed',
					'project_demo_link' => '',
					'project_date' => strtotime('+3month')
				)
			);
			$this->db->insert_batch('projects', $data);
			
			
			/*	-------------------------------------
				Drop table 'contact_me' if it exists
				------------------------------------- */
			$this->dbforge->drop_table('contact_me', true);
			
			// Table structure for table 'contact_me'
			$this->dbforge->add_field(array(
				'cm_id' => array(
					'type' => 'BIGINT',
					'unsigned' => true,
					'auto_increment' => true
				),
				'cm_full_name' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
					'unsigned' => true,
					'null' => false
				),
				'cm_email' => array(
					'type' => 'VARCHAR',
					'constraint' => '50',
					'null' => false
				),
				'cm_phone_number' => array(
					'type' => 'VARCHAR',
					'constraint' => '20',
					'null' => false
				),
				'cm_project_budget' => array(
					'type' => 'MEDIUMINT',
					'null' => true
				),
				'cm_description' => array(
					'type' => 'TEXT',
					'null' => true
				),
				'cm_date' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
					'null' => true
				)
			));
			$this->dbforge->add_key('cm_id', true);
			$this->dbforge->create_table('contact_me');
			
			// Dumping data for table 'contact_me'
			$data = array(
				'cm_id' => '1',
				'cm_full_name' => 'Michael Akanji',
				'cm_email' => 'promatmot@gmail.com',
				'cm_phone_number' => '2348186074929',
				'cm_project_budget' => '520',
				'cm_description' => 'A periodic money saving system',
				'cm_date' => time()
			);
			$this->db->insert('contact_me', $data);
			
			
			/*	-----------------------------------------
				 Drop table 'login_attempts' if it exists
				----------------------------------------- */
			$this->dbforge->drop_table('login_attempts', true);
			
			// Table structure for table 'login_attempts'
			$this->dbforge->add_field(array(
				'la_id' => array(
					'type' => 'MEDIUMINT',
					'constraint' => '8',
					'unsigned' => true,
					'auto_increment' => true
				),
				'la_ip_address' => array(
					'type' => 'VARCHAR',
					'constraint' => '16'
				),
				'la_login' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
					'null' => true
				),
				'la_time' => array(
					'type' => 'INT',
					'constraint' => '11',
					'unsigned' => true,
					'null' => true
				)
			));
			$this->dbforge->add_key('la_id', true);
			$this->dbforge->create_table('login_attempts');
			
		}
		
		public function down () {
			$this->dbforge->drop_table('active_user', true);
			$this->dbforge->drop_table('users', true);
			$this->dbforge->drop_table('project_categories', true);
			$this->dbforge->drop_table('projects', true);
			$this->dbforge->drop_table('login_attempts', true);
		}
	}
