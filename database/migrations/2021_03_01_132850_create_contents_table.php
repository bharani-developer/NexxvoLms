<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('email');
            $table->integer('phone_number');
            $table->timestamps();
           
        });
        DB::table('contents')->insert(
            array(
                'facebook' => 'https://www.facebook.com/nexevo',
                'twitter' => 'https://twitter.com/nexevo',
                'linkedin' => 'https://www.linkedin.com/company/nexevo',
                'youtube' => 'https://youtube.com/nexevo',
                'instagram' => 'https://inagram.com/nexevo',
                'email' => 'admin@nexevo.in',
                'phone_number' => '0123456789'
                
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
