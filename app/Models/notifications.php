<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;

    public function card()
    {
        return $this->belongsTo(cards::class);
    }

    public function subscription()
    {
        return $this->hasMany(subscriptions::class);
    }


}
