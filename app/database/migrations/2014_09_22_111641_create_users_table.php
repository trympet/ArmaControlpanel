<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id')->unsigned();
			$table->string('username');
			$table->string('password');
			$table->integer('salt');
			$table->string('email')->default(4);
			$table->string('picture')->default(7);
			$table->string('remember_token');
			$table->boolean('verified')->default('0');
			$table->boolean('disabled')->default('0');
			$table->timestamp('created_at')->default(0);
			$table->timestamp('updated_at')->default(0);
			$table->timestamp('deleted_at')->default(0);
		});
	}

	public function down()
	{
		Schema::dropIfExists('users');
	}
}