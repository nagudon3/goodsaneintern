<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class race extends Model
{
    use SoftDeletes;
    protected $table = 'races';
    // protected $fillable = ['name'];
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
