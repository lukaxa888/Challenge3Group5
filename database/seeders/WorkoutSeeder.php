<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $workouts = [
            "Spinning" => "Indoor cycling, often also called spinning, as an organized sport ,
             is a form of exercise with classes focusing on endurance, strength, intervals, 
             high intensity"  ,
             "Aqua Gym" => "Is the performance of aerobic exercise in water such as in a swimming pool",
             "Zumba" => "Dance fitness classes that are fun, energetic, and make you feel amazing",
            "Crossfit" =>"A form of high intensity interval training, CrossFit is a strength and conditioning workout 
            that is made up of functional movement performed at a high intensity level. ",
            "Tennis" => "Tennis: Tennis is a racket sport that can be played individually against a single opponent 
            (singles) or between two teams of two players each (doubles).",
    ];
        $instructors = DB::table('instructors')->get();
        $workoutValues=array_values($workouts);
        $workoutKeys=array_keys($workouts);
        for($i = 0; $i < count($workouts); $i++){
            DB::table('workouts')->insert([
                'name' => $workoutKeys[$i],
                'description' => $workoutValues[$i],
                'instructor_id' => $instructors[$i]->id,
            ]);
        }
    }
}
