<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashback extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
