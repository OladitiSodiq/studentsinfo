<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    //

    protected $table = 'students';

    protected $fillable = [
      'name', 'mobileNo', 'matricNo', 'email','password','password2', 'level',  'address'
  ];

}
