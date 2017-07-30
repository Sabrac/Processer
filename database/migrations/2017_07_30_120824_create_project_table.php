<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function(Blueprint $table) {
            $table->increments('pj_id');
            $table->string('pj_name', 100);
            $table->integer('pj_type');
            $table->integer('pj_status');
            $table->integer('pj_capacity');
            $table->integer('pj_customer');
            $table->integer('pj_assignee');
            $table->dateTimeTz('pj_receive_date');
            $table->dateTimeTz('pj_send_date');
            $table->dateTimeTz('pj_deadline');
            $table->string('pj_comment', 255);
            $table->boolean('pj_flg');
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
        Schema::dropIfExists('project');
    }
}
