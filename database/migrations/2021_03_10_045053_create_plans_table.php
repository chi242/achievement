<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('goal_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('plan_content')->default('○○をする');
            $table->time('plan_start_time')->default('00:00:00');
            $table->time('plan_times')->default('00:00:00');
            $table->date('selected_date')->default('2000-01-01');
            $table->time('reflection_start_time')->default('00:00:00');
            $table->time('reflection_times')->default('00:00:00');
            $table->string('reflection_content')->default('未記入');
            $table->smallInteger('status')->default('0');
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
        Schema::dropIfExists('plans');
    }
}
