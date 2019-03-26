<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productReview extends Model
{
     public $timestamps = true;
    protected $table = "productReview";
    protected $fillable = [
       'ratingPoint','reviewDescription',
    ];
}
