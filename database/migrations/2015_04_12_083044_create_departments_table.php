<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->boolean('enabled');
			$table->timestamps();
			
			//Nullables
			$table->text('notes')->nullable();
			$table->string('fax')->nullable();
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->string('suburb')->nullable();
			$table->string('postcode')->nullable();
			$table->string('state')->nullable();

			//foreign keys
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
			$table->integer('primaryContact')->unsigned()->nullable();;
			$table->foreign('primaryContact')->references('id')->on('contacts');
			$table->integer('accountsContact')->unsigned()->nullable();;
			$table->foreign('accountsContact')->references('id')->on('contacts');
			$table->integer('companyId')->nullable()->unsigned();
			$table->foreign('companyId')->references('id')->on('companies');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departments');
	}

}
