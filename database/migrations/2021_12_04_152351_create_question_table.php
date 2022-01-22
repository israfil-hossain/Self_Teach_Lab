<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionTable extends Migration {

	public function up()
	{
		Schema::create('question', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('quiz_code')->unsigned();
			$table->string('question', 200)->nullable();
			$table->string('first_option', 100)->nullable();
			$table->string('secound_option', 100)->nullable();
			$table->string('third_option', 100)->nullable();
			$table->string('fourth_option', 100)->nullable();
			$table->tinyInteger('result');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('question');
	}
}
