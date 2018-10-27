<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionNeo extends Model
{
    protected $fillable = [
        'content',
    ];
    protected $dates = ['date'];

    public function saveQuestionNeo($questionNeo)
    {
        $this->content = $questionNeo['content'];
        $this->save();
        return $this->id;
    }

    public function updateQuestionNeo($questionNeo){

        $this->content = $questionNeo['content'];
        $this->save();
        return true;
    }
}
