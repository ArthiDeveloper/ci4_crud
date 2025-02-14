<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiceDetails extends Migration
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

        	'service_name' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 150],

        	'service_description' => [
        		'type' => 'TEXT'],

        	'hot' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 20],

        	'warm' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 20],

        	'cold' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 20],

        	'status' => [
        		'type' => 'ENUM',
  				'constraint' => array('enable','disable'),
  				'default'=> "enable",
				'null' => FALSE],
                
        	'created_at datetime default current_timestamp',
        	'updated_at datetime default current_timestamp',
        	'deleted_at datetime default current_timestamp'
	        ]
	    );
        $this->forge->addKey('id', true);
        $this->forge->createTable('service_details');
    }

    public function down()
    {
        $this->forge->dropTable('service_details');
    }
}
