<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updateUser = User::find(Auth::user()->id);

        $updateUser->name = $request->name;

        $updateUser->first_surname = $request->first_surname;

        $updateUser->second_surname = $request->second_surname;

        $updateUser->role = $updateUser->role;
        if($request->password!=null){
            $updateUser->password = $request->password;
        }else{
            $updateUser->password =  $updateUser->password;
        }
        $updateUser->phone_number = $request->phone_number;

        $updateUser->gender = $request->gender;

        $updateUser->address = $request->address;

        $updateUser->username = $request->username;

        $updateUser->email = $request->email;
        
        $updateUser->age = $request->age;
        $updateUser->save();
       return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return redirect('/');
        
        
    }
}
