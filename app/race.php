<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class race extends Model
{
    //used to initialize and define the soft deleting 
    //method that currently being used for the model
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'races';

    //to define whether the attribute is fillable or guarded from mass assignable
    // protected $fillable = ['name'];

    //by using guarded = empty array, it means that all attribute is fillable
    protected $guarded = [];

    public function scopeGender($genderLimit){
        return $genderLimit->where('gender', '<', 2);
    }
    public function scopeAge($query, $age){
        return $query->where('age', $age);
    }
}
