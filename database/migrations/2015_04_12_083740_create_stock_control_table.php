<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockControl', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->smallInteger('sell');
			$table->smallInteger('quantity');
			$table->string('description');
			$table->integer('type')->unsigned();
			$table->foreign('type')->references('id')->on('itemTypes');
			$table->boolean('fromStock');


			//nullables
			$table->string('itemId')->nullable();
			$table->smallInteger('cost')->nullable();
			$table->string('serviceId')->nullable();
			$table->string('adjustmentId')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockControl');
	}

}
