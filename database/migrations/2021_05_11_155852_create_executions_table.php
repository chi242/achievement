<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('goal_id')->nullable();
            $table->foreignId('date_id')->nullable();
            $table->time('execution_start_time')->default('00:00:00');;
            $table->time('execution_times')->default('00:00:00');;
            $table->integer('achievement_rate')->nullable();
            $table->string('review_content')->default('〇〇はできたが○○はできなかった');;
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('executions');
    }
}
