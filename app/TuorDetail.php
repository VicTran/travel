<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuorDetail extends Model
{
    protected $fillable = [
        'name',
        'starting_point',
        'price',
        'content'
    ];

    public function saveTourDetail($tour)
    {
        $this->name = $tour['name'];
        $this->starting_point = $tour['name'];
        $this->price = $tour['price'];
        $this->content = $tour['description_default'];
        $this->save();
        return $this->id;
    }


}
