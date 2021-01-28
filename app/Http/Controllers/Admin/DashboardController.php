<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
    return view('/pages/Admin/dashboard');
  }
  public function returnUsers(){
    $users = User::all();
    return view('/pages/adminPanel')->with('users',$users);
  }
  public function returnUsersEdit(){
    $users = User::all();
    return view('/pages/editPanel')->with('users',$users);
  }
    public function returnUserEdit(Request $request, $id){
      //$user = User::find(auth()->user()->id);
      $user = User::findOrFail($id);
      
      return view('/pages/editUser', compact('user'));
    }
  
}