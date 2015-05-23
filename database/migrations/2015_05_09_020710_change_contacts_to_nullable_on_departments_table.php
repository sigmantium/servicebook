<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeContactsToNullableOnDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departments', function(Blueprint $table)
		{

			$table->integer('primaryContact')->unsigned()->nullable()->change();
			$table->integer('accountsContact')->unsigned()->nullable()->change();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departments', function(Blueprint $table)
		{
			$table->integer('primaryContact')->unsigned()->change();
			$table->integer('accountsContact')->unsigned()->change();
		});
	}

}
