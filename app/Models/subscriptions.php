<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriptions extends Model
{
    use HasFactory;

    public function card()
    {
        return $this->belongsTo(cards::class);
    }

    public function notification()
    {
        return $this->belongsTo(notifications::class);
    }
}
