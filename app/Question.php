<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Question extends Model
{
    use SoftDeletes ;


    protected $fillable = ['content', 'publisher_id', 'group_id', 'bestanswer_id'];
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'questions';

    public function answer() {
        return $this->hasMany('App\Answer');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function group() {
        return $this->belongsTo('App\Group', 'group_id');
    }

}
