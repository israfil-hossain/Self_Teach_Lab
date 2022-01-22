<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_sections', function (Blueprint $table) {
            $table->integer('section_id', true);
			$table->integer('course_id')->nullable();
			$table->string('title', 100)->nullable();
			$table->integer('sort_order')->nullable();
			$table->dateTime('createdOn');
			$table->dateTime('updatedOn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_sections');
    }
}
