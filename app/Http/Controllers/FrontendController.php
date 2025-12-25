<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

   $skills= Skill::all();
    $name = "sonjit";

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
    
    }
}
