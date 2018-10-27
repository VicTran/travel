<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionDifficultPsychology extends Model
{
    protected $fillable = [
        'content',
        'type_psychology_id'
    ];
    protected $dates = ['date'];

    public function saveQuestionDifficultPsychology($QuestionDifficultPsychology)
    {
        $this->content = $QuestionDifficultPsychology['content'];
        $this->type_psychology_id = $QuestionDifficultPsychology['type_psychology_id'];
        $this->save();
        return $this->id;
    }

    public function updateQuestionDifficultPsychology($QuestionDifficultPsychology){

        $this->content = $QuestionDifficultPsychology['content'];
        $this->type_psychology_id = $QuestionDifficultPsychology['type_psychology_id'];
        $this->save();
        return true;
    }
}
