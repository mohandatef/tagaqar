<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    protected $table = 'properties';
    protected $fillable=[                   
    'id',
    'whatsapp',
    'skype',
    'title',
    'description',
    'price',
    'map_coordiantes',
    'mobile',
    'email',
     ];
}
