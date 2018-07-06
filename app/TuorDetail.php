<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuorDetail extends Model
{
    protected $fillable = [
        'name',
        'starting_point',
        'price',
        'content',
        'start_date',
        'cartegory_tour',
        'number_booking',
        'days',
        'star'
    ];

    public function saveTourDetail($tour)
    {
        $this->name = $tour['name'];
        $this->starting_point = $tour['starting_point'];
        $this->price = $tour['price'];
        $this->content = $tour['txtContent'];
        $this->date_start = $tour['start_date'];
        $this->cartegory_tour = $tour['cartegory_tour'];
        $this->number_booking = $tour['number_booking'];
        $this->days = $tour['days'];
        $this->star = $tour['star'];
        $this->save();
        return $this->id;
    }

    public function updateTourDetail($tour){
        $this->name = $tour['name'];
        $this->starting_point = $tour['starting_point'];
        $this->price = $tour['price'];
        $this->content = $tour['txtContent'];
        $this->date_start = $tour['start_date'];
        $this->cartegory_tour = $tour['cartegory_tour'];
        $this->number_booking = $tour['number_booking'];
        $this->days = $tour['days'];
        $this->star = $tour['star'];
        $this->save();
        return true;
    }



}
