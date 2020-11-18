<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function categories(){

        //return $this->hasMany('App\Models\Activity');
        return $this->belongsTo(Category::class);
    }
}
