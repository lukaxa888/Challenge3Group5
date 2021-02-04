<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
   
    use HasFactory;

    public function instructors()
    {
        return $this->hasOne(Instructor::class);
    }
    public function schedules(){
        return $this->belongsToMany(Schedule::class, 'workout_connections','workout_id','schedule_id');
    }
    public function workoutconnection(){
        return $this->belongsToMany(WorkoutConnection::class,'workout_id','id');
    }
}
