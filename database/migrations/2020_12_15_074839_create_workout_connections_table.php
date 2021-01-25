<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\Workout_ConnectionSeeder;
class CreateWorkoutConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_id')->references('id')->on('workouts'); 
            $table->foreignId('schedule_id')->references('id')->on('schedules'); 
            $table->timestamps();
        });
        $Workout_ConnectionSeeder = new Workout_ConnectionSeeder;
        $Workout_ConnectionSeeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout_connections');
    }
}
