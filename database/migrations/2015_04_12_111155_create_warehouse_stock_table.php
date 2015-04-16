<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warehouseStock', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallinteger('stockOnHand');
			$table->smallinteger('reorderQuantity');
			$table->timestamps();

			//foreign keys
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');
			$table->integer('warehouseId')->unsigned();
			$table->foreign('warehouseId')->references('id')->on('warehouses');
			$table->integer('itemId')->unsigned();
			$table->foreign('itemId')->references('id')->on('items');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('warehouseStock');
	}

}
