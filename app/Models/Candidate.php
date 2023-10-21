<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Candidate extends Model implements AuthenticatableContract
{
    use Authenticatable;
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
