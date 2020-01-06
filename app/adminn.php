<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminn extends Model
{
    protected $fillable= [
'name',
'number',
'address',
'email',
'password',                      
'post_of_admin',
'img',

                         ];
  //  protected $table='adminns';
}
