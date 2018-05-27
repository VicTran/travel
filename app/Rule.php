<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        'expense',
        'time',
        'vehicle',
        'range',
        'scenery',
        'tour_id'

    ];
    protected $dates = ['date'];

    public function saveRule($hotel)
    {
        $this->expense = $hotel['expense'];
        $this->time = $hotel['time'];
        $this->vehicle = $hotel['vehicle'];
        $this->range = $hotel['range'];
        $this->scenery = $hotel['scenery'];
        $this->tour_id = $hotel['tour_id'];
        $this->condition = $hotel['expense']."&&".$hotel['time']."&&".$hotel['vehicle']."&&".$hotel['range']."&&".$hotel['scenery'];
        $this->save();
        return $this->id;
    }

    public function updateRule($hotel){

        $this->expense = $hotel['expense'];
        $this->time = $hotel['time'];
        $this->vehicle = $hotel['vehicle'];
        $this->range = $hotel['range'];
        $this->scenery = $hotel['scenery'];
        $this->tour_id = $hotel['tour_id'];
        $this->condition = $hotel['expense']."&&".$hotel['time']."&&".$hotel['range']."&&".$hotel['scenery'];
        $this->save();
        return true;
    }
}
