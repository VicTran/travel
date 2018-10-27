<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionRiaSec extends Model
{
    protected $fillable = [
        'content',
    ];
    protected $dates = ['date'];

    public function saveQuestionRiaSec($questionRiaSec)
    {
        $this->content = $questionRiaSec['content'];
        $this->save();
        return $this->id;
    }

    public function updateQuestionRiaSec($questionRiaSec){

        $this->content = $questionRiaSec['content'];
        $this->save();
        return true;
    }
}
