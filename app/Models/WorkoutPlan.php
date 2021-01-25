<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlan extends Model
{
    use HasFactory;


    public function members()
    {
        return $this->hasMany(Member::class);
    }
    public function workoutconnections()
    {
        return $this->hasMany(WorkoutConnection::class);
    }
}
