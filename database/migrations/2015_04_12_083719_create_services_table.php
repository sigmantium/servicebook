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
			$table->timestamps();
			$table->string('rego')->default('TBA');

			//nullables
			$table->text('priority')->nullable()->default('Low');
			$table->text('type')->nullable()->default('Service');
			$table->text('method')->nullable()->default('Drop-Off');
			$table->boolean('disposal')->nullable()->default(0);
			$table->date('date')->nullable();
			$table->time('available')->nullable();
			$table->time('due')->nullable();
			$table->text('serviceNotes')->nullable();
			$table->text('invoiceNotes')->nullable();
			$table->text('orderNumber')->nullable();
			$table->text('assetNumber')->nullable();
			$table->string('speedo')->nullable();
			$table->string('year')->nullable();
			$table->string('vin')->nullable();
			$table->string('series')->nullable();
			$table->string('transmission')->nullable();
			$table->string('body')->nullable();
			$table->string('notes')->nullable();

			//foreign keys
			$table->string('makeId')->nullable();
			$table->foreign('makeId')->references('id')->on('vehicleMakes');
			$table->string('modelId')->nullable();
			$table->foreign('modelId')->references('id')->on('vehicleModels');
			$table->integer('status')->unsigned();
			$table->foreign('status')->references('id')->on('serviceStatuses');
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
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
