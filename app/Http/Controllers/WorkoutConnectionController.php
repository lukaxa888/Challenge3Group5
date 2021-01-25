<?php

namespace App\Http\Controllers;

use App\Models\WorkoutConnection;
use Illuminate\Http\Request;

class WorkoutConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selectedValue = $request->input('workoutSelect');
        $selectedTd = $request->input('valueTd');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutConnection  $workoutConnection
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutConnection $workoutConnection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutConnection  $workoutConnection
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutConnection $workoutConnection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkoutConnection  $workoutConnection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $newWorkoutConnection = new WorkoutConnection;
        $workoutId = $request->input('workoutSelect');
        
        $scheduleId = $request->input('valueTd');   
        $workoutConnections = WorkoutConnection::where('schedule_id', '=',$scheduleId)->first() ;
        
        if($workoutConnections==null){
            $newWorkoutConnection->workout_id = $workoutId;
            $newWorkoutConnection->schedule_id= $scheduleId;
            $newWorkoutConnection->save();
          
        }else{
            
        $workoutConnections->workout_id = $workoutId;  
        $workoutConnections->save();
        
        }
        
        return redirect()->route('calendarAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutConnection  $workoutConnection
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutConnection $workoutConnection)
    {
        //
    }
}
