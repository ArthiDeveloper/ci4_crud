<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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

        	'user_type' => [
        		'type' => 'ENUM',
  				'constraint' => array('admin','user'),
  				'default'=> "user",
				'null' => FALSE],

        	'name' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 50],

        	'email' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 100],

        	'mobile' => [
        		'type' => 'VARCHAR', 
        		'constraint' => 12],

        	'password' => [
        		'type' => 'TEXT'],

        	'status' => [
        		'type' => 'ENUM',
  				'constraint' => array('entry','email_verified','mobile_verified','active'),
  				'default'=> "entry",
				'null' => FALSE],

        	'email_verified_at datetime default current_timestamp',
        	'mobile_verified_at datetime default current_timestamp',
        	'created_at datetime default current_timestamp',
        	'updated_at datetime default current_timestamp',
        	'deleted_at datetime default current_timestamp'
	        ]
	    );
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
    	$this->forge->dropTable('users');
    }
}
