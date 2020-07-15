<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'id',
        'p_name',
        'p_des',
        'p_detail',
        'p_pic',
        'p_show'
    ];
}
