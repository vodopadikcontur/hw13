<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    use HasFactory;

    protected $table = 'cards';

    public function column()
    {
        return $this->belongsTo(columns::class);
    }

    public function comment()
    {
        return $this->hasMany(comments::class);
    }

    public function subscription()
    {
        return $this->hasMany(subscriptions::class);
    }

    public function notification()
    {
        return $this->hasMany(notifications::class);
    }
}
