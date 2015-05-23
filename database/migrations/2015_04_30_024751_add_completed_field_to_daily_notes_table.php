<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompletedFieldToDailyNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dailyNotes', function(Blueprint $table)
		{
			$table->boolean('completed')->nullable()->default('0');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dailyNotes', function(Blueprint $table)
		{
			$table->dropColumn('completed');
		});
	}

}
