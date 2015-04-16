<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('phone');
			$table->boolean('enabled');
			$table->timestamps();

			//nullables
			$table->string('mobile')->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->text('notes')->nullable();

			//foreign keys
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
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
		Schema::drop('contacts');
	}

}
