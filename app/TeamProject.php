<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamProject extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
