<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contactus;
use Carbon\Carbon;
class ContactController extends Controller
{
  public function __construct(){

  }

    public function insert_contact(Request $request){
      $this ->validate($request,[
        'name'=>'required|min:3',
        'email'=>'required',
        'subject'=>'required|min:50',
        'message'=>'required',
      ],[
        'name.required'=>'please enter your name!',
        'name.required'=>'please enter your email!',
        'name.required'=>'please enter your subject!',
        'name.required'=>'please enter your message!',
      ]);
      $alluser=Contactus::insert([
        'conus_name'=>$_POST['name'],
        'conus_email'=>$_POST['email'],
        'conus_sub'=>$_POST['subject'],
        'conus_mess'=>$_POST['message'],
        'created_at'=>Carbon::now(),
      ]);

      if($alluser){
        return redirect('contact')->with('contact_inserted','information inserted successfully!');
      }else{
          return redirect('contact')->with('contact_inserted','information insert faild!');
      }
    }


}
