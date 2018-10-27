<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExplainQuestionNEO extends Model
{
    protected $fillable = [
        'content',
        'level',
        'type'
    ];
    protected $dates = ['date'];

    public function saveExplainQuestionNEO($ExplainQuestionNEO)
    {
        $this->content = $ExplainQuestionNEO['content'];
        $this->level = $ExplainQuestionNEO['level'];
        $this->type = $ExplainQuestionNEO['type'];
        $this->save();
        return $this->id;
    }

    public function updateExplainQuestionNEO($ExplainQuestionNEO){

        $this->content = $ExplainQuestionNEO['content'];
        $this->level = $ExplainQuestionNEO['level'];
        $this->type = $ExplainQuestionNEO['type'];;
        $this->save();
        return true;
    }
}
