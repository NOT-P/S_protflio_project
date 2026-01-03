<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
protected $fillable = ['title', 'description', 'technology','image'];
protected $casts = [
    'technology' => 'array',
];

//protected $guarded = [];

} 
