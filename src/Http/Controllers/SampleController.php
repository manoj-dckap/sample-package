<?php

namespace Manoj\Sample\Http\Controllers;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{
  public function index(){
      return view('sample::sample');
  }
}