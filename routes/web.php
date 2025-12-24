<?php

use App\Models\Skill;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $skills = skill::create([
    //     'name'=>'backend'.rand(1,100),
    //     'sub_skills'=>'HTML,CSS,JavaScript,React,vue.js',
    //     'image'=>'backend.png',
    //     'created_at'=>now(),
    //     'updated_at'=>now(),
    // ]);

    // $skills->save();







   $skills= skill::all();
    
    // dd($skills);
    $name = "sonjit";

    



    //$skills = ['Frontend','Backend','design','Database', 'DevOps','Mobile'];
    // $skills = [
    //     ['Frontend', '💻','HTML CSS JavaScript React vue.js'],
    //     ['Backend','⚙️','PHP Laravel SQL'],
    //     ['Design','🎨','Figma Canva']
    // ];
    $about = "<p>
                    I'm a passionate developer with a love for creating digital experiences
                    that make a difference. With expertise in both frontend and backend technologies,
                    I bring ideas to life through clean, efficient code.
                </p>
                <p>
                    When I'm not coding, you can find me exploring new technologies,
                    contributing to open-source projects, or sharing knowledge with the
                    developer community.
                </p>";

    $ProjectsCompleted = 80;


    return view('app',compact('name','skills','about','ProjectsCompleted'));
});


Route::get('/admins', function(){
    return view('admin');
});

Route::post('/admin/skills', function(Request $request){
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

})->name('admin.skills.store');


// Route::get('/form', function(){
//     return view('form');
// });