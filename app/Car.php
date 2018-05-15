<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'star',
        'number_people',
        'cary_bag',
        'date',
        'price',
        'description',
        'image_detail_src',
        'image_src'
    ];
    protected $dates = ['date'];

    public function saveCar($car)
    {
        $this->name = $car['name'];
        $this->star = $car['star'];
        $this->number_people = $car['number_people'];
        $this->cary_bag = $car['cary_bag'];
        $this->date = $car['date'];
        $this->price = $car['price'];
        $this->description = $car['txtContent'];

        $this->save();
        return $this->id;
    }

    public function updateCar($car){
        $this->name = $car['name'];
        $this->star = $car['star'];
        $this->number_people = $car['number_people'];
        $this->cary_bag = $car['cary_bag'];
        $this->date = $car['date'];
        $this->price = $car['price'];
        $this->description = $car['txtContent'];

        $this->save();
        return true;
    }
}
