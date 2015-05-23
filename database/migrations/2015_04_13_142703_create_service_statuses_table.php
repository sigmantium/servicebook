<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('serviceStatuses', function(Blueprint $table)
		{
			$table->increments('id');
			// OPTIONS ['booking','new','started','on hold','off site','completed','invoiced','paid']
			$table->string('status');
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
		Schema::drop('serviceStatuses');
	}

}
