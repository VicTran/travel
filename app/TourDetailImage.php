<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDetailImage extends Model
{
    protected $fillable = [
        'tour_id',
        'path',
    ];

}
