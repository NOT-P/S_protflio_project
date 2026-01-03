<?php

use App\Models\Skill;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontendController;

Route::get('/',[FrontendController::class, 'index']);


Route::controller(AdminController::class)->prefix('/admin')->name('admin.')->group(function(){
    Route::get('/skills', 'skill')->name('skills');
    Route::post('/skills','skillStore')->name('skills.store');


   Route::get('/projects', 'project')->name('projects');
   Route::post('/projects','projectStore')->name('projects.store');
});
