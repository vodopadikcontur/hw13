<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class columns extends Model
{
    use HasFactory;

    public function board()
    {
        return $this->belongsTo(boards::class);
    }

    public function card()
    {
        return $this->hasMany(cards::class);
    }
}
