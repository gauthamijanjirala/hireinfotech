<?php

namespace App\Http\Controllers;

use App\Models\freelance;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    // public function freelanceproject(){
    //     $data = freelance::get();
    //     return view('project.index',compact('data')); 

    // }
    public function index(){
        $data = freelance::get();
       return view('project.index',compact('data'));
    }

    public function freelanceProject(){
        return view('project.freelance');

    }


    public function store(Request $request)
    {
        dd($request->all());
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'tag' => 'required|string',
            'hour' => 'required',
        ]);
                // Store project
            freelance::create([
                'name' => $request->name,
                'title' => $request->title,
                'tag' => $request->tag,
                'hour' => $request->hour
            ]);
            // dd('afyhjlfryh');
            return redirect('/')->with('success', 'Project created successfully!');
    

    }
}
