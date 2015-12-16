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
			$table->smallInteger('cost')->nullable();
			$table->string('task')->nullable();
			$table->boolean('adjustment')->nullable();
			$table->string('adjustmentReason')->nullable();

			$table->integer('itemId')->nullable()->unsigned();
			$table->foreign('serviceId')->references('id')->on('services');

			$table->integer('serviceId')->nullable()->unsigned();
			$table->foreign('serviceId')->references('id')->on('services');

			$table->integer('customerId')->nullable()->unsigned();
			$table->foreign('customerId')->references('id')->on('companies');
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
