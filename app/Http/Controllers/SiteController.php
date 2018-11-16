<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SiteController extends Controller
{

  public function __construct(){

    }

    public function index(){
      return view ('website.home');
    }

    public function about(){
      return view ('website.about');
    }

    public function blog(){
      return view ('website.blog');
    }

    public function single_blog(){
      return view ('website.blog-single');
    }

    public function contact(){
      return view ('website.contact');
    }

    public function portfolio(){
      return view ('website.portfolio');
    }

    public function services(){
      return view ('website.services');
    }

    public function error(){
      return view ('website.404');
    }

}
