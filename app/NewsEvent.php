<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    //
    protected $table = 'newsevent';
    protected $fillable = [
        'id',
        'n_name',
        'n_des',
        'n_detail',
        'n_pic',
        'n_show'
    ];
}
