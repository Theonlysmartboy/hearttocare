<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
    $title ="Home";
    return view('welcome')->with(compact('title'));
  }
  public function about(){
    $title ="About Us";
    return view('about')->with(compact('title'));
  }
  public function gallery(){
    $title ="Gallery";
    return view('gallery')->with(compact('title'));
  }
  public function news(){
    $title ="News";
    return view('news')->with(compact('title'));
  }
  public function campaign(){
    $title ="Campaign";
    return view('campaign')->with(compact('title'));
  }
  public function volunteer(){
    $title ="Volunteer";
    return view('volunteer')->with(compact('title'));
  }
  public function showContactPage(){
    $title ="Conttact Us";
    return view('contact')->with(compact('title'));
  }
}
