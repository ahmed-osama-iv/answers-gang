<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $fillable = ['name', 'description'];

    //----------------Ahmed Osama--------------
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function question() {
        return $this->hasMany('App\Question', 'group_id', 'id');
    }
}
