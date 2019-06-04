<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function increaseBalance(float $amount)
    {
        $this->amount = $this->amount + $amount;
        $this->save();
    }

    public function getRealBalance(): float
    {
        return number_format(($this->amount - $this->locked_amount), 2, '.', ' ');
    }
}
