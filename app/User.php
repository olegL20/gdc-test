<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Pdazcom\Referrals\Traits\ReferralsMember;
use TMyers\StripeBilling\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable, ReferralsMember;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function isAdmin(): bool
    {
        if ($this->role_id === 1) {
            return true;
        }

        return false;
    }

    public function isVerified(): bool
    {
        return (bool)$this->verified;
    }

    public function cashback()
    {
        return $this->hasOne(Cashback::class);
    }

    public function verification(bool $bool)
    {
        $this->verified = $bool;
        $this->save();
    }
}
