<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'hour',
    ];
    public function workouts()
    {
        return $this->belongsToMany(Workout::class,'workout_connections','schedule_id','workout_id');
    }
}
