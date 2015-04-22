<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicleModels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();

			//foreign keys
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('parentMake')->unsigned();
			$table->foreign('parentMake')->references('id')->on('vehicleMakes');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicleModels');
	}

}
