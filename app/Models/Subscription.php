<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class)->withtimestamps();
    }


}
