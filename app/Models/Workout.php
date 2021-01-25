<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
   
    use HasFactory;

    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }
    public function workoutconnection(){
        return $this->belongsToMany(WorkoutConnection::class,'workout_id','id');
    }
}
