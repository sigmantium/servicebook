<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('privileges', function(Blueprint $table)
		{
			$table->increments('id');
			//['canCreateWarehouse','canCreateScheduleKMs','canCreateScheduleTimes','canCreateUsers','canCreateCompanies','canCreateDepartments','canCreateContacts','canCreateFleets','canCreate']
			$table->string('name');
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
		Schema::drop('privileges');
	}

}
