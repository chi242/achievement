<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->text('maingoal')->nullable();
            $table->text('measurable')->nullable();
            $table->text('actionable')->nullable();
            $table->text('competent')->nullable();
            $table->smallInteger('favorite')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->useCurrent()->nullable();
            
            $table->foreignId('user_id')->nullable();
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
        
        Schema::dropIfExists('goals');
    }
}
