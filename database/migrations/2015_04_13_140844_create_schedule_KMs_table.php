<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleKMsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scheduleKMs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('schedule');
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
		Schema::drop('scheduleKMs');
	}

}
