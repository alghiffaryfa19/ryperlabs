<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppCategory extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = ['id'];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
