<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    public function skill(){
        return view('skill');
    }

    public function skillStore(Request $request){
    $request->validate([
        'name' => 'required|string|max:100',
        'sub_skills' => 'required|string|max:255',
        'image' => 'required|max:2048|mimes:png,jpg,svg'
    ]);

    // dd($request->validate(['name']));



    
    if($request->hasFile('image')){
        //$imagePath = $request->file('image')->store('skills','public');

        $fileName = time().'_'.$request->file('image')->getClientOriginalName();
        $imagePath = $request->file('image')->move(public_path('skills'),$fileName);
        $imagePath = 'skills/' .$fileName;
    }else{
        $imagePath = null;
    }
    // dd($imagePath);



    //save to database

    $skill = Skill::create([
        'name' => $request->name,
        'sub_skills' => $request->sub_skills,
        'image' => $imagePath,
    ]);
    
    return redirect()->back()->with('success','Skill added successfully!');

}




#project page----------------?

public function project(){
    
    return view('project' );
}

public function projectStore(Request $request){
    $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'required|string|max:255',
        'technology' => 'required|string',
        'image' => 'required|max:2048|mimes:png,jpg,svg'
        // 'image' => 'required|image|mimes:png,jpg,svg|max:2048'
    ]);

    #image path page----------------?

    if($request->hasFile('image')){
         //$imagePath = $request->file('image')->store('skills','public');

        $fileName = time().'_'.$request->file('image')->getClientOriginalName();
        $imagePath = $request->file('image')->move(public_path('projects'),$fileName);
        $imagePath = 'projects/' .$fileName;
    }else{
        $imagePath = null;
    }

    #save to database---------?

     $project = Project::create([
        'title' => $request->title,
        'description' => $request->description,
        'technology' => $request->technology,
        'image' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Project added successfully!');


    }

}
