<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itemTypes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->integer('createdBy')->nullable()->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('itemTypes');
	}

}
