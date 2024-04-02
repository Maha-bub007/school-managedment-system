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
   public function admissionpage(){
      return view('frontend.admission');
   
   }
   public function courspage(){
      return view('frontend.cours');
   }
   public function contactpage(){
      return view('frontend.contact');
   }
   public function singleCoursPage(){
      return view('frontend.singlecourse');
   }
   public function loginPage(){
      return view('frontend.login');
   }
   public function registerPage(){
      return view('frontend.register');
   }
}
