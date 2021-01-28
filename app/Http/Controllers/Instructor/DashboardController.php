<?php
namespace App\Http\Controllers\Instructor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
    return view('/pages/Instructor/dashboard');
  }
 
}