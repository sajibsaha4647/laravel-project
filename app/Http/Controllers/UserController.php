<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
class UserController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
      $this->middleware('superadmin');
  }

  public function index(){
    $alluser=User::WHERE('user_status',1)->orderBy('id','DESC')->get();
    return view('admin.user.all',compact('alluser'));
  }

  public function add(){
    return view('admin.user.add');
  }

  public function view(){
    return view('admin.user.view');
  }





}
