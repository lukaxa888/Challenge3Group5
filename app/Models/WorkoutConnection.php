<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutConnection extends Model
{
    use HasFactory;
    


  
    public function workouts()
    {

        return $this->hasMany(Workout::class,'id','workout_id');
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class,'id','schedule_id');
    }
    public function workoutplan(){
        return $this->belongsTo(WorkoutPlan::class);
    }
}
