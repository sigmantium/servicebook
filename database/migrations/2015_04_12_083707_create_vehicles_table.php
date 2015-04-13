<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('rego');
			$table->timestamps();

			//nullable
			$table->string('make')->nullable();
			$table->string('model')->nullable();
			$table->string('year')->nullable();
			$table->string('vin')->nullable();
			$table->string('series')->nullable();
			$table->string('notes')->nullable();

			//foreign keys
			$table->integer('createBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
			$table->integer('vehicleId')->unsigned();
			$table->foreign('vehicleId')->references('id')->on('vehicles');
			$table->integer('contactId')->unsigned();
			$table->foreign('contactId')->references('id')->on('contacts');
			$table->integer('fleetId')->nullable()->unsigned();
			$table->foreign('fleetId')->references('id')->on('fleets');
			$table->integer('companyId')->nullable()->unsigned();
			$table->foreign('companyId')->references('id')->on('companies');
			$table->integer('departmentId')->nullable()->unsigned();
			$table->foreign('departmentId')->references('id')->on('departments');
			$table->integer('scheduleKM')->nullable()->unsigned();
			$table->foreign('scheduleKM')->references('id')->on('scheduleKMs');
			$table->integer('scheduleTime')->nullable()->unsigned();
			$table->foreign('scheduleTime')->references('id')->on('scheduleTimes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicles');
	}

}
