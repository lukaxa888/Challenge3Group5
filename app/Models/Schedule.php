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
    public function workoutconnection()
    {
        return $this->belongsTo(WorkoutConnection::class,'schedule_id','id');
    }
}
