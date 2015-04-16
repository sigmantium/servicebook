<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockAdjustmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockAdjustments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('reason');
			$table->smallinteger('quantity');
			$table->smallinteger('sell');
			$table->timestamps();

			//nullables
			$table->smallinteger('cost')->nullable();
			$table->string('supplier')->nullable();
			$table->integer('itemId')->unsigned();
			$table->foreign('itemId')->references('id')->on('items');
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockAdjustments');
	}

}
