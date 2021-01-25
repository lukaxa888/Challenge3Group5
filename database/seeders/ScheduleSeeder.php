<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;
class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 8; $i++) { 
            for($j=8; $j < 24; $j+=2){
                Schedule::create([
                    'date' => $i,
                    'hour' => $j,
                ]);
            }
        //
    }
}

}
