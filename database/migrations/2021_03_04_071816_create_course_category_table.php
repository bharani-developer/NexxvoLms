<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_category', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('short_description');
            $table->string('summary');
            $table->string('key_feautures');
            $table->string('meta_tittle');
            $table->string('meta_description');
            $table->string('meta_keywords');
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
        Schema::dropIfExists('course_category');
    }
}
