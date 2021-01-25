<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Workout_ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workouts = DB::table('workouts')->get();
        $schedules = DB::table('schedules')->get();

        $workoutsNumber = count($workouts)*2;
        $daysNumber = count($schedules);
        $randomWorkouts =[];
        $days=[];
        for($i = 0;$i<$workoutsNumber;$i++){
            array_push($days,random_int(1, $daysNumber));
        }
        for($i = 0;$i<$workoutsNumber;$i++){
            array_push($randomWorkouts,random_int(1, count($workouts)));
        }

        
        for($i=0;$i<count($days);$i++){
            
            DB::table('workout_connections')->insert([
                'workout_id'=>$randomWorkouts[$i],
                'schedule_id'=>$days[$i],
            ]);
        }


    }
}
