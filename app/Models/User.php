<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function workout_connections()
    {
        return $this->belongsToMany(Workout::class,'workout_plans','workout_connection_id','user_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_surname',
        'second_surname',
        'phone_number',
        'address',
        'email',
        'gender',
        'age',
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function showName(){
        auth()->user();
    }
    
}
