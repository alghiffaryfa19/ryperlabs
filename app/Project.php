<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function app_category()
    {
        return $this->belongsTo('App\AppCategory');
    }

    public function team_projects()
    {
        return $this->hasMany('App\TeamProject');
    }

    public function project_galleries()
    {
        return $this->hasMany('App\ProjectGallery');
    }
}
