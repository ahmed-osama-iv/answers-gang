<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerVotes extends Model
{
    //

    protected $primaryKey = 'id';
    protected $table = 'answer_votes';

    public function answer() {
        return $this->belongsTo('Answer');
    }

}
