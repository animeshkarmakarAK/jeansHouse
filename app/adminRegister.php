<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminRegister extends Model
{
    public $timestamps = true;
    protected $table = "admins";
    protected $fillable = [
       'firstname','lastname','email','password'
    ];
}
