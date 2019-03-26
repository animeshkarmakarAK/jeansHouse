<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jeanserProduct extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     public $timestamps = true;
    protected $table = "product";
    protected $fillable = [
        'name', 'category', 'size', 'price' ,'color','description', 'image'
    ];


    /**
     * The attributes that should be hidden for arrays.
          * @var array
     */

}
