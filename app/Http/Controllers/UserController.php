<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteUser (Request $request, $id){
        $user = User::findOrFail($id);
        $user->forceDelete();

        return redirect('/adminPanel');
    }

    public function registerEdit(Request $request,User $user){
        $user->name = $request->name;
      $user->first_surname = $request->first_surname;
      $user->second_surname = $request->second_surname;
      if($request ->password !=null){
          $user->password=$request->password;
      }else{
          $user->password=$user->password;
      }
      $user->phone_number = $request->phone_number;
      $user->address = $request->address;
      $user->username = $request->username;
      $user->email = $request->email;
      $user->save();
       
        return redirect('/adminPanel');
    }
}
