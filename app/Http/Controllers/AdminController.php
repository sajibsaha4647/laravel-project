<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        
    }

    public function admin(){
      $saha = user::all()->count();
      return view ('admin.deshboard.home', compact('saha'));
    }

    public function permission(){
      echo"sorry apnar ai page deka jabe na!";
    }



}
