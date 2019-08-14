<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionVotes extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'question_votes';
    public function question() {
        return $this->belongsTo('Question');
    }
}
