<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Config extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('config', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',255);
			$table->string('description',255);
			$table->integer('phone',60);
			$table->string('address',255);
			$table->string('email',255);
			$table->string('policy',255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('config', function(Blueprint $table)
		{
			Schema::drop('config');
		});
	}

}
