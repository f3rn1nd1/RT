<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
    public function experiences(){
        return $this->hasMany('App\Models\Experience');
    }
    public function studies(){
        return $this->hasMany('App\Models\Study');
    }
}
