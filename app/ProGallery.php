<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class ProGallery extends Model
{
    //
    protected $table = 'progal';
    protected $fillable = [
        'id',
        'pg_pic',
        'p_id'
    ];

    public function products() {
        return $this->belongsTo(Products::class, 'p_id');  // Register Foreign Key
    }

}
