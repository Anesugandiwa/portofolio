<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'name_of_project',
        'description',
        'technologies_used',
        'start_date',
        'end_date',
        'project_url',
        'github_url',
        'image'

    ];
}
