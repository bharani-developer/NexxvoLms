<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('course_tittle');
            $table->string('course_name');
            $table->integer('course_category_id')->unsigned();
            $table->foreign('course_category_id')->references('id')->on('course_category');
            $table->string('course_shortname');
            $table->string('course_video_url');
            $table->string('course_logo');
            $table->integer('course_trainer_experience');
            $table->string('course_professional_enrolled');
            $table->integer('course_rating');   
            $table->longText('course_short_description');
            $table->integer('course_delivered_by');
            $table->string('course_delivered_by_text');
            $table->string('course_intro_logo_1');
            $table->string('course_intro_logo_2');
            $table->string('course_summary_tittle');
            $table->longText('course_review_schema_desc');
            $table->string('course_summary_text');
            $table->string('course_file');
            $table->string('course_content');
            $table->string('course_seo_meta_tittle');
            $table->longText('course_meta_description');
            $table->string('course_meta_keyword');
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
        Schema::dropIfExists('courses');
    }
}
