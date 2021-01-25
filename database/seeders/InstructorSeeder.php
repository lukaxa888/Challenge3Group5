<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->take(5)->get();
        foreach($users as $user){
            DB::table('instructors')->insert([
                'user_id'=>$user->id,
            ]);
            DB::table('users')->where('id',$user->id)->update(['role' => 2]);
        }
    }
}
