<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warehouses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
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
		Schema::drop('warehouses');
	}

}
