<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
   public function indexpage(){
    return view('frontend.index');
   }
   public function aboutpage(){
    return view('frontend.about');
   }
}
