<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description');
			$table->string('partNumber');
			$table->timestamps();
			$table->integer('supplier')->unsigned();
			$table->foreign('supplier')->references('id')->on('Suppliers');
			$table->integer('type')->unsigned();
			$table->foreign('type')->references('id')->on('itemTypes');
			$table->integer('createdBy')->unsigned();
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned();
			$table->foreign('modifiedBy')->references('id')->on('users');

			//nullables
			$table->smallinteger('cost')->nullable();
			$table->smallinteger('sell')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
