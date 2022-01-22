<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('question', function(Blueprint $table) {
			$table->foreign('quiz_code')->references('id')->on('quiz')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		// Schema::table('quiz', function(Blueprint $table) {
		// 	$table->foreign('question_id')->references('id')->on('question')
		// 				->onDelete('restrict')
		// 				->onUpdate('restrict');
		// });
	}

	public function down()
	{
		Schema::table('question', function(Blueprint $table) {
			$table->dropForeign('question_quiz_code_foreign');
		});
		// Schema::table('quiz', function(Blueprint $table) {
		// 	$table->dropForeign('quiz_question_id_foreign');
		// });
	}
}
