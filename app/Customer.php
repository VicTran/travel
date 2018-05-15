<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'birthdate',
        'gender',
        'email'
    ];
    public function saveCustomer($tour)
    {
        $this->first_name = $tour['first_name'];
        $this->last_name = $tour['last_name'];
        $this->phone = $tour['phone'];
        $this->email = $tour['email'];
        $this->birthdate = $tour['birthdate'];
        $this->gender = $tour['gender'];
        $this->save();
        return $this->id;
    }

    public function updateCustomer($tour){
        $this->first_name = $tour['first_name'];
        $this->last_name = $tour['last_name'];
        $this->phone = $tour['phone'];
        $this->email = $tour['email'];
        $this->birthdate = $tour['birthdate'];
        $this->gender = $tour['gender'];
        $this->save();
        return true;
    }
}
