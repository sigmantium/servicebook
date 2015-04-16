<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFleetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fleets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();

			//nullables
			$table->string('phone')->nullable();
			$table->string('repairerCode')->nullable();
			$table->text('notes')->nullable();
			$table->string('email')->nullable();

			//foreign keys
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fleets');
	}

}
