<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $table = 'province';
    protected $fillable = [
        'PROVINCE_ID',
        'PROVINCE_NAME',
        'PROVINCE_NAME_ENG',
        'GEO_ID'
    ];
}
