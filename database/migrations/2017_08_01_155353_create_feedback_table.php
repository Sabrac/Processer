<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function(Blueprint $table) {
            $table->increments('fb_id');
            $table->integer('fb_p_id');
            $table->string('fb_title', 100);
            $table->integer('fb_type');
            $table->string('fb_description', 255);
            $table->integer('fb_status');
            $table->dateTimeTz('fb_receive_date');
            $table->dateTimeTz('fb_send_date');
            $table->dateTimeTz('fb_deadline');
            $table->boolean('fb_flg');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
