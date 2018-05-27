<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'star',
        'img',
        'description',
        'address',
        'phone',
        'email',
        'web_address',
        'date',
        'number_people',
        'hotel_class',
        'cable_tv',
        'telephone_service',
        'room_service',
        'cancellation',
        'price'
    ];
    protected $dates = ['date'];

    public function saveHotel($hotel)
    {
        $this->name = $hotel['name'];
        $this->star = $hotel['star'];
        $this->price = $hotel['price'];
        $this->description = $hotel['description'];
        $this->address = $hotel['address'];
        $this->phone = $hotel['phone'];
        $this->email = $hotel['email'];
        $this->web_address = $hotel['web_address'];
        $this->number_people = $hotel['number_people'];
        $this->hotel_class = $hotel['hotel_class'];
        $this->cable_tv = $hotel['cable_tv'];
        $this->telephone_service = $hotel['telephone_service'];
        $this->room_service = $hotel['room_service'];
        $this->cancellation	 = $hotel['cancellation'];
        $this->date = $hotel['date'];
        $this->save();
        return $this->id;
    }

    public function updateHotel($hotel){

        $this->name = $hotel['name'];
        $this->star = $hotel['star'];
        $this->description = $hotel['description'];
        $this->address = $hotel['address'];
        $this->phone = $hotel['phone'];
        $this->email = $hotel['email'];
        $this->web_address = $hotel['web_address'];
        $this->number_people = $hotel['number_people'];
        $this->hotel_class = $hotel['hotel_class'];
        $this->cable_tv = $hotel['cable_tv'];
        $this->telephone_service = $hotel['telephone_service'];
        $this->room_service = $hotel['room_service'];
        $this->cancellation	 = $hotel['cancellation'];
        $this->date = $hotel['date'];

        $this->save();
        return true;
    }
}
