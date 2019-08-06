<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['content'];
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'questions';

    public function answer() {
        return $this->hasMany('App\Answer');
    }

}
