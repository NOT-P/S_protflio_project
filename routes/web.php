<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;
Route::get('/', function () {

    $skills = skill::create([
        'name'=>'backend'.rand(1,100),
        'sub_skills'=>'HTML,CSS,JavaScript,React,vue.js',
        'image'=>'backend.png',
        'created_at'=>now(),
        'updated_at'=>now(),
    ]);
    $skills->save();







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
