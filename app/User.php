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

    const MoneyForInvite = 6500;
    protected $guarded = ['id'];

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

    public function getFullName()
    {
        return $this->name.' '.$this->surname;
    }

    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function rates()
    {
        return $this->belongsToMany(Rate::class);
    }

    public function referralLink()
    {
        return $this->hasOne(ReferralLink::class);
    }

    public function invitedUsers()
    {
        return $this->belongsToMany(User::class, 'referrals', 'ref_id', 'inv_id');
    }

    public function referredUser()
    {
        return $this->belongsToMany(User::class, 'referrals', 'inv_id', 'ref_id');
    }
}
