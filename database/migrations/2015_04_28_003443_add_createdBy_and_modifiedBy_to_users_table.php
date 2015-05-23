<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedByAndModifiedByToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{

			//foreign keys
			$table->integer('createdBy')->unsigned()->default('1');
			$table->foreign('createdBy')->references('id')->on('users');
			$table->integer('modifiedBy')->unsigned()->default('1');
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
		Schema::table('users', function(Blueprint $table)
		{

			$table->dropColumn('createdBy');
			$table->dropColumn('modifiedBy');
		});
	}

}
