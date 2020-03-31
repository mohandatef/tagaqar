<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    protected $table = 'prperties';
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
