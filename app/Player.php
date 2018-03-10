<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Player extends Model
{
    use Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'file',
    ];

    public function team()
    {
        return $this->belongsTo('App\User');
    }
}
