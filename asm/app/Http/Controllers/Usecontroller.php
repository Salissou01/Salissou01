<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usecontroller extends Controller
{
  public function index(){
      return View('user');
  }
}
