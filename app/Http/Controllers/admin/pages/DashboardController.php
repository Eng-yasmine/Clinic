<?php

namespace App\Http\Controllers\admin\pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Major;

class DashboardController extends Controller
{
    public function index(Major $majors)
    {
      $majors =  Major::with('doctor')->get();

        return view('admin.pages.dashboard',compact('majors'));
    }
}
