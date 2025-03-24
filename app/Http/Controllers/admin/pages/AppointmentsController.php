<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
   public function index()
   {
return view('admin.pages.Appointments');
   }
}
