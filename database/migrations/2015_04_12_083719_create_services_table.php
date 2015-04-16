<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('priority', ['low','normal','high']);
			$table->enum('type', ['service','repair','both']);
			$table->enum('method', ['pickup','dropoff','onsite']);
			$table->boolean('disposal');
			$table->date('date');
			$table->timestamps();

			//nullables
			$table->time('due')->nullable();
			$table->text('serviceNotes')->nullable();
			$table->text('invoiceNotes')->nullable();
			$table->text('orderNumber')->nullable();
			$table->string('speedo')->nullable();

			//foreign keys
			$table->integer('status')->unsigned();
			$table->foreign('status')->references('id')->on('serviceStatuses');
			$table->integer('createdBy')->unsigned();
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
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services');
	}

}
