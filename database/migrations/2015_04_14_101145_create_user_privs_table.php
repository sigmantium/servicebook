<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPrivsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userPrivs', function(Blueprint $table)
		{
			$table->timestamps();

			//foreign keys
			$table->integer('userId')->unsigned();
			$table->foreign('userId')->references('id')->on('users');
			$table->integer('privId')->unsigned();
			$table->foreign('privId')->references('id')->on('privileges');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userPrivs');
	}

}
