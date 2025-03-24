<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
     return view('admin.pages.doctors');
    }
}
