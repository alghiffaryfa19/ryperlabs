<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffDivision extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function staff()
    {
        return $this->hasMany('App\Staff');
    }
}
