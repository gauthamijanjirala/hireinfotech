<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){
        $data = Project::get();
       return view('project.index',compact('data'));
    }
    
    public function postProject(){
        return view('project.post');

    }
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'tag' => 'required|string',
            'amount' => 'required|numeric',
        ]);
                // Store project
            Project::create([
                'title' => $request->title,
                'description' => $request->description,
                'tag' => $request->tag,
                'amount' => $request->amount
            ]);
            // dd('afyhjlfryh');
            return redirect('/')->with('success', 'Project created successfully!');
    

    }
}
