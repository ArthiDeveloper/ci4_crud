<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserDetails extends Migration
{
    public function up()
    {
       $this->forge->addField([

        	'id' => [
        		'type' => 'INT',
        		'usigned'=>true, 
        		'constraint' => 5, 
        		'unsigned' => true, 
        		'auto_increment' => true],

        	'service_id' => [
        		'type' => 'INT', 
        		'constraint' => 5],

        	'name' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 60],

        	'company_name' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 120],

        	'company_address' => [
        		'type' => 'TEXT'],

			'email_id' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 100],

        	'mobile_num' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 12],

        	'gst_num' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 15],

        	'fssai_num' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 14],

        	'requirement' => [
        		'type' => 'TEXT'],

        	'status' => [
        		'type' => 'ENUM',
  				'constraint' => array('active','deactive'),
  				'default'=> "active",
				'null' => FALSE],

        	'created_at datetime default current_timestamp',
        	'updated_at datetime default current_timestamp',
        	'deleted_at datetime default current_timestamp'
	        ]
	    );
        $this->forge->addKey('id', true);
        $this->forge->createTable('user_details');
    }

    public function down()
    {
        $this->forge->dropTable('user_details');
    }
}
