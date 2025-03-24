<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
   public function index()
   {
    return view('admin.pages.patients');
   }
}
