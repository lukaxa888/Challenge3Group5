<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function workoutplan()
    {
        return $this->belongsTo(WorkoutPlan::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function membershiptype()
    {
        return $this->belongsTo(MembershipType::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
