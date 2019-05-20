<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralLink extends Model
{
    protected $guarded = ['id'];

    protected $table = 'users_referral_links';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
