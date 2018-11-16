<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class MessageController extends Controller{

  public function __construct(){
    $this->middleware('auth');
    $this->middleware('author');
  }

  public function message(){
    $allusers=Contactus::WHERE('conus_status',1)->orderBy('conus_id','desc')->get();
    return view('admin.user.message', compact('allusers'));
  }

  public function mark_as_read($conus_id){
    Contactus::findOrFail($conus_id)->update([
        'conus_status'=>2
    ]);
    return back();
  }

  public function delete($conus_id){
    Contactus::findOrFail($conus_id)->delete();
    return back();
  }

  public function viewview($conus_id){
    $contact_view=Contactus::findOrFail($conus_id);
    return view('admin.user.view',compact('contact_view'));
  }

  public function edit($conus_id){
    $contact_edit=Contactus::findOrFail($conus_id);
    return view('admin.user.edit',compact('contact_edit'));

  }

  public function editedit($conus_id){
    Contactus::findOrFail($conus_id)->update([
      'conus_name'=>$_POST['name'],
      'conus_email'=>$_POST['email'],
    ]);
    return back();
  }











}
