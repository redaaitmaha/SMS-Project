<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('classrooms', function (Blueprint $table) {
			$table->foreign('grade_id')->references('id')->on('grades')
				->onDelete('cascade')
				->onUpdate('cascade');
		});

		Schema::table('sections', function (Blueprint $table) {
			$table->foreign('grade_id')->references('id')->on('grades')
				->onDelete('cascade');
		});

		Schema::table('sections', function (Blueprint $table) {
			$table->foreign('Class_id')->references('id')->on('classrooms')
				->onDelete('cascade');
		});


		Schema::table('my_parents', function (Blueprint $table) {
			$table->foreign('Nationality_Father_id')->references('id')->on('nationalities');
			$table->foreign('Nationality_Mother_id')->references('id')->on('nationalities');
		});
	}










	public function down()
	{
		Schema::table('classrooms', function (Blueprint $table) {
			$table->dropForeign('classrooms_grade_id_foreign');
		});
		Schema::table('sections', function (Blueprint $table) {
			$table->dropForeign('sections_grade_id_foreign');
		});
		Schema::table('sections', function (Blueprint $table) {
			$table->dropForeign('sections_Class_id_foreign');
		});
	}
}
