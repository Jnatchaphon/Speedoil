<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class Dealer extends Model
{
    //
    protected $table = 'dealer';
    protected $fillable = [
        'id',
        'd_name',
        'd_tel',
        'd_show',
        'PROVINCE_ID'
    ];

    public function provincex() {
        return $this->belongsTo(Province::class, 'PROVINCE_ID');  // Register Foreign Key
    }
}
