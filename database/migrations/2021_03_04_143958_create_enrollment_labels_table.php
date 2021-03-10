<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_labels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label_1_course');
            $table->string('label_2_fee');
            $table->string('label_3_date');
            $table->string('label_4_batch_id');
            $table->string('label_5_trainer');
            $table->string('label_6_duration');
            $table->string('label_7_session');
            $table->string('label_8_available_seats');
            $table->string('label_9_venue');
            $table->string('label_10_timings');
            $table->string('label_11_days_count');
            $table->longText('description');
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
        Schema::dropIfExists('enrollment_labels');
    }
}
