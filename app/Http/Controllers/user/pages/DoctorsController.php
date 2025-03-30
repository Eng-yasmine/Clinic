<?php

namespace App\Http\Controllers\user\pages;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class DoctorsController extends Controller
{
    public function index()
    {

        $doctors = Doctor::with('major')->get();

        // $doctors = Doctor::findOrFail($id);
        return view('home', compact('doctors'));
    }
    public function index2()
    {

        $doctors = Doctor::with('major')->get();

        // $doctors = Doctor::findOrFail($id);
        return view('user.pages.doctors', compact('doctors'));
    }


    public function Store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|min:20',
            'email'=>'required|email|unique:user,email',
            'phone'=>'required|regex:/^\+?\d{10,15}$/',
            'doctor_id'=>'required|exists:doctors,id',
            'major_id'=>'required|exists:majors,id',

        ]);
        // $user = new User();
        // $user->name =$request->name ;
        // $user->email = $request->email;
        // $user->phone = $request->phone;

        //return redirect()->route('user.create')->with('success','your appointment has been successfully');



    }


    public function create($id)
    {
        $doctor = Doctor::with('major')->findOrFail($id);
        return view('user.pages.create', compact('doctor'));
    }
}
