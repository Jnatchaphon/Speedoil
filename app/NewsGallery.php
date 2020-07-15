<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsEvent;

class NewsGallery extends Model
{
    //
    protected $table = 'newsgal';
    protected $fillable = [
        'id',
        'ng_pic',
        'n_id'
    ];

    public function newsevent() {
        return $this->belongsTo(NewsEvent::class, 'n_id');  // Register Foreign Key
    }
}
