<?php

namespace App\Http\Controllers\admin\pages;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index(Request $request)
    {
        $majors = Major::paginate(20);
        // $majors = Major::query(); //
        // $search = $request->input('search');
        // if ($search) {
        //     $majors->where("title", "LIKE", "%$search%");
        // }
        return view('admin.pages.majors.index', compact('majors'));
    }
    public function create()
    {
        return view('admin.pages.majors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:5|string|unique:majors,title',
        ]);

        Major::create($request->all());
        return redirect()->route('majors.index')->with('success', 'Title add successfully');
    }

    public function edit($id)
    {
        $major = Major::findOrFail($id);

        return view('admin.pages.majors.edit', compact('major'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255|min:5|string|unique:majors,title'
        ]);
        $major = Major::findOrFail($id);
        $data = $request->except('_token','_method');
        $major->update([
            'title'=>$data,
        ]);
       // dd($request->all());
        return redirect()->route('majors.index')->with('success','title updated successfully');
    }

    public function destroy($id)
    {
        $major =  Major::findOrFail($id);
        $major->delete();

        return redirect()->back()->with('success', 'major deleted successfuuly');
    }
}
