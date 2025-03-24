<?php

namespace App\Http\Controllers\user\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        
        return view('user.pages.doctors');
    }
}
