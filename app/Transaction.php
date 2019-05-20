<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ['id'];

    const TYPE_INVEST = 'INVEST';
    const REF_REWARD = 'REWARD FOR REFERRAL INVITATION';
    const TYPE_BALANCE = 'FILL BALANCE';
    const TYPE_OUTPUT = 'PULL BALANCE';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
