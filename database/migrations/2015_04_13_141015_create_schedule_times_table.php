<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scheduleTimes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('schedule');
			$table->timestamps();
			$table->integer('createBy')->nullable()->unsigned();
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
		Schema::drop('scheduleTimes');
	}

}
