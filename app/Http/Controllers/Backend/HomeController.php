<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends BackendController
{
   public function index()
   {
   		return view("backend/home/index");
   }
}
